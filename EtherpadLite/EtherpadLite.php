<?php
/**
 * EtherpadLite extension
 *
 * @file
 * @ingroup Extensions
 *
 * The extension adds a tag "eplite" to the MediaWiki parser and
 * provides a method to embed Etherpad Lite pads on MediaWiki pages.
 * The Etherpad Lite server is not part of the extension.
 *
 * Usage:
 *
 * <eplite pad-id="padid" />
 * <eplite pad-id="myPseudoSecretPadHash-7ujHvhq06g" />
 * <eplite pad-id="padid" height="200px" width="600px" />
 *
 * Installation:
 *
 * Add the following lines in LocalSettings.php:
 *
 * require_once( "$IP/extensions/EtherpadLite/EtherpadLite.php" );
 * $wgEtherpadLiteDefaultPadUrl    = "http://www.your-pad-server.org/p/";
 * $wgEtherpadLiteDefaultWidth     = "600px";
 * $wgEtherpadLiteDefaultHeigth    = "400px";
 *
 * Prerequisite:
 *
 * Etherpad Lite host server (example)
 * $wgEtherpadLiteDefaultPadUrl = "http://www.example.com/p/";
 *
 * For setting up your own Etherpad Lite server (based on node.js) see 
 * Etherpad Lite homepage https://github.com/Pita/etherpad-lite
 *
 * This extension is based on:
 *
 * https://github.com/johnyma22/etherpad-lite-jquery-plugin
 * https://github.com/Pita/etherpad-lite/wiki/Embed-Parameters
 *
 * The present MediaWiki extension does not require jquery. It adds an iframe.
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

// Check environment
if ( !defined( 'MEDIAWIKI' ) ) {
	echo( "This is an extension to MediaWiki and cannot be run standalone.\n" );
	die( - 1 );
}

// Credits
$wgExtensionCredits['parserhook'][] = array(
	'path' => __FILE__,
	'name' => 'EtherpadLite',
	'author' => array( 'Thomas Gries' ),
	'version' => '1.01 20120212',
	'url' => 'https://www.mediawiki.org/wiki/Extension:EtherpadLite',
	'descriptionmsg' => 'etherpadlite-desc',
);

$dir = dirname( __FILE__ ) . '/';

$wgExtensionMessagesFiles['EtherpadLite'] = $dir . 'EtherpadLite.i18n.php';
$wgHooks['ParserFirstCallInit'][] = 'wfEtherpadLiteParserInit';

// https://www.mediawiki.org/wiki/Manual:Tag_extensions
function wfEtherpadLiteParserInit( $parser ) {
	$parser->setHook('eplite', 'wfEtherpadLiteRender');
	return true;
}

# Define a default Etherpad Lite server Url and base path
# this server is used unless a distinct server is defined by pad-id="..."
$wgEtherpadLiteDefaultPadUrl    = "http://www.example.com/p/";
$wgEtherpadLiteDefaultWidth     = "300px";
$wgEtherpadLiteDefaultHeight    = "200px";
$wgEtherpadLiteMonospacedFont   = false;
$wgEtherpadLiteShowControls     = true;
$wgEtherpadLiteShowLineNumbers  = true;
$wgEtherpadLiteShowChat         = true;
$wgEtherpadLiteShowAuthorColors = true;

function wfEtherpadLiteTestAndReturnBoolean( $var, $default ) {
	# http://www.php.net/manual/en/function.is-bool.php#104643
	return ( isset( $var ) ) ? filter_var( $var, FILTER_VALIDATE_BOOLEAN ) : $default;
}

function wfEtherpadLiteRender( $input, $args, $parser, $frame ) {

	global $wgUser;
	global $wgEtherpadLiteDefaultPadUrl, $wgEtherpadLiteDefaultWidth, $wgEtherpadLiteDefaultHeight,
		$wgEtherpadLiteMonospacedFont, $wgEtherpadLiteShowControls, $wgEtherpadLiteShowLineNumbers,
		$wgEtherpadLiteShowChat, $wgEtherpadLiteShowAuthorColors;

	$padId            = ( isset( $args['pad-id'] ) ) ? $args['pad-id'] : "" ;
	$height           = ( isset( $args['height'] ) ) ? $args['height'] : $wgEtherpadLiteDefaultHeight;
	$width            = ( isset( $args['width'] ) ) ? $args['width'] : $wgEtherpadLiteDefaultWidth;

	$useMonospaceFont = wfEtherpadLiteTestAndReturnBoolean( $args['monospaced-font'], $wgEtherpadLiteMonospacedFont );
	$showControls     = wfEtherpadLiteTestAndReturnBoolean( $args['show-controls'], $wgEtherpadLiteShowControls ) ;
	$showLineNumbers  = wfEtherpadLiteTestAndReturnBoolean( $args['show-linenumbers'], $wgEtherpadLiteShowLineNumbers );
	$showChat         = wfEtherpadLiteTestAndReturnBoolean( $args['show-chat'], $wgEtherpadLiteShowChat );
	$noColors         = ! ( wfEtherpadLiteTestAndReturnBoolean( $args['show-colors'], $wgEtherpadLiteShowAuthorColors ) );

	$epliteHostUrl = Sanitizer::cleanUrl ( 
		( isset( $args['pad-url'] ) ) ? $args['pad-url'] : $wgEtherpadLiteDefaultPadUrl
	);

	// preset the pad username from MediaWiki username or IP
	
	// attention: 
	// 1. we must render the page for each visiting user to get their username
	// 2. the pad username can currently be overwritten when editing the pad

	$parser->disableCache();
	$userName  = $wgUser->getName();

	$iframeAttributes = array(
		"style"      => "width:$width;height:$height",
		"id"         => "epframe$padId",
		"src"        => "$epliteHostUrl/$padId" .
				"?showControls=$showControls" .
				"&showChat=$showChat" .
				"&showLineNumbers=$showLineNumbers" .
				"&useMonospaceFont=$useMonospaceFont" .
				"&userName=$userName" .
				"&noColors=$noColors"
		);

	$output = Html::rawElement( 'iframe', $iframeAttributes );

	wfDebug( "EtherpadLite:wfEtherpadLiteRender $output\n" );
	return array( $output );
}
