<?php // SemanticTitle.php //

/*
	------------------------------------------------------------------------------------------------
	SemanticTitle, a MediaWiki extension for setting visible page title to value of a semantic
	property.
	Copyright (C) 2012 Van de Bugger.

	This program is free software: you can redistribute it and/or modify it under the terms
	of the GNU Affero General Public License as published by the Free Software Foundation,
	either version 3 of the License, or (at your option) any later version.

	This program is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY;
	without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
	See the GNU Affero General Public License for more details.

	You should have received a copy of the GNU Affero General Public License along with this
	program.  If not, see <https://www.gnu.org/licenses/>.
	------------------------------------------------------------------------------------------------
*/

if ( ! defined( 'MEDIAWIKI' ) ) {
	die( 'Not an entry point.' );
}; // if

global $wgAutoloadClasses;
$wgAutoloadClasses[ 'SemanticTitle' ] = __DIR__ . '/SemanticTitle.class.php';

global $wgHooks;
$wgHooks[ 'BeforePageDisplay' ][] = 'SemanticTitle::onBeforePageDisplay';
$wgHooks[ 'LinkBegin'         ][] = 'SemanticTitle::onLinkBegin';

global $wgExtensionMessagesFiles;
$wgExtensionMessagesFiles[ 'SemanticTitle' ] = __DIR__ . '/SemanticTitle.i18n.php';

global $egSemanticTitle;
if ( ! isset( $egSemanticTitle ) ) {
	$egSemanticTitle = array();
}; // if

global $wgExtensionCredits;
$wgExtensionCredits[ 'semantic' ][] = array(
	'path'    => __FILE__,
	'name'    => 'SemanticTitle',
	'license' => 'AGPL-3.0+',
	'version' => '0.0.1',
	'author'  => array( '[https://www.mediawiki.org/wiki/User:Van_de_Bugger Van de Bugger]' ),
	'url'     => 'https://www.mediawiki.org/wiki/Extension:SemanticTitle',
	'descriptionmsg'  => 'semantic-title-description',
);

// end of file //
