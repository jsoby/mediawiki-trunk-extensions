/**
 * QUnit tests for Narayam
 *
 * @file
 * @author Amir E. Aharoni
 * @author Santhosh Thottingal
 * @copyright Copyright © 2012 Amir E. Aharoni, Santhosh Thottingal
 * @license http://www.gnu.org/copyleft/gpl.html GNU General Public License 2.0 or later
 */
( function () {

module( "ext.narayam", QUnit.newMwEnvironment() );

function setup() {
	$.narayam.setup();
	$.narayam.enable();
}

function teardown() {
	// We need to disable narayam, otherwise many typing simulation based
	// tests, like jquery.byteLimitTest, will fail.
	$.narayam.disable();
}

test( "-- Initial check", function() {
	expect( 2 );

	// Clean up before testing initialization
	teardown();
	// Delete state cookie
	$.cookie( 'narayam-enabled', null );

	setup();
	ok( $.narayam, "$.narayam is defined" );
	equals( $.narayam.enabled(), mw.config.get( 'wgNarayamEnabledByDefault' ), 'Initial state of Narayam matches the configuration' );

	// Init empty cookie of recent schemes
	$.cookie( 'narayam-scheme', '', { path: '/', expires: 30 } );
} );

test( "-- Initialization functions", function() {
	expect( 10 );
	setup();

	var stateCookieName = "narayam-enabled";

	// Now it's supposed to be enabled, so toggle() is supposed to disable.
	$.narayam.toggle();
	equals( $.narayam.enabled(), false, "toggle() disables Narayam when it is enabled." );
	equals( $.cookie( stateCookieName ), "0", "The state cookie was set to 0." );
	ok(  $( "li#pt-narayam" ).hasClass( "narayam-inactive" ), "After disabling the Narayam menu header has the narayam-inactive class." );
	ok( !$( "li#pt-narayam" ).hasClass( "narayam-active" ),   "After disabling the Narayam menu header doesn't have the narayam-active class ." );
	ok( !$( "#narayam-toggle" ).attr( "checked" ), "After disabling the Narayam checkbox is not checked." );

	// Now it's supposed to be disabled, so toggle() is supposed to enable.
	$.narayam.toggle();
	equals( $.narayam.enabled(), true, "toggle() enables Narayam when it is disabled." );
	equals( $.cookie( stateCookieName ), "1", "The state cookie was set to 1." );
	ok( !$( "li#pt-narayam" ).hasClass( "narayam-inactive" ), "After enabling the Narayam menu header doesn't have the narayam-inactive class." );
	ok(  $( "li#pt-narayam" ).hasClass( "narayam-active" ),   "After enabling the Narayam menu header has the narayam-active class ." );
	ok(  $( "#narayam-toggle" ).attr( "checked" ), "After enabling the Narayam checkbox is checked." );
	teardown();
} );

test( "-- Simple character functions", function() {
	expect( 7 );
	setup();
	equals( $.narayam.lastNChars( "foobarbaz", 5, 2 ), "ba", "lastNChars works with short buffer." );
	equals( $.narayam.lastNChars( "foobarbaz", 2, 5 ), "fo", "lastNChars works with long buffer." );

	equals( $.narayam.firstDivergence( "abc", "abc" ), -1 );
	equals( $.narayam.firstDivergence( "a", "b" ), 0 );
	equals( $.narayam.firstDivergence( "a", "bb" ), 0 );
	equals( $.narayam.firstDivergence( "abc", "abd" ), 2 );
	equals( $.narayam.firstDivergence( "abcd", "abd" ), 2 );
	teardown();
} );

test( '-- Build the menu', function() {
	expect( 5 );
	setup();
	assertTrue( $.narayam.buildMenu( ), 'Build the menu' );
	equals( $( 'li#pt-narayam' ).length, 1, 'There should be one and only one menu at any time' );
	ok(  $.narayam.buildMenu( ), 'Build the menu again' );
	equals( $( 'li#pt-narayam' ).length, 1, 'There should be one and only one menu at any time' );
	equals( $( 'li.narayam-help-link' ).length, 1, 'Help link exists' );
	teardown();
} );

test( '-- German transliteration and keybuffers', function() {
	expect( 3 );
	setup();

	// Testing keybuffer ("compose key")
	$.narayam.setScheme( 'de' );
	equals( $.narayam.transliterate( '~o', '~', false ), 'ö', 'German ~o -> ö' );
	equals( $.narayam.transliterate( '~O', '~', false ), 'Ö', 'German ~O -> Ö' );
	equals( $.narayam.transliterate( '~s', '~', false ), 'ß', 'German ~s -> ß' );

	teardown();
} );

test( '-- Hebrew transliteration, extended keyboard', function() {
	expect( 2 );
	setup();

	// Testing extended and non-extended
	$.narayam.setScheme( 'he-standard-2011-extonly' );
	equals( $.narayam.transliterate( '=', '', false ), '=', 'Hebrew non-extended = does not change' );
	equals( $.narayam.transliterate( '=', '', true ), '–', 'Hebrew extended = becomes en dash' );

	teardown();
} );

test( '-- Malayalam transliteration, cookie, zwnj, longer keybuffers', function() {
	expect( 8 );
	setup();

	$.narayam.setScheme( 'kn' );
	var recentSchemes = $.cookie( 'narayam-scheme' ),
		currentSchemeRegex = new RegExp( '^kn' );
	ok ( currentSchemeRegex.test( recentSchemes ), 'New scheme added to the cookie' );

	$.narayam.setScheme( 'ml' );

	equals( $.narayam.transliterate( 'a',  '', false ), 'അ', 'Malayalam a -> അ' );

	// N.B.: There's a zwnj in the input, and no zwnj in the expected result
	equals( $.narayam.transliterate( 'നീല‌a',  '', false ), 'നീലഅ', 'Malayalam zwnj+a -> അ' );
	equals( $.narayam.transliterate( 'ൻൿh',  'nc', false ), 'ഞ്ച്', 'Malayalam nch -> ഞ്ച്' );

	equals( $.narayam.transliterate( 'p', '', false ), 'പ്', 'Malayalam p -> പ്' );
	equals( $.narayam.transliterate( 'പ്a', '', false ), 'പ', 'Malayalam pa -> പ' );
	equals( $.narayam.transliterate( 'ക്h', '', false ), 'ഖ്', 'Malayalam kh -> ഖ്' );
	equals( $.narayam.transliterate( 'ഖ്a', '', false ), 'ഖ', 'Malayalam kha -> ഖ്' );

	teardown();
} );

}());
