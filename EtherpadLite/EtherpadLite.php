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
	'version' => '1.09 20120218',
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
#
# Warning: Allowing all urls (not setting a whitelist)
# may be a security concern.
#
# an empty or non-existent array means: no whitelist defined
# this is the default: an empty whitelist. No servers are allowed by default.
$wgEtherpadLiteUrlWhitelist = array();
#
# include "*" if you expressly want to allow all urls (you should not do this)
# $wgEtherpadLiteUrlWhitelist = array( "*" );

# https://www.mediawiki.org/wiki/Manual:Tag_extensions
function wfEtherpadLiteParserInit( $parser ) {
	global $wgEtherpadLitePadsOnThisPage;
	$wgEtherpadLitePadsOnThisPage = array();
	$parser->setHook('eplite', 'wfEtherpadLiteRender');
	return true;
}

function wfEtherpadLiteRender( $input, $args, $parser, $frame ) {

	global $wgUser;
	global $wgEtherpadLiteDefaultPadUrl, $wgEtherpadLiteDefaultWidth, $wgEtherpadLiteDefaultHeight,
		$wgEtherpadLiteMonospacedFont, $wgEtherpadLiteShowControls, $wgEtherpadLiteShowLineNumbers,
		$wgEtherpadLiteShowChat, $wgEtherpadLiteShowAuthorColors, $wgEtherpadLiteUrlWhitelist,
		$wgEtherpadLitePadsOnThisPage;

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
	# Sanitizer::cleanUrl just does some normalization, somewhat not needed.
	$src = Sanitizer::cleanUrl( $src );
	
	switch ( true ) {
	
	# disallow because there is no whitelist or emtpy whitelist
	case ( !isset( $wgEtherpadLiteUrlWhitelist ) 
		|| !is_array( $wgEtherpadLiteUrlWhitelist )
		|| ( count( $wgEtherpadLiteUrlWhitelist ) === 0 ) ):
		return wfEtherpadLiteError( 'etherpadlite-empty-whitelist',
			$src
		);
		break;

	# allow
	case ( in_array( "*", $wgEtherpadLiteUrlWhitelist ) ):
	case ( in_array( $src, $wgEtherpadLiteUrlWhitelist ) ):
		break;

	# otherwise disallow
	case ( !in_array( $src, $wgEtherpadLiteUrlWhitelist ) ):
	default:
		$listOfAllowed = $parser->getFunctionLang()->listToText( $wgEtherpadLiteUrlWhitelist );
		$numberAllowed = $parser->getFunctionLang()->formatNum( count( $wgEtherpadLiteUrlWhitelist ) );
		return wfEtherpadLiteError( 'etherpadlite-url-is-not-whitelisted',
			array( $src, $listOfAllowed, $numberAllowed )
		);
	}

	# Append the id to end of url. Strip off trailing / if present before appending one.
	$url = preg_replace( "/\/+$/", "", $src ) . "/" . $args['id'];

	# prevent multiple iframes and rendering of a same pad on a page
	# show an error message if a pad is found more than once on a page.
	#
	# the empty id however may be used more than once as the empty id invokes an
	# Etherpad Lite server showing its "create a pad" html page.

	if ( !in_array( $url, $wgEtherpadLitePadsOnThisPage ) ) {
		$wgEtherpadLitePadsOnThisPage[] = $url;
	} elseif ( $args['id'] !== "" ) {
		return wfEtherpadLiteError( 'etherpadlite-pad-used-more-than-once', $url );
	}

	
	# preset the pad username from MediaWiki username or IP
	# this not strict, as the pad username can be overwritten in the pad
	#
	# attention: 
	# 1. we must render the page for each visiting user to get their username
	# 2. the pad username can currently be overwritten when editing the pad
	#
	# Future todo might be to make the adding of username optional
	# since disabling of cache has a significant performance impact
	# on larger sites.

	$parser->disableCache();

	# Etherpad Lite requires rawurlencoded userName, thus we must add it manually
	
	$url = wfAppendQuery( $url, array(
			"showControls"     => $showControls,
			"showChat"         => $showChat,
			"showLineNumbers"  => $showLineNumbers,
			"useMonospaceFont" => $useMonospaceFont,
			"noColors"         => $noColors,
		)
	) . "&userName=" . rawurlencode( $wgUser->getName() );

	# @todo One could potentially stuff other css in the width argument
	# since ; isn't checked for. Since overall css is checked for allowed
	# rules, this isn't super big deal.
	$iframeAttributes = array(
 		"style" => "width:" . $args['width'] . ";" .
			"height:" . $args['height'],
		"class" => "eplite-iframe-" . $args['id'] ,
		"src"   => Sanitizer::cleanUrl( $url ),
	);

	$sanitizedAttributes = Sanitizer::validateAttributes( $iframeAttributes, array ( "style", "class", "src" ) );

	if ( !isset( $sanitizedAttributes['src'] ) ) {
		// The Sanitizer decided that the src attribute was no good.
		// (aka used a protocol that isn't in the whitelist)
		return wfEtherpadLiteError( 'etherpadlite-invalid-pad-url', $src );	
	}

	$output = Html::rawElement(
		'iframe', 
		$sanitizedAttributes
	);

	wfDebug( "EtherpadLite:wfEtherpadLiteRender $output\n" );
	return $output;
}
/**
 * Output an error message, all wraped up nicely.
 * @param String $errorName The system message that this error is
 * @param String|Array $param Error parameter (or parameters)
 * @return String Html that is the error.
 */
function wfEtherpadLiteError( $errorName, $param ) {
	// Anything from a parser tag should use Content lang for message,
	// since the cache doesn't vary by user language: do not use wfMsgForContent but wfMsgForContent
	// The ->parse() part makes everything safe from an escaping standpoint.
	return Html::rawElement( 'span', array( 'class' => 'error' ),
		wfMessage( $errorName )->inContentLanguage()->params( $param )->parse()
	);
}
