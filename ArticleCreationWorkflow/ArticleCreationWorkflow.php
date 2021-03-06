<?php
/* 	MediaWiki ArticleCreation Extension
	Authors: Rob Moen, Benny Situ, Brandon Harris 
*/

$wgExtensionCredits['other'][] = array(
	'author' => array( 'Rob Moen', 'Benny Situ', 'Andrew Garrett', 'Ian Baker' ),
	'descriptionmsg' => 'article-creation-desc',
	'name' => 'ArticleCreationWorkflow',
	'url' => 'http://www.mediawiki.org/wiki/Article_Creation_Landing_System',
	'version' => '0.1',
	'path' => __FILE__,
);

$articleCreationDir = dirname( __FILE__ ) . '/';

/* Object model */
$wgAutoloadClasses['ArticleCreationTemplates'] = $articleCreationDir . 'includes/ArticleCreationTemplates.php';
$wgAutoloadClasses['ArticleCreationUtil'] = $articleCreationDir . 'includes/ArticleCreationUtil.php';
$wgAutoloadClasses['PHPBucket'] = $articleCreationDir . 'includes/PHPBucket.php';

/* Special Pages */
$wgAutoloadClasses['SpecialArticleCreationLanding'] = $articleCreationDir . 'SpecialArticleCreationLanding.php';
$wgSpecialPages['ArticleCreationLanding'] = 'SpecialArticleCreationLanding';

/* Hooks */
$wgAutoloadClasses['ArticleCreationHooks'] = $articleCreationDir . 'ArticleCreationWorkflow.hooks.php';
$wgHooks['BeforeDisplayNoArticleText'][] = 'ArticleCreationHooks::BeforeDisplayNoArticleText';
$wgHooks['BeforeWelcomeCreation'][] = 'ArticleCreationHooks::BeforeWelcomeCreation';
$wgHooks['AlternateEdit'][] = 'ArticleCreationHooks::AlternateEdit';
$wgHooks['SpecialSearchCreateLink'][] = 'ArticleCreationHooks::SpecialSearchCreateLink';
$wgHooks['EditPage::showEditForm:fields'][] = 'ArticleCreationHooks::pushTrackingFieldsToEdit';
$wgHooks['ArticleSaveComplete'][] = 'ArticleCreationHooks::trackEditSuccess';
$wgHooks['EditPage::attemptSave'][] = 'ArticleCreationHooks::trackEditAttempt';

/* Internationalization */
$wgExtensionMessagesFiles['ArticleCreation'] = $articleCreationDir . 'ArticleCreationWorkflow.i18n.php';

/* Resources */
$acResourceTemplate = array(
	'localBasePath' => $articleCreationDir . 'modules',
	'remoteExtPath' => 'ArticleCreationWorkflow/modules'
);

$wgResourceModules['ext.articleCreation.init'] = $acResourceTemplate + array(
	'scripts' => 'ext.articleCreation.init/ext.articleCreation.init.js',
);

$wgResourceModules['ext.articleCreation.searchResult'] = $acResourceTemplate + array(
	'scripts' => 'ext.articleCreation.searchResult/ext.articleCreation.searchResult.js',
);

$wgResourceModules['ext.articleCreation.core'] = $acResourceTemplate + array (
	'styles' 	=> 'ext.articleCreation.core/ext.articleCreation.core.css',
	'scripts'	=> 'ext.articleCreation.core/ext.articleCreation.core.js',
	'dependencies' => array(
		'mediawiki.util',
		'jquery.localize',
		'jquery.ui.button',
		'user.tokens',
	),
);

$wgResourceModules['ext.articleCreation.user'] = $acResourceTemplate + array (
	'styles' 	=> 'ext.articleCreation.user/ext.articleCreation.user.css',
	'scripts'	=> 'ext.articleCreation.user/ext.articleCreation.user.js',
	'messages'  => array(
		'ac-hover-tooltip-title',
		'ac-hover-tooltip-body-create',
		'ac-hover-tooltip-body-request',
		'ac-hover-tooltip-body-draft',
		'ac-hover-tooltip-body-signup',
		'ac-hover-tooltip-body-login',
		'ac-hover-tooltip-body-exit',
		'ac-create-warning-create',
		'ac-create-warning-wizard',
		'ac-create-button',
		'ac-create-dismiss',
		'ac-click-tip-title-create',
		'ac-create-help',
	),
	'dependencies' => array(
		'jquery.clickTracking',
		'ext.articleCreation.core',
		'jquery.localize',
		'jquery.ui.button',
	),
);

/**
 * Configuration for the buttons to appear on the ArticleCreationLanding page.
 * @see ArticleCreationTemplates::formatButtons
 **/
$wgArticleCreationButtons = array(
	'anonymous' => array(
		'login' => array(
			'title' => 'ac-action-login',
			'text' => 'ac-action-login-subtitle',
			'tooltip' => array(
				'title' => 'ac-hover-tooltip-title',
				'text' => 'ac-hover-tooltip-body-login',
			),
		),
		'signup' => array(
			'title' => 'ac-action-signup',
			'text' => 'ac-action-signup-subtitle',
			'tooltip' => array(
				'title' => 'ac-hover-tooltip-title',
				'text' => 'ac-hover-tooltip-body-signup',
			),
		),
		'request' => array(
			'title' => 'ac-action-request',
			'text' => 'ac-action-request-subtitle-anon',
			'tooltip' => array(
				'title' => 'ac-hover-tooltip-title',
				'text' => 'ac-hover-tooltip-body-request',
			),
		),
		'exit' => array(
			'title' => 'ac-action-exit',
			'text' => 'ac-action-exit-subtitle-anon',
			'tooltip' => array(
				'title' => 'ac-hover-tooltip-title',
				'text' => 'ac-hover-tooltip-body-exit',
			),
			'color' => 'red',
			'direction' => 'back',
		),
	),
	'logged-in' => array(
		'request' => array(
			'title' => 'ac-action-request',
			'text' => 'ac-action-request-subtitle',
			'tooltip' => array(
				'title' => 'ac-hover-tooltip-title',
				'text' => 'ac-hover-tooltip-body-request',
			),
		),
		'draft' => array(
			'title' => 'ac-action-draft',
			'text' => 'ac-action-draft-subtitle',
			'tooltip' => array(
				'title' => 'ac-hover-tooltip-title',
				'text' => 'ac-hover-tooltip-body-draft',
			),
		),
		'create' => array(
			'title' => 'ac-action-create',
			'text' => 'ac-action-create-subtitle',
			'tooltip' => array(
				'title' => 'ac-hover-tooltip-title',
				'text' => 'ac-hover-tooltip-body-create',
			),
			'interstitial' => <<<HTML
				<a class="mw-ac-help" href="/wiki/Wikipedia:Starting_an_article"><html:msg key="ac-create-help" /></a>
				<div class="mw-ac-tooltip-title"><html:msg key="ac-click-tip-title-create" /></div>
				<div class="mw-ac-tooltip-body">
					<div class="mw-ac-create-verbiage"><html:msg raw="1" key="ac-create-warning-create" /></div>
					<div class="ac-button-wrap">
						<div class="mw-ac-create-dismiss-skip-control">
							<input 
								type="checkbox" 
								id="mw-ac-dismiss-create"
								class="ac-dismiss-interstitial" />
							<label for="mw-ac-dismiss-create">
								<html:msg key="ac-create-dismiss" />
							</label>
						</div>
						<a class="ac-button ac-action-button" data-ac-action="create"><html:msg key="ac-create-button" /></a>
					</div>
					<div style="clear: both"></div>
				</div>
HTML
		),
		'exit' => array(
			'title' => 'ac-action-exit',
			'text' => 'ac-action-exit-subtitle',
			'tooltip' => array(
				'title' => 'ac-hover-tooltip-title',
				'text' => 'ac-hover-tooltip-body-exit',
			),
			'color' => 'red',
			'direction' => 'back',
		),
	),
);

$wgArticleCreationConfig = array(
	'action-url' => array(
		'draft' => '{{SCRIPT}}?title=User:{{USER}}/{{PAGE}}&action=edit',
		'create' => '{{SCRIPT}}?title={{PAGE}}&action=edit&acwbucket={{BUCKETID}}&acwsource={{SOURCE}}',
		'login' => '{{SCRIPT}}?title=Special:Userlogin&returnto=Special:ArticleCreationLanding/{{PAGE}}',
		'signup' => '{{SCRIPT}}?title=Special:Userlogin/signup&returnto=Special:ArticleCreationLanding/{{PAGE}}&returntoquery=' . urlencode( 'fromsignup=1' ),
		'request' => '{{SCRIPT}}?title=Wikipedia:Article_wizard',
		'exit' => 'javascript:history.go(-1)',
	),
	'buttons' => $wgArticleCreationButtons,
);

$wgArticleCreationBucketConfig = array(
	'buckets' => array(
		'on' => 1,
		'off' => 99,
	),
	'version' => 1,
);

$wgArticleCreationRegistrationCutoff = '20110205121212';
