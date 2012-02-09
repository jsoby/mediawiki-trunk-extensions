/**
 * Transliteration regular expression rules table for the Bhojpuri language
 * Based on CDAC's "Enhanced InScript Keyboard Layout 5.2" for Hindi
 * @author Santhosh Thottingal, Amir E. Aharoni
 * @date 2012-02-09
 * License: GPLv3
 */

// copy the rules from hi.
bho_scheme = $.narayam.getScheme( 'hi' );
bho_scheme.namemsg = 'narayam-bho';
jQuery.narayam.addScheme( 'bho', bho_scheme );

