<?php
/**
 * Article Assessment Pilot extension
 * 
 * @file
 * @ingroup Extensions
 * 
 * @author Trevor Parscal <trevor@wikimedia.org>
 * @license GPL v2 or later
 * @version 0.1.0
 */

/* Configuration */

// If the number of page revisions (since users last rating) is greater than this then consider the
// last rating "stale"
$wgArticleAssessmentStaleCount = 5;

// Array of the "ratings" id's to store. Allows it to be a bit more dynamic
$wgArticleAssessmentRatings = array( 1, 2, 3, 4 );

// Which categories the pages must belong to have the rating widget added (with _ in text)
// Extension is "disabled" if this field is an empty array (as per default configuration)
$wgArticleAssessmentCategories = array();

// Would ordinarily call this articleassessment but survey names are 16 chars max
$wgPrefSwitchSurveys['articlerating'] = array(
	'updatable' => false,
	'submit-msg' => 'articleassessment-survey-submit',
	'questions' => array(
		'whyrated' => array(
			'question' => 'articleassessment-survey-question-whyrated',
			'type' => 'checks',
			'answers' => array(
				'contribute-rating' => 'articleassessment-survey-answer-whyrated-contribute-rating',
				'development' => 'articleassessment-survey-answer-whyrated-development',
				'contribute-wiki' => 'articleassessment-survey-answer-whyrated-contribute-wiki',
				'sharing-opinion' => 'articleassessment-survey-answer-whyrated-sharing-opinion',
				'didntrate' => 'articleassessment-survey-answer-whyrated-didntrate',
			),
			'other' => 'articleassessment-survey-answer-whyrated-other',
		),
		'useful' => array(
			'question' => 'articleassessment-survey-question-useful',
			'type' => 'boolean',
			'iffalse' => 'articleassessment-survey-question-useful-iffalse',
		),
		'expert' => array(
			'question' => 'articleassessment-survey-question-expert',
			'type' => 'boolean',
			'iftrue' => 'articleassessment-survey-question-expert-iftrue',
		),
		'comments' => array(
			'question' => 'articleassessment-survey-question-comments',
			'type' => 'text',
		),
	),
);
$wgValidSurveys[] = 'articlerating';

/* Setup */

$wgExtensionCredits['other'][] = array(
	'path' => __FILE__,
	'name' => 'Article Assessment Pilot',
	'author' => array(
		'Sam Reed',
		'Roan Kattouw',
		'Trevor Parscal',
		'Brandon Harris',
		'Adam Miller',
		'Nimish Gautam',
	),
	'version' => '0.2.0',
	'descriptionmsg' => 'articleassessment-desc',
	'url' => 'http://www.mediawiki.org/wiki/Extension:ArticleAssessmentPilot'
);
$dir = dirname( __FILE__ ) . '/';
// Autoloading
$wgAutoloadClasses['ApiQueryArticleAssessment'] = $dir . 'api/ApiQueryArticleAssessment.php';
$wgAutoloadClasses['ApiArticleAssessment'] = $dir . 'api/ApiArticleAssessment.php';
$wgAutoloadClasses['ArticleAssessmentPilotHooks'] = $dir . 'ArticleAssessmentPilot.hooks.php';
$wgExtensionMessagesFiles['ArticleAssessmentPilot'] = $dir . 'ArticleAssessmentPilot.i18n.php';
// Hooks
$wgHooks['LoadExtensionSchemaUpdates'][] = 'ArticleAssessmentPilotHooks::loadExtensionSchemaUpdates';
$wgHooks['ParserTestTables'][] = 'ArticleAssessmentPilotHooks::parserTestTables';
$wgHooks['BeforePageDisplay'][] = 'ArticleAssessmentPilotHooks::beforePageDisplay';
$wgHooks['ResourceLoaderRegisterModules'][] = 'ArticleAssessmentPilotHooks::resourceLoaderRegisterModules';
// API Registration
$wgAPIListModules['articleassessment'] = 'ApiQueryArticleAssessment';
$wgAPIModules['articleassessment'] = 'ApiArticleAssessment';

/* XXX: Survey setup */

require_once( $dir . '../SimpleSurvey/SimpleSurvey.php' );
