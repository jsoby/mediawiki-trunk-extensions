/**
 * QUnit tests for Narayam typing rules
 *
 * @file
 * @copyright Copyright © 2012 Santhosh Thottingal
 * @license http://www.gnu.org/copyleft/gpl.html GNU General Public License 2.0 or later
 */
( function () {

module( "ext.narayam.rules", QUnit.newMwEnvironment() );

function setup() {
	$.narayam.setup();
	$.narayam.enable();
}

function teardown() {
	// we need to disable narayam, otherwise many typing simulation based test eg: jquery.byteLimitTest will fail.
	$.narayam.disable();
}

test( "-- Initial check", function() {
	expect( 1 );
	ok( $.narayam,  '$.narayam is defined' );
} );

// Basic sendkey-implementation
typeChars = function( $input, charstr ) {
	var len = charstr.length;
	for ( var i = 0; i < len; i++ ) {
		// Get the key code
		var code = charstr.charCodeAt(i);
		// Trigger event and undo if prevented
		var event = new jQuery.Event( 'keypress', { keyCode: code, which: code, charCode: code } );
		$input.trigger( event );
	}
};

/**
 * Test factory for narayamTest
 */
var narayamTest = function( options ) {
	var opt = $.extend( {
		description: '', // Test description
		$input: null,
		tests: [],
		scheme: '' // The input method name.
	}, options );
	
	test( opt.description, function() {
		expect( opt.tests.length );
		$.narayam.enable();
		stop();
		$.narayam.setScheme( opt.scheme, function () {
			opt.$input.appendTo( '#qunit-fixture' );
			$.narayam.addInputs( opt.$input );
			$.narayam.setScheme( opt.scheme  );
			for ( var i= 0 ; i < opt.tests.length; i++ ) {
				// Simulate pressing keys for each of the sample characters
				typeChars( opt.$input, opt.tests[i].input );
				equals( opt.$input.val(), opt.tests[i].output, opt.tests[i].description );
				opt.$input.val( '' );
			}
			$.narayam.disable();
			start();
		} );
	} );
};

narayamTest( {
	description: 'Malayalam Transliteration test',
	tests: [
		{ input: 'a', output: 'അ', description: 'Malayalam a' },
		{ input: 'ra', output: 'ര', description: 'Malayalam ra' },
		{ input: 'p', output: 'പ്', description: 'Malayalam p' },
		{ input: 'kh', output: 'ഖ്', description: 'Malayalam kh' },
		{ input: 'nch', output: 'ഞ്ച്', description: 'Malayalam nch' },
		{ input: 'au', output: 'ഔ', description: 'Malayalam au' },
		{ input: 'maU', output: 'മൌ', description: 'Malayalam aU' },
		{ input: 'kshau', output: 'ക്ഷൗ', description: 'Malayalam kshau' },
		{ input: 'ram', output: 'രം', description: 'Malayalam ram' },
		{ input: 'rama', output: 'രമ', description: 'Malayalam rama' },
		{ input: 'baH', output: 'ബഃ', description: 'baH' },
		{ input: 'bah', output: 'ബഹ്', description: 'bah' },
		{ input: 'ai', output: 'ഐ', description: 'ai' },
		{ input: 'lai', output: 'ലൈ', description: 'lai' },
		{ input: 'nta', output: 'ന്റ', description: 'Malayalam nta' }
	],
	scheme: 'ml',
	$input: $( '<input>' ).attr( { id: 'ml', type: 'text' } )
} );

narayamTest( {
	description: 'Oriya Inscript test',
	tests: [{ input: 'ka', output: 'କୋ' }],
	scheme: 'or-inscript',
	$input: $( '<input>' ).attr( { id: 'or', type: 'text' } )
} );

narayamTest( {
	description: 'Malayalam Inscript test',
	tests: [{ input: 'ka', output: 'കോ' }],
	scheme: 'ml-inscript',
	$input: $( '<input>' ).attr( { id: 'ml-inscript', type: 'text' } )
} );

narayamTest( {
	description: 'Tamil Inscript test',
	tests: [
		{ input: 'ka', output: 'கோ', description: 'Tamil Inscript கோ' }
	],
	scheme: 'ta-inscript',
	$input: $( '<input>' ).attr( { id: 'ta-inscript', type: 'text' } )
} );

narayamTest ( {
	description: 'Amharic Transliteration test',
	tests: [
		{ input: 'ka', output: 'ካ', description: 'Amharic ka->ካ' }
	],
	scheme: 'am',
	$input: $( '<input>' ).attr( { id: 'am', type: 'text' } )
} );

narayamTest ( {
	description: 'Marathi Transliteration test',
	tests: [
		{ input: 'dny', output: 'ज्ञ्', description: 'dny for ज्ञ् in Marathi transliteration' }
	],
	scheme: 'mr',
	$input: $( '<input>' ).attr( { id: "mr", type: 'text' } )
} );

teardown( );

}() );
