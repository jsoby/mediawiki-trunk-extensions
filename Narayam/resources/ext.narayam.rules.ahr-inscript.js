/**
 * InScript regular expression rules table for Ahirani language
 * Based on CDAC's "Enhanced InScript Keyboard Layout 5.2" for Marathi
 * @author Amir E. Aharoni
 * @date 2012-02-23
 * License: GPLv3
 */

// copy the rules from Marathi InScript.
ahr_inscript_scheme = $.narayam.getScheme( 'mr-inscript' );
ahr_inscript_scheme.namemsg = 'narayam-ahr-inscript';
jQuery.narayam.addScheme( 'ahr-inscript', ahr_inscript_scheme );
