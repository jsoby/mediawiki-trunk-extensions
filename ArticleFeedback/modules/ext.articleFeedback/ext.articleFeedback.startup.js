/*
 * Script for Article Feedback Extension
 */

jQuery( function( $ ) {
	if (
		// Main namespace articles
		$.inArray( mw.config.get( 'wgNamespaceNumber' ), mw.config.get( 'wgArticleFeedbackNamespaces', [] ) ) > -1
		// Existing pages
		&& mw.config.get( 'wgArticleId' ) > 0
		// View pages
		&& ( mw.config.get( 'wgAction' ) == 'view' || mw.config.get( 'wgAction' ) == 'purge' )
		// Current revision
		&& mw.util.getParamValue( 'diff' ) == null
		&& mw.util.getParamValue( 'oldid' ) == null
		// Not viewing a redirect
		&& mw.util.getParamValue( 'redirect' ) != 'no'
		// Not viewing the printable version
		&& mw.util.getParamValue( 'printable' ) != 'yes'
	) {
		// Assign a tracking bucket using options from wgArticleFeedbackTracking
		mw.user.bucket(
			'ext.articleFeedback-tracking', mw.config.get( 'wgArticleFeedbackTracking' )
		);

		// Collect categories for intersection tests
		var categories = {
			'include': mw.config.get( 'wgArticleFeedbackCategories', [] ),
			'exclude': mw.config.get( 'wgArticleFeedbackBlacklistCategories', [] ),
			'current': mw.config.get( 'wgCategories', [] )
		};

		// Category exclusion
		var disable = false;
		for ( var i = 0; i < categories.current.length; i++ ) {
			if ( $.inArray( categories.current[i], categories.exclude ) > -1 ) {
				disable = true;
				break;
			}
		}

		// Category inclusion
		var enable = false;
		for ( var i = 0; i < categories.current.length; i++ ) {
			if ( $.inArray( categories.current[i], categories.include ) > -1 ) {
				enable = true;
				break;
			}
		}

		// Lottery inclusion
		var wonLottery = ( Number( mw.config.get( 'wgArticleId', 0 ) ) % 1000 )
				< Number( mw.config.get( 'wgArticleFeedbackLotteryOdds', 0 ) ) * 10;

		// Lazy loading
		if ( !disable && ( wonLottery || enable ) ) {
			mw.loader.load( 'ext.articleFeedback' );
		}
	}
} );
