<?php
/**
 * Internationalisation file for extension EtherpadLite
 *
 * @file
 * @ingroup Extensions
 */

$messages = array();

/** English
 * @author Thomas Gries
 */
$messages['en'] = array(
	'etherpadlite-desc' => 'Adds &lt;eplite&gt; parser tag to embed one or many Etherpad Lite pads (which are hosted on local or external Etherpad Lite server/s) on pages',
	'etherpadlite-invalid-pad-url' => '"$1" is not a valid Etherpad Lite URL or pad name.',
	'etherpadlite-url-is-not-whitelisted' => '"$1" is not in the whitelist of allowed Etherpad Lite servers. {{PLURAL:$3|$2 is the only allowed server|The allowed servers are as follows: $2}}.',
);

$messages['qqq'] = array(
	'etherpadlite-invalid-pad-url' => 'Error if the url did not meet validation (for example, if it didn\'t start with an allowed protocol). $1 is the invalid url',
	'etherpadlite-url-is-not-whitelisted' => 'Error if url isn\'t in list of allowed urls. $1 is name of url specified by user, $2 is a comma separated list of allowed urls, $3 is the number of urls in the allowed list',
);
