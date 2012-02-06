var MobileFrontend2 = mf2 = {
	init: function() {
		// Hook the section toggle
		$( '.mf2-section-container h2' ).click( mf2.toggleSection );
	},

	toggleSection: function() {
		var $header = $( this ),
			$contentDiv = $header.next(),
			buttonMsg;

		// Toggle the div
		$contentDiv.toggle();

		// Change the button text
		buttonMsg = $contentDiv.css( 'display' ) === 'block' ? 'mobile-frontend2-hide-button' : 'mobile-frontend2-show-button';
		$header.find( 'button' ).html( mw.msg( buttonMsg ) );
	}
};

$( mf2.init );