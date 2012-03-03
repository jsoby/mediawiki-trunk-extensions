<?php // Gender.php //

/*
	------------------------------------------------------------------------------------------------
	Gender, a MediaWiki extension for use gender-specific user page titles and links.
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
$wgAutoloadClasses[ 'Genderize' ] = __DIR__ . '/Genderize.class.php';

global $wgHooks;
$wgHooks[ 'LinkBegin'              ][] = 'Genderize::onLinkBegin';
$wgHooks[ 'SkinTemplateNavigation' ][] = 'Genderize::onSkinTemplateNavigation';

global $wgExtensionMessagesFiles;
$wgExtensionMessagesFiles[ 'Genderize' ] = __DIR__ . '/Genderize.i18n.php';

global $egGenderize;
foreach ( array( 'male', 'female', 'unknown' ) as $gender ) {
	if ( ! isset( $egGenderize[ $gender ] )  ) {
		$egGenderize[ $gender ] = 'User';
	}; // if
}; // foreach

global $wgExtraGenderNamespaces;
$wgExtraGenderNamespaces[ NS_USER ] = $egGenderize;

global $wgExtensionCredits;
$wgExtensionCredits[ 'other' ][] = array(
	'path'    => __FILE__,
	'name'    => 'Genderize',
	'license' => 'AGPL-3.0+',
	'version' => '0.0.1',
	'author'  => array( '[https://www.mediawiki.org/wiki/User:Van_de_Bugger Van de Bugger]' ),
	'url'     => 'https://www.mediawiki.org/wiki/Extension:Genderize',
	'descriptionmsg'  => 'genderize-description',
);

// end of file //
