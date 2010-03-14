<?php
/**
 * File holding the SpecialStory class defining a special page to view a specific story for permalink purpouses.
 *
 * @file Story_body.php
 * @ingroup Storyboard
 * @ingroup SpecialPage
 *
 * @author Jeroen De Dauw
 */

if ( !defined( 'MEDIAWIKI' ) ) {
	die( 'Not an entry point.' );
}

class SpecialStory extends IncludableSpecialPage {

	public function __construct() {
		parent::__construct( 'Story' );
	}

	public function execute( $identifier ) {
		wfProfileIn( __METHOD__ );
		
		if ( trim($identifier) == '' ) {
			global $wgOut;			
			$wgOut->addHTML( wfMsg( 'storyboard-nostorytitle' ) );
			return;
		}
		
		$dbr = wfGetDB( DB_SLAVE );
		
		if ( is_numeric( $identifier ) ) {
			$conds = array(
				'story_id' => $identifier
			);
		} else {
			$conds = array(
				'story_title' => str_replace( '_', ' ', $identifier ) // TODO: escaping required?
			);			
		}
		
		$stories = $dbr->Select( 
			'storyboard',
			array(
				'story_id',
				'story_author_name',
				'story_title',
				'story_text',
				'story_created',
				'story_is_published',		
			),
			$conds
		);
		
		$story = $dbr->fetchObject( $stories );

		if ( $story ) {
			if ( $story->story_is_published == 1 ) {
				$this->showStory( $story );
			}
			else {
				$wgOut->addHTML( wfMsg( 'storyboard-unpublished' ) );
			}			
		}
		else {
			global $wgOut;
			$wgOut->addHTML( wfMsg( 'storyboard-nosuchstory' ) );
		}
		
		wfProfileOut( __METHOD__ );
	}
	
	private function showStory( $story ) {
		global $wgOut;
		
		$wgOut->addHTML( '' ); // TODO: add output
	}
}