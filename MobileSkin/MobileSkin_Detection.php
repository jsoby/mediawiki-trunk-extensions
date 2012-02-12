<?php

/**
 * Class containing all detection logic for mobile skin
 */
class MobileSkin_Detection {

	/**
	 * Cached detection result
	 *
	 * @var null|bool
	 */
	protected static $enabled = null;

	/**
	 * Main function deciding if the MobileSkin should be enabled
	 *
	 * @return bool
	 */
	public static function isEnabled() {
		if ( self::$enabled !== null ) {
			return self::$enabled;
		}

		self::detect();

		return self::$enabled;
	}

	private static function detect() {
		$request = RequestContext::getMain()->getRequest();
		$useFormat = $request->getText( 'useformat' );

		// Start with the basics, did they force the skin?
		if ( $useFormat == 'mobile' ) {
			return self::enable();
		}

		// TODO: Other detection magic

		// Nope. No mobile skin for you.
		return self::disable();
	}

	/**
	 * Enable mobile skin
	 *
	 * @return bool
	 */
	private static function enable() {
		global $wgResourceModules;

		self::$enabled = true;

		// Do some initialization
		MobileSkin_Options::detect();

		return true;
	}

	/**
	 * Disable mobile skin
	 *
	 * @return bool
	 */
	private static function disable() {
		self::$enabled = false;
		return false;
	}
}
