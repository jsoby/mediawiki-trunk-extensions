<?php
/**
 * EtherpadLite extension
 *
 * @file
 * @ingroup Extensions
 *
 * The extension adds a tag "eplite" to the MediaWiki parser and
 * provides a method to embed Etherpad Lite pads on MediaWiki pages.
 * An Etherpad Lite server is not part of the extension.
 *
 * Usage:
 *
 * <eplite id="padid" />
 * <eplite id="myPseudoSecretPadHash-7ujHvhq06g" />
 * <eplite id="padid" height="200px" width="600px" />
 * <eplite id="padid" src="http://www.another-pad-server.org/p/" />
 *
 * Installation:
 *
 * Add the following lines in LocalSettings.php:
 *
 * require_once( "$IP/extensions/EtherpadLite/EtherpadLite.php" );
 * Etherpad Lite host server Url. 
 * The shown one is a test server: it is not meant for production.
 * $wgEtherpadLiteDefaultPadUrl    = "http://beta.etherpad.org/p/";
 * $wgEtherpadLiteDefaultWidth     = "600px";
 * $wgEtherpadLiteDefaultHeigth    = "400px";
 *
 * Prerequisite:
 *
 * You need at least one Etherpad Lite host server
 * The shown one is a test server: it is not meant for production.
 * $wgEtherpadLiteDefaultPadUrl = "http://beta.etherpad.org/p/";
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

# Check environment
if ( !defined( 'MEDIAWIKI' ) ) {
	echo( "This is an extension to MediaWiki and cannot be run standalone.\n" );
	die( - 1 );
}

# Credits
$wgExtensionCredits['parserhook'][] = array(
	'path' => __FILE__,
	'name' => 'EtherpadLite',
	'author' => array( 'Thomas Gries' ),
	'version' => '1.06 20120213',
	'url' => 'https://www.mediawiki.org/wiki/Extension:EtherpadLite',
	'descriptionmsg' => 'etherpadlite-desc',
);

$dir = dirname( __FILE__ ) . '/';

$wgExtensionMessagesFiles['EtherpadLite'] = $dir . 'EtherpadLite.i18n.php';
$wgHooks['ParserFirstCallInit'][] = 'wfEtherpadLiteParserInit';

# Define a default Etherpad Lite server Url and base path
# this server is used unless a distinct server is defined by id="..."
$wgEtherpadLiteDefaultPadUrl    = "http://beta.etherpad.org/p/";
$wgEtherpadLiteDefaultWidth     = "300px";
$wgEtherpadLiteDefaultHeight    = "200px";
$wgEtherpadLiteMonospacedFont   = false;
$wgEtherpadLiteShowControls     = true;
$wgEtherpadLiteShowLineNumbers  = true;
$wgEtherpadLiteShowChat         = true;
$wgEtherpadLiteShowAuthorColors = true;

# Whitelist of allowed Etherpad Lite server Urls
#
# If there are items in the array, and the user supplied URL is not in the array,
# the url will not be allowed (proposed in bug 27768 for Extension:RSS)
# Attention: 
# Urls are case-sensitively tested against values in the array. 
# They must exactly match including any trailing "/" character.
$wgEtherpadLiteUrlWhitelist = array();

# https://www.mediawiki.org/wiki/Manual:Tag_extensions
function wfEtherpadLiteParserInit( $parser ) {
	$parser->setHook('eplite', 'wfEtherpadLiteRender');
	return true;
}

function wfEtherpadLiteRender( $input, $args, $parser, $frame ) {

	global $wgUser;
	global $wgEtherpadLiteDefaultPadUrl, $wgEtherpadLiteDefaultWidth, $wgEtherpadLiteDefaultHeight,
		$wgEtherpadLiteMonospacedFont, $wgEtherpadLiteShowControls, $wgEtherpadLiteShowLineNumbers,
		$wgEtherpadLiteShowChat, $wgEtherpadLiteShowAuthorColors, $wgEtherpadLiteUrlWhitelist;

	# check the user input

	# undefined id= attributes are replaced by id="" and result
	# in Etherpad Lite server showing its entry page - where you can open a new pad.
	$args['id']       = ( isset( $args['id'] ) ) ? $args['id'] : "";

	$args['height']   = ( isset( $args['height'] ) ) ? $args['height'] : $wgEtherpadLiteDefaultHeight;
	$args['width']    = ( isset( $args['width'] ) ) ? $args['width'] : $wgEtherpadLiteDefaultWidth;
	
	$useMonospaceFont = wfBoolToStr(
		( ( isset( $args['monospaced-font'] ) ) ? filter_var( $args['monospaced-font'], FILTER_VALIDATE_BOOLEAN ) : $wgEtherpadLiteMonospacedFont )
	);

	$showControls = wfBoolToStr(
		( ( isset( $args['show-controls'] ) ) ? filter_var( $args['show-controls'], FILTER_VALIDATE_BOOLEAN ) : $wgEtherpadLiteShowControls )
	);

	$showLineNumbers = wfBoolToStr(
		( ( isset( $args['show-linenumbers'] ) ) ? filter_var( $args['show-linenumbers'], FILTER_VALIDATE_BOOLEAN ) : $wgEtherpadLiteShowLineNumbers )
	);
			
	$showChat = wfBoolToStr(
		( ( isset( $args['show-chat'] ) ) ? filter_var( $args['show-chat'], FILTER_VALIDATE_BOOLEAN ) : $wgEtherpadLiteShowChat )
	);
	
	$noColors = wfBoolToStr(
		! ( ( isset( $args['show-colors'] ) ) ? filter_var( $args['show-colors'], FILTER_VALIDATE_BOOLEAN ) : $wgEtherpadLiteShowAuthorColors )
	);

	# src= is the pad server base url and is user input in <eplite src= > tag from MediaWiki page
	# id=  is the pad name (also known as pad id) and is user input in <eplite id=  > tag from MediaWiki page
	
	$src = ( isset( $args['src'] ) ) ? $args['src'] : $wgEtherpadLiteDefaultPadUrl;
	
	# Anything from a parser tag should use Content lang for message,
	# since the cache doesn't vary by user language: do not use wfMsgForContent but wfMsgForContent
	if ( count( $wgEtherpadLiteUrlWhitelist ) && !in_array( $src, $wgEtherpadLiteUrlWhitelist ) ) {
		return wfMsgForContent( 'etherpadlite-url-is-not-whitelisted', htmlspecialchars( $src ) );
	}

	if ( !Http::isValidURI( $src ) ) {
		return wfMsgForContent( 'etherpadlite-invalid-pad-url', htmlspecialchars( $src ) );
	} else {
		$args['src'] = Sanitizer::cleanUrl ( $src );
	}
	
	# let's use the MediaWiki santizer for our user attributes
	
	$sanitizedAttributes = Sanitizer::validateAttributes( $args, array ( "width", "height", "id", "src" ) );

	$url = Sanitizer::cleanUrl( preg_replace( "/\/+$/", "", $sanitizedAttributes['src'] ) . "/" . $sanitizedAttributes['id'] );

	# just check again with the pad id appended

	if ( !Http::isValidURI( $url ) ) {
		return wfMsgForContent( 'etherpadlite-invalid-pad-url', htmlspecialchars( $url ) );
	}
	
	# preset the pad username from MediaWiki username or IP
	# this not strict, as the pad username can be overwritten in the pad
	#
	# attention: 
	# 1. we must render the page for each visiting user to get their username
	# 2. the pad username can currently be overwritten when editing the pad

	$parser->disableCache();

	$url = wfAppendQuery( $url, array(
			"showControls"     => $showControls,
			"showChat"         => $showChat,
			"showLineNumbers"  => $showLineNumbers,
			"useMonospaceFont" => $useMonospaceFont,
			"noColors"         => $noColors,
			"userName"         => rawurlencode( $wgUser->getName() ),
		)
	);
	
	$iframeAttributes = array(
 		"style" => "width:" . $sanitizedAttributes['width'] . ";" .
			"height:" . $sanitizedAttributes['height'],
		"class" => "eplite-iframe-" . $sanitizedAttributes['id'] ,
		"src"   => Sanitizer::cleanUrl( $url ),
	);

	$output = Html::rawElement(
		'iframe', 
		Sanitizer::validateAttributes( $iframeAttributes, array ( "style", "class", "src" ) ) 
	);

	wfDebug( "EtherpadLite:wfEtherpadLiteRender $output\n" );
	return array( $output );
}
