<?php // SemanticTitle.class.php //

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

class SemanticTitle {


	// Returns semantic title text for the specified title.
	static function getText( Title $title ) {

		global $egSemanticTitle;

		// TODO: Cache for semantic titles?

		$ns = $title->getNamespace();
		if ( array_key_exists( $ns, $egSemanticTitle ) ) {
			$label = $egSemanticTitle[ $ns ];
			$store = smwfGetStore();
			if ( class_exists( 'SMWDataItem' ) ) {
				$subj = SMWDIWikiPage::newFromTitle( $title );
			} else {
				$subj = $title;
			}; # if
			$data = $store->getSemanticData( $subj );
			$property = SMWDIProperty::newFromUserLabel( $label );
			$values = $data->getPropertyValues( $property );
			if ( count( $values ) > 0 ) {
				$value = $values[ 0 ];
				if ( $value->getDIType() == SMWDataItem::TYPE_STRING ) {
					$name = $value->getString();
					if ( $name != '' ) {
						return $name;
					}; // if
				}; // if
			}; // if
		}; // if

		return false;

	} // function getText


	// Handle links.
	static public function onLinkBegin( $skin, $target, &$text, &$customAttribs, &$query, &$options, &$ret ) {
		if ( ! isset( $text ) || $text == $target->getPrefixedText() ) {
			$semantic = self::getText( $target );
			if ( $semantic !== false ) {
				$text = $semantic;
			}; // if
		}; // if
		return true;
	} // function onLinkBegin


	// Handle page title.
	static function onBeforePageDisplay( &$out, &$sk ) {

		if ( ! $out->isArticle() ) {
			return true;
		}; // if
		$title = $out->getTitle();
		if ( ! $title instanceof Title ) {
			return true;
		}; // if

		$semantic = self::getText( $title );
		if ( $semantic === false ) {
			return true;
		}; // if

		$out->setPageTitle( $semantic );
		$out->setSubtitle(
			$title->getPrefixedText() .
			( $out->getSubtitle() == '' ? '' : ' ' . $out->getSubtitle() )
		);

		return true;

	} // function onBeforePageDisplay


} // class SemanticTitle

// end of file //
