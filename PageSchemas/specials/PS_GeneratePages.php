<?php
/**
 * Displays an interface to let users create all pages based on the
 * Page Schemas XML.
 *
 * @author Ankit Garg
 * @author Yaron Koren
 */


class PSGeneratePages extends IncludableSpecialPage {
	function __construct() {
		parent::__construct( 'GeneratePages' );
	}

	function execute( $category ) {
		global $wgRequest, $wgOut;

		$this->setHeaders();
		$param = $wgRequest->getText('param');
		if ( !empty( $param ) && !empty( $category ) ) {
			// Generate the pages!
			$this->generatePages( $param, $wgRequest->getArray( 'page' ) );
			$text = Html::element( 'p', null, wfMsg( 'ps-generatepages-success' ) );
			$wgOut->addHTML( $text );
			return true;
		}

		if ( $category == "") {
			// No category listed - show a list of links to all
			// categories with a page schema defined.
			$text = "";
			$categoryNames = PageSchemas::getCategoriesWithPSDefined();
			$generatePagesPage = SpecialPage::getTitleFor( 'GeneratePages' );
			foreach( $categoryNames as $categoryName ) {
				$url = $generatePagesPage->getFullURL() . '/' . $categoryName;
				$text .= '<a href="' . $url . '">' . $categoryName . '</a> <br /> ';
			}
			$wgOut->addHTML( $text );
			return true;
		}

		// Standard "generate pages" form, with category name set.
		// Check for a valid category, with a page schema defined.
		$pageSchemaObj = new PSSchema( $category );
		if ( !$pageSchemaObj->isPSDefined() ) {
			$text = Html::element( 'p', null, wfMsg( 'ps-generatepages-noschema' ) );
			$wgOut->addHTML( $text );
			return true;
		}

		$text = Html::element( 'p', null, wfMsg( 'ps-generatepages-desc' ) ) . "\n";
		$text .= '<form method="post">';
		$text .= Html::input( 'param', $category, 'hidden' ) . "\n";

		// This hook will set an array of strings, with each value
		// as a title of a page to be created.
		$pageList = array();
		wfRunHooks( 'PageSchemasGetPageList', array( $pageSchemaObj, &$pageList ) );
		// SpecialPage::getSkin() was added in MW 1.18
		if ( is_callable( 'SpecialPage', 'getSkin' ) ) {
			$skin = $this->getSkin();
		} else {
			global $wgUser;
			$skin = $wgUser->getSkin();
		}
		foreach( $pageList as $page ){
			$pageName = PageSchemas::titleString( $page );
			$text .= Html::input( 'page[]', $pageName, 'checkbox', array( 'checked' => true ) );
			$text .= "\n" . $skin->link( $page ) . "<br />\n";
		}
		$text .= "<br />\n";
		$text .= Html::input( null, wfMsg( 'generatepages' ), 'submit' );
		$text .= "\n</form>";
		$wgOut->addHTML( $text );
		return true;
	}

	function generatePages( $categoryName, $toGenPageList ) {
		$pageSchema = new PSSchema( $categoryName );
		$pageSchema->generateAllPages( $toGenPageList );
	}
}
