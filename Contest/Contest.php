<?php

/**
 * Initialization file for the Contest extension.
 *
 * Documentation:	 		http://www.mediawiki.org/wiki/Extension:Contest
 * Support					http://www.mediawiki.org/wiki/Extension_talk:Contest
 * Source code:			    http://svn.wikimedia.org/viewvc/mediawiki/trunk/extensions/Contest
 *
 * @file Contest.php
 * @ingroup Contest
 *
 * @licence GNU GPL v3+
 * @author Jeroen De Dauw < jeroendedauw@gmail.com >
 */

/**
 * This documenation group collects source code files belonging to Contest.
 *
 * @defgroup Contest Contest
 */

if ( !defined( 'MEDIAWIKI' ) ) {
	die( 'Not an entry point.' );
}

if ( version_compare( $wgVersion, '1.17', '<' ) ) {
	die( '<b>Error:</b> Contest requires MediaWiki 1.17 or above.' );
}

define( 'Contest_VERSION', '0.1 alpha' );

$wgExtensionCredits['other'][] = array(
	'path' => __FILE__,
	'name' => 'Contest',
	'version' => Contest_VERSION,
	'author' => array(
		'[http://www.mediawiki.org/wiki/User:Jeroen_De_Dauw Jeroen De Dauw]',
	),
	'url' => 'http://www.mediawiki.org/wiki/Extension:Contest',
	'descriptionmsg' => 'contest-desc'
);

// i18n
$wgExtensionMessagesFiles['Contest'] 			= dirname( __FILE__ ) . '/Contest.i18n.php';
$wgExtensionMessagesFiles['ContestAlias']		= dirname( __FILE__ ) . '/Contest.alias.php';

// Autoloading
$wgAutoloadClasses['ContestHooks'] 				= dirname( __FILE__ ) . '/Contest.hooks.php';
$wgAutoloadClasses['ContestSettings'] 			= dirname( __FILE__ ) . '/Contest.settings.php';

$wgAutoloadClasses['ApiDeleteContest'] 			= dirname( __FILE__ ) . '/api/ApiDeleteContest.php';

$wgAutoloadClasses['Contest'] 					= dirname( __FILE__ ) . '/includes/Contest.class.php';
$wgAutoloadClasses['ContestDBObject'] 			= dirname( __FILE__ ) . '/includes/ContestDBObject.php';

$wgAutoloadClasses['SpecialContest'] 			= dirname( __FILE__ ) . '/specials/SpecialContest.php';
$wgAutoloadClasses['SpecialContests'] 			= dirname( __FILE__ ) . '/specials/SpecialContests.php';
$wgAutoloadClasses['SpecialContestSignup'] 		= dirname( __FILE__ ) . '/specials/SpecialContestSignup.php';
$wgAutoloadClasses['SpecialContestSubmission'] 	= dirname( __FILE__ ) . '/specials/SpecialContestSubmission.php';

// Special pages
$wgSpecialPages['Contest'] 						= 'SpecialContest';
$wgSpecialPages['Contests'] 					= 'SpecialContests';
$wgSpecialPages['ContestSignup'] 				= 'SpecialContestSignup';
$wgSpecialPages['ContestSubmission'] 			= 'SpecialContestSubmission';

$wgSpecialPageGroups['Contest'] 				= 'other';
$wgSpecialPageGroups['Contests'] 				= 'other';
$wgSpecialPageGroups['ContestSignup'] 			= 'other';
$wgSpecialPageGroups['ContestSubmission'] 		= 'other';

// API
$wgAPIModules['deletecontest'] 					= 'ApiDeleteContest';

// Hooks
$wgHooks['LoadExtensionSchemaUpdates'][] 		= 'SurveyHooks::onSchemaUpdate';
$wgHooks['UnitTestsList'][] 					= 'SurveyHooks::registerUnitTests';

// Resource loader modules
$moduleTemplate = array(
	'localBasePath' => dirname( __FILE__ ) . '/resources',
	'remoteExtPath' => 'Contest/resources'
);

$wgResourceModules[''] = $moduleTemplate + array(
	'scripts' => array(
		''
	),
);

unset( $moduleTemplate );

$egContestSettings = array();
