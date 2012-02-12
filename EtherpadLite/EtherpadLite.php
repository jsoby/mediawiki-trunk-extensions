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
	'version' => '1.03 20120212',
	'url' => 'https://www.mediawiki.org/wiki/Extension:EtherpadLite',
	'descriptionmsg' => 'etherpadlite-desc',
);

$dir = dirname( __FILE__ ) . '/';

$wgExtensionMessagesFiles['EtherpadLite'] = $dir . 'EtherpadLite.i18n.php';
$wgHooks['ParserFirstCallInit'][] = 'wfEtherpadLiteParserInit';

# https://www.mediawiki.org/wiki/Manual:Tag_extensions
function wfEtherpadLiteParserInit( $parser ) {
	$parser->setHook('eplite', 'wfEtherpadLiteRender');
	return true;
}

# Define a default Etherpad Lite server Url and base path
# this server is used unless a distinct server is defined by id="..."
$wgEtherpadLiteDefaultPadUrl    = "http://www.example.com/p/";
$wgEtherpadLiteDefaultWidth     = "300px";
$wgEtherpadLiteDefaultHeight    = "200px";
$wgEtherpadLiteMonospacedFont   = false;
$wgEtherpadLiteShowControls     = true;
$wgEtherpadLiteShowLineNumbers  = true;
$wgEtherpadLiteShowChat         = true;
$wgEtherpadLiteShowAuthorColors = true;


function wfEtherpadLiteStringFromTestedBoolean( $var, $default ) {
	# http://www.php.net/manual/en/function.is-bool.php#104643
	$booleanVar = ( isset( $var ) ) ? filter_var( $var, FILTER_VALIDATE_BOOLEAN ) : $default;
	return ( $booleanVar ) ? "true" : "false";
}

function wfEtherpadLiteRender( $input, $args, $parser, $frame ) {

	global $wgUser;
	global $wgEtherpadLiteDefaultPadUrl, $wgEtherpadLiteDefaultWidth, $wgEtherpadLiteDefaultHeight,
		$wgEtherpadLiteMonospacedFont, $wgEtherpadLiteShowControls, $wgEtherpadLiteShowLineNumbers,
		$wgEtherpadLiteShowChat, $wgEtherpadLiteShowAuthorColors;

	# undefined id= attributes are replaced by id="" and result
	# in Etherpad Lite server showing its entry page - where you can open a new pad.
	$args['id']       = ( isset( $args['id'] ) ) ? $args['id'] : "";

	$args['height']   = ( isset( $args['height'] ) ) ? $args['height'] : $wgEtherpadLiteDefaultHeight;
	$args['width']    = ( isset( $args['width'] ) ) ? $args['width'] : $wgEtherpadLiteDefaultWidth;
	
	$useMonospaceFont = wfEtherpadLiteStringFromTestedBoolean( $args['monospaced-font'], $wgEtherpadLiteMonospacedFont );
	$showControls     = wfEtherpadLiteStringFromTestedBoolean( $args['show-controls'], $wgEtherpadLiteShowControls ) ;
	$showLineNumbers  = wfEtherpadLiteStringFromTestedBoolean( $args['show-linenumbers'], $wgEtherpadLiteShowLineNumbers );
	$showChat         = wfEtherpadLiteStringFromTestedBoolean( $args['show-chat'], $wgEtherpadLiteShowChat );
	$noColors         = ! ( wfEtherpadLiteStringFromTestedBoolean( $args['show-colors'], $wgEtherpadLiteShowAuthorColors ) );

	$args['src'] = Sanitizer::cleanUrl ( 
		( isset( $args['src'] ) ) ? $args['src'] : $wgEtherpadLiteDefaultPadUrl
	);

	# preset the pad username from MediaWiki username or IP
	
	# attention: 
	# 1. we must render the page for each visiting user to get their username
	# 2. the pad username can currently be overwritten when editing the pad

	$parser->disableCache();
	$userName  = $wgUser->getName();
	
	$sanitizedAttributes = Sanitizer::validateAttributes( $args, array ( "width", "height", "id", "src" ) );
	
	$iframeAttributes = array(
 		"style"      => "width:" . $sanitizedAttributes['width'] . ";" .
				"height:" . $sanitizedAttributes['height'],
		"id"         => "eplite-iframe-" . $sanitizedAttributes['id'] ,
		"src"        => $sanitizedAttributes['src'] . "/" . $sanitizedAttributes['id'] . 
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
