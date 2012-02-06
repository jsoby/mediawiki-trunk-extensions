<?php

/**
 * Hooks for the new mobile frontend
 */
class MobileFrontend2_Hooks {
	/**
	 * Loads the mobile skin if we need to
	 *
	 * @param $context ResourceContext
	 * @param $skin Skin
	 * @return bool
	 */
	public static function createSkin( $context, &$skin ) {
		// Abort if we're not using the mobile frontend
		if ( !MobileFrontend2_Detection::isEnabled() ) {
			return true;
		}

		// TODO: WML support
		$skin = new SkinMobile;

		// Be a dick and halt the hook
		return false;
	}

	/**
	 * Adds jump back a section links to content blocks
	 *
	 * @param $parser MobileFrontend2_Parser
	 * @param $i int
	 * @param $section string
	 * @param $showEditLink bool
	 * @return bool
	 */
	public static function parserSectionCreate( $parser, $i, &$section, $showEditLink ) {
		if ( !MobileFrontend2_Detection::isEnabled() ) {
			return true;
		}

		// We don't enclose the opening section
		if ( $i == 0 ) {
			return true;
		}

		// Separate the header from the section
		preg_match( '/<H[1-6].*?' . '>.*?<\/H[1-6]>/i', $section, $match );
		$headerLength = strlen( $match[0] );

		$section = "<div section_id=\"$i\" id=\"section-$i\" class=\"mf2-section-container\">"
			. substr( $section, 0, $headerLength )
			. '<div class="content_block">'
			. substr( $section, $headerLength )
			. '<div class="section_anchors">'
				. '<a href="#section-' . $i . '" class="back_to_top">'
			. wfMessage( 'mobile-frontend2-back-to-top-of-section' )->escaped()
			. '</a></div></div></div>';

		return true;
	}

	public static function articleView( &$article, &$outputDone, &$useParserCache ) {
		// This is where we want to fetch the article from squids
		return true;
	}

	/**
	 * Perform very early setup
	 *
	 * This implements the parser if we're going to use the frontend
	 * @return bool
	 */
	public static function setup() {
		if ( !MobileFrontend2_Detection::isEnabled() ) {
			return true;
		}
		global $wgMobileFrontend2Logo, $wgExtensionAssetsPath;

		// We need a sane default and $wgExtensionAssetsPath isn't ready until
		// after LocalSettings
		if ( $wgMobileFrontend2Logo === null ) {
			$wgMobileFrontend2Logo = $wgExtensionAssetsPath . '/MobileFrontend2/modules/ext.mobileFrontend2/images/mw.png';
		}
	}
}