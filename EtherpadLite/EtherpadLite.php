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
$wgExtensionCredits['other'][] = array(
	'path' => __FILE__,
	'name' => 'EtherpadLite',
	'author' => array( 'Thomas Gries' ),
	'version' => '1.00 20120211',
	'url' => '//www.mediawiki.org/wiki/Extension:EtherpadLite',
	'descriptionmsg' => 'etherpadlite-desc',
);

$dir = dirname( __FILE__ ) . '/';

$wgExtensionMessagesFiles['EtherpadLite'] = $dir . 'EtherpadLite.i18n.php';
$wgHooks['ParserFirstCallInit'][] = 'efEtherpadLiteParser_Initialize';

// https://www.mediawiki.org/wiki/Manual:Tag_extensions
function efEtherpadLiteParser_Initialize( &$parser ) {
	$parser->setHook('eplite', 'efEtherpadLiteParserFunction_Render');
        return true;
}

# Define a default Etherpad Lite server Url and base path
# this server is used unless a distinct server is defined by pad-id="..."
$wgEtherpadLiteDefaultPadUrl    = "http://www.example.com/p/";
$wgEtherpadLiteDefaultWidth     = "300px";
$wgEtherpadLiteDefaultHeigth    = "200px";
$wgEtherpadLiteMonospacedFont   = 'false';
$wgEtherpadLiteShowControls     = 'true';
$wgEtherpadLiteShowLineNumbers  = 'true';
$wgEtherpadLiteShowChat         = 'true';
$wgEtherpadLiteShowAuthorColors = 'true';

function efEtherpadLiteParserFunction_Render( $input, $args, $parser, $frame ) {
	
	global $wgUser;
	global  $wgEtherpadLiteDefaultPadUrl,$wgEtherpadLiteDefaultWidth,
		$wgEtherpadLiteDefaultHeigth,$wgEtherpadLiteMonospacedFont,$wgEtherpadLiteShowControls,
		$wgEtherpadLiteShowLineNumbers,$wgEtherpadLiteShowChat,$wgEtherpadLiteUserName,
		$wgEtherpadLiteShowAuthorColors;

	$padId            = ( !empty( $args['pad-id'] ) ) ? $args['pad-id'] : "" ;
	$height           = ( !empty( $args['height'] ) ) ? $args['height'] : $wgEtherpadLiteDefaultHeight;
	$width            = ( !empty( $args['width'] ) ) ? $args['width'] : $wgEtherpadLiteDefaultWidth;

	$useMonospaceFont = ( !empty( $args['monospaced-font'] ) ) ? $args['monospaced-font'] : $wgEtherpadLiteMonospacedFont;
	$showControls     = ( !empty( $args['show-controls'] ) ) ? $args['show-controls'] : $wgEtherpadLiteShowControls;
	$showLineNumbers  = ( !empty( $args['show-linenumbers'] ) ) ? $args['show-linenumbers'] : $wgEtherpadLiteShowLineNumbers;
	$showChat         = ( !empty( $args['show-chat'] ) ) ? $args['show-chat'] : $wgEtherpadLiteShowChat;
	$noColors         = ! ( ( !empty( $args['show-colors'] ) ) ? $args['show-colors'] : $wgEtherpadLiteShowAuthorColors );
	
	$epliteHostUrl = Sanitizer::cleanUrl ( 
		( !empty( $args['pad-url'] ) ) ? $args['pad-url'] : $wgEtherpadLiteDefaultPadUrl
		);

	// preset the pad username from MediaWiki username or IP
	// attention: 
	// the pad username can currently be overwritten when editing the pad

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
	
	wfDebug( "EtherpadLite:efEtherpadLiteParserFunction_Render $output\n" );
	return array( $output, 'noparse' => true, 'isHTML' => true );

}
