/*
 * Script for Article Feedback Extension
 */
( function( $ ) {

/* Setup for feedback links */

// Only track users who have been assigned to the tracking group
var useClickTracking = 'track' === mw.user.bucket(
	'ext.articleFeedbackv5-tracking', mw.config.get( 'wgArticleFeedbackv5Tracking' )
);

// Info about each of the links
var linkInfo = {
	'4': {
		clickTracking: $.articleFeedbackv5.prefix( 'toolbox-link' )
	}
};

// Click event
var clickFeedbackLink = function ( linkId ) {
	// Click tracking
	if ( useClickTracking && $.isFunction( $.trackActionWithInfo ) ) {
		$.trackActionWithInfo( linkInfo[linkId].clickTracking, mw.config.get( 'wgTitle' ) );
	}
	// Set the link id
	$( '#mw-articlefeedbackv5' ).articleFeedbackv5( 'setLinkId', linkId );
	// Go to the box and flash it
	var $box = $( '#mw-articlefeedbackv5' );
	var count = 0;
	var interval = setInterval( function() {
		// Animate the opacity over .2 seconds
		$box.animate( { 'opacity': 0.5 }, 100, function() {
			// When finished, animate it back to solid.
			$box.animate( { 'opacity': 1.0 }, 100 );
		} );
		// Clear the interval once we've reached 3.
		if ( ++count >= 3 ) {
			clearInterval( interval );
		}
	}, 200 );
}

/* Load at the bottom of the article */
var $aftDiv = $( '<div id="mw-articlefeedbackv5"></div>' ).articleFeedbackv5();

// Put on bottom of article before #catlinks (if it exists)
// Except in legacy skins, which have #catlinks above the article but inside content-div.
var legacyskins = [ 'standard', 'cologneblue', 'nostalgia' ];
if ( $( '#catlinks' ).length && $.inArray( mw.config.get( 'skin' ), legacyskins ) < 0 ) {
	$aftDiv.insertBefore( '#catlinks' );
} else {
	// CologneBlue, Nostalgia, ...
	mw.util.$content.append( $aftDiv );
}

/* Add section links */
$( 'span.editsection' ).append(
	'&nbsp;[' +
	'<a href="#mw-articlefeedbackv5" class="articleFeedbackv5-sectionlink">' +
		mw.msg( 'articlefeedbackv5-section-linktext' ) + '</a>' +
	']'
);
$( 'span.editsection a.articleFeedbackv5-sectionlink' ).click( function () {
	clickFeedbackLink( '1' );
} );

/* Add toolbox link */
var $aftLink4 = $( '<li id="t-articlefeedbackv5"><a href="#mw-articlefeedbackv5"></a></li>' )
	.find( 'a' )
		.text( mw.msg( 'articlefeedbackv5-toolbox-linktext' ) )
		.click( function () { clickFeedbackLink( '4' ) } )
	.end();
$( '#p-tb' ).find( 'ul' ).append( $aftLink4 );

} )( jQuery );
