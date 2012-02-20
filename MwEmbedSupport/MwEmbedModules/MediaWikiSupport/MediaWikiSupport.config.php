<?php 
/**
 * Do not edit this file instead use LocalSettings.php and 
 * $wgMwEmbedModuleConfig[ {configuration name} ] = value; format
 */
return array(		
	// A default apiProvider ( if no api provider is specified, where to run api queries ) 
	// Can be any of the defined providers ie: "local", "commons" or any defined provider
	"MediaWiki.DefaultProvider" => "local",

	"MediaWiki.ApiProviders" => array(
		"commons" => array(
			'url' => '//commons.wikimedia.org/w/api.php'
		)
	),
	
	"MediaWiki.ApiPostActions" => array( 'login', 'purge', 'rollback', 'delete', 'undelete',
		'protect', 'block', 'unblock', 'move', 'edit', 'upload', 'emailuser',
		'import', 'userrights' ),
		
);