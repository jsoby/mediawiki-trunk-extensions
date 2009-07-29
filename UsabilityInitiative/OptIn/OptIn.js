/* JavaScript for OptIn extension */

function optInGetPOSTData() {
	var browserIndex = 'other';
	switch ( $.browser.name ) {
		case 'msie':
			browserIndex = 'ie'+ parseInt( $.browser.versionNumber );
		break;
		case 'firefox':
			browserIndex = 'ff' + parseInt( $.browser.versionNumber );
		break;
		case 'chrome':
			browserIndex = 'c' + parseInt( $.browser.versionNumber ); // FIXME: Chrome Beta?
		break;
		case 'safari':
			browserIndex = 's' + parseInt( $.browser.versionNumber );
		break;
		case 'opera':
			if ( parseInt( $.browser.versionNumber ) == 9 ) {
				if ( $.browser.version.substr( 0, 3 ) == '9.5' )
					browserIndex = 'o9.5';
				else
					browserIndex = 'o9';
			} else if ( parseInt( $.browser.versionNumber ) == 10 )
				browserIndex = 'o10';
		break;
	}

	var osIndex = 'other';
	switch ( $.os.name ) {
		case 'win':
			osIndex = 'windows';
		break;
		case 'mac':
			osIndex = 'macos';
		break;
		case 'linux':
			osIndex = 'linux';
		break;
	}
	
	return { 'survey-browser': browserIndex, 'survey-os': osIndex,
		'survey-res-x': screen.width, 'survey-res-y': screen.height,
		'opt': 'browser' };
}

$( document ).ready( function() {
	$( '.optin-other-select' ).parent().hide();
	$( 'select.optin-need-other' ).change( function() {
		if( $(this).val() == 'other' )
			$( '#' + $(this).attr( 'id' ) + '-other' ).parent().slideDown( 'fast' );
		else
			$( '#' + $(this).attr( 'id' ) + '-other' ).parent().slideUp( 'fast' );
	});
	
	$( '.optin-other-radios, .optin-other-checks' ).click( function() {
		$(this).prev().prev().attr( 'checked', true );
	});
	
	$( '.survey-ifyes, .survey-ifno' ).hide();
	$( '.survey-yes, .survey-no' ).change( function() {
		yesrow = $( '#' + $(this).attr( 'name' ) + '-ifyes-row' );
		norow = $( '#' + $(this).attr( 'name' ) + '-ifno-row' );
		if( $(this).is( '.survey-yes:checked' ) ) {
			yesrow.slideDown( 'fast' );
			norow.slideUp( 'fast' );
		} else if( $(this).is( '.survey-no:checked' ) ) {
			yesrow.slideUp( 'fast' );
			norow.slideDown( 'fast' );
		}
	});
	// Load initial state
	$( '.survey-yes, .survey-no' ).change();
	
	var detected = optInGetPOSTData();
	// Detect screen resolution
	if ( screen.width && screen.height ) {
		$( '.optin-resolution-x' ).val( detected['survey-res-x'] );
		$( '.optin-resolution-y' ).val( detected['survey-res-y'] );
		// Hide the fields?
	}

	$( '#survey-browser' ).val( detected['survey-browser'] );
	$( '#survey-os' ).val( detected['survey-os'] );
});
