<?php
/**
 * Special:ArticleCreationLanding. Special page for Artcile creation landing page.
 */
class SpecialArticleCreationLanding extends SpecialPage {

	public function __construct() {
		//Do not list this special page under Special:SpecialPages
		parent::__construct( 'ArticleCreationLanding', '', false );
	}
	
	public function getDescription() {
		return wfMessage( 'ac-landing-page-title' )->plain();
	}

	public function execute( $par ) {
		global $wgOut, $wgUser, $wgGroupPermissions;

		$title = Title::newFromText( $par );

		// bad title 
		if ( !$title instanceof Title ) {
			$title = Title::newMainPage();
		}
		// title exists
		if ( $title->exists() ) {
			$wgOut->redirect( $title->getFullURL() );
			return;
		}
		
		$wgOut->setRobotPolicy( 'noindex,nofollow' );

		if ( $wgUser->isAnon() && !$wgGroupPermissions['*']['edit'] ) {
			$wgOut->addHtml( ArticleCreationTemplates::loadRequestAccountModules( $par ) );		
		} else {
			$wgOut->addModules( 'ext.articleCreation.core' );
			$wgOut->addModules( 'ext.articleCreation.user' );
			$wgOut->addHtml( ArticleCreationTemplates::loadArticleCreationModules( $par ) );	
		}	
	}
	
}
