<?php
/**
* Extension MobileSkin — Mobile Skin
*
* @file
* @ingroup Extensions
*/

// Needs to be called within MediaWiki; not standalone
if ( !defined( 'MEDIAWIKI' ) ) {
	echo( "This is an extension to the MediaWiki package and cannot be run standalone.\n" );
	die( -1 );
}

// Extension credits that will show up on Special:Version
$wgExtensionCredits['other'][] = array(
	'path' => __FILE__,
	'name' => 'MobileSkin',
	'version' => 1,
	'author' => 'John Du Hart',
	'descriptionmsg' => 'mobile-skin-desc',
	'url' => 'https://www.mediawiki.org/wiki/Extension:MobileSkin',
);

$dir = dirname( __FILE__ ) . '/';
$wgExtensionMessagesFiles['MobileSkin'] = $dir . 'MobileSkin.i18n.php';

$wgAutoloadClasses['MobileSkin_Detection'] = $dir . 'MobileSkin_Detection.php';
$wgAutoloadClasses['MobileSkin_Hooks'] = $dir . 'MobileSkin_Hooks.php';
$wgAutoloadClasses['MobileSkin_Options'] = $dir . 'MobileSkin_Options.php';
$wgAutoloadClasses['MobileSkin_PostParse'] = $dir . 'MobileSkin_PostParse.php';

// Skins
$wgAutoloadClasses['SkinMobile'] = $dir . 'skins/Mobile.php';

// Hooks
$wgHooks['RequestContextCreateSkin'][] = 'MobileSkin_Hooks::createSkin';
$wgHooks['ParserSectionCreate'][] = 'MobileSkin_Hooks::parserSectionCreate';
$wgHooks['ArticleViewHeader'][] = 'MobileSkin_Hooks::articleView';
$wgHooks['ResourceLoaderGetStartupModules'][] = 'MobileSkin_Hooks::startupModule';
$wgHooks['ResourceLoaderRegisterModules'][] = 'MobileSkin_Hooks::registerModules';
$wgHooks['BeforeInitialize'][] = 'MobileSkin_Hooks::beforeInitialize';
$wgExtensionFunctions[] = 'MobileSkin_Hooks::setup';

// Modules
$commonModuleInfo = array(
	'localBasePath' => dirname( __FILE__ ) . '/modules',
	'remoteExtPath' => 'MobileSkin/modules',
);

// Main style
$wgResourceModules['ext.mobileSkin'] = array(
	'scripts' => 'ext.mobileSkin/ext.mobileSkin.js',
	'messages' => array(
		'mobile-skin-show-button',
		'mobile-skin-hide-button',
	),
	'dependencies' => array(
		'mediawiki.util.lite',
		'mediawiki.api.lite',
	),
) + $commonModuleInfo;

$wgResourceModules['ext.mobileSkin.common'] = array(
	'styles' => array(
		'ext.mobileSkin/ext.mobileSkin.css',
		'ext.mobileSkin/ext.mobileSkin.search.css',
	),
) + $commonModuleInfo;

$wgResourceModules['zepto'] = array(
	'scripts' => array(
		'zepto/zepto.js',
		'zepto/zepto.mw.js',
	),
) + $commonModuleInfo;

// Config
/**
 * Logo used on MobileSkin
 *
 * @var $wgMobileSkinLogo string
 */
$wgMobileSkinLogo = null;