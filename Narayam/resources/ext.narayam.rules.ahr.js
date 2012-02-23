/**
 * Transliteration based keyboard for Ahirani, based on Marathi
 * @author Amir E. Aharoni ([[User:Amire80]])
 * @date 2012-02-23
 * License: GPLv3
 */

// copy the rules from Marathi transliteration.
ahr_scheme = $.narayam.getScheme( 'mr' );
ahr_scheme.namemsg = 'narayam-ahr';
jQuery.narayam.addScheme( 'ahr', ahr_scheme );
