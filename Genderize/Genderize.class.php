<?php // Genderize.class.php //

/*
	------------------------------------------------------------------------------------------------
	Genderize, a MediaWiki extension for use gender-specific user page titles and links.
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


class Genderize {


	static public function onLinkBegin( $skin, $target, &$text, &$customAttribs, &$query, &$options, &$ret ) {
		if ( $target->getNamespace() == NS_USER ) {
			if ( ! isset( $text ) || Title::newFromText( $text )->getPrefixedText() == $target->getPrefixedText() ) {
				$text = $target->getPrefixedText();
			}; // if
		}; // if
		return true;
	} // function onLinkBegin


	public static function onSkinTemplateNavigation( $skin, &$actions ) {

		global $egGenderize;

		$title = $skin->getTitle();
		if ( isset( $actions[ 'namespaces' ] ) ) {
			if ( isset( $actions[ 'namespaces' ][ 'user' ] ) ) {
				$user = User::newFromName( $title->getText() );
				$gender = $user->getOption( 'gender' );
				$actions[ 'namespaces' ][ 'user' ][ 'text' ] = $egGenderize[ $gender ];
			}; // if
		}; // if
		
		return true;
		
	} // function onSkinTemplateNavigation


} // class Genderize


// end of file //
