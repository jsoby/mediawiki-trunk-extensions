<?php

class SpecialExample extends SpecialPage {
	
	function __construct() {
		parent::__construct( 'Example' );
	}
	
	/**
	 * Make your magic happen!
	 */
	function execute( $par ) {
		global $wgOut;
		
		$wgOut->addWikimsg( 'example-example' );
	}
}
