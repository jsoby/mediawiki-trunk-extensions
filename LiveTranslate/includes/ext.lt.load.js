/**
 * JavasSript for the Live Translate extension.
 * @see https://www.mediawiki.org/wiki/Extension:Live_Translate
 *
 * @licence GNU GPL v3 or later
 * @author Jeroen De Dauw <jeroendedauw at gmail dot com>
 */

(function( $ ) { $( document ).ready( function() {

	$( '#livetranslatediv' ).liveTranslate( {} );

} ); })( jQuery );