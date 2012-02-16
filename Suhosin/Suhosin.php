<?php
/**
 * Suhosin extension
 *
 * @file
 * @ingroup Extensions
 *
 * The extension adapts MediaWiki settings to corresponding settings 
 * of php.ini for Hardened-PHP Project ("Suhosin extension")
 *
 * Installation:
 *
 * Add the following line in LocalSettings.php:
 * require_once( "$IP/extensions/Suhosin/Suhosin.php" );
 *
 * This extension is based on:
 * https://www.mediawiki.org/wiki/Manual:Suhosin_(Hardened-PHP_Project_patch_and_extension)
 *
 * @author Thomas Gries
 * @license GPL v2
 * @license MIT
 *
 * Dual licensed under the MIT and GPL licenses:
 * http://www.opensource.org/licenses/mit-license.php
 * http://www.gnu.org/licenses/gpl.html
 *
 */

# Check environment
if ( !defined( 'MEDIAWIKI' ) ) {
	echo( "This is an extension to MediaWiki and cannot be run standalone.\n" );
	die( - 1 );
}

# Credits
$wgExtensionCredits['parserhook'][] = array(
	'path' => __FILE__,
	'name' => 'Suhosin',
	'author' => array( 'Thomas Gries' ),
	'version' => '1.08 20120215',
	'url' => 'https://www.mediawiki.org/wiki/Extension:Suhosin',
	'descriptionmsg' => 'suhosin-desc',
);

$dir = dirname( __FILE__ ) . '/';
$wgExtensionMessagesFiles['Suhosin'] = $dir . 'Suhosin.i18n.php';

# Query string length limit for ResourceLoader. You should only set this if
# your web server has a query string length limit (then set it to that limit),
# or if you have suhosin.get.max_value_length set in php.ini (then set it to
# that value)
# Default in DefaultSettings.php:
# $wgResourceLoaderMaxQueryLength = -1;

if ( extension_loaded( "suhosin" ) 
	&& ini_get( "suhosin.get.max_name_length" ) 
	&& isset( $wgResourceLoaderMaxQueryLength ) 
	&& $wgResourceLoaderMaxQueryLength > 0 ) {

		// suhosin is active, thus do something meaningful with ini_get( "suhosin.get.max_name_length" )
		$wgResourceLoaderMaxQueryLength = min( $wgResourceLoaderMaxQueryLength, ini_get( "suhosin.get.max_name_length" ) );
}
