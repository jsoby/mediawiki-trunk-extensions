<?php
require_once( 'AbstractFilter.php' );

/**
 * Dump filter for creation of a Google Coop 'Subscribed Links' file
 *
 * Usage:
 *
 * HOSTNAME=kamelopedia.mormo.org php dumpBackup.php \
 *    --plugin=GoogleCoopFilter:Extension/ActiveAbstract/GoogleCoopFilter.php \
 *    --current --output=file:coop3.xml --filter=namespace:NS_MAIN \
 *    --filter=noredirect --filter=googlecoop
 *
 * Copyright (C) 2005 Brion Vibber <brion@pobox.com>
 * Copyright (C) 2006 Jens Frank < JeLuF (at) mormo org >
 * http://www.mediawiki.org/
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along
 * with this program; if not, write to the Free Software Foundation, Inc.,
 * 51 Franklin Street, Fifth Floor, Boston, MA 02110-1301, USA.
 * http://www.gnu.org/copyleft/gpl.html
 *
 * @file
 * @author Brion Vibber <brion@pobox.com>
 * @author Jens Frank < JeLuF (at) mormo org >
 * @ingroup Maintenance
 *
 */

class GoogleCoopFilter extends AbstractFilter {
	/**
 	* Register the filter function with the dump manager
 	* @param BackupDumper $dumper
 	* @static
 	*/
	function register( &$dumper ) {
		$dumper->registerFilter( 'googlecoop', 'GoogleCoopFilter' );
		parent::register( $dumper );
	}

	/**
	 * @param $sink ExportProgressFilter
	 */
	function __construct( &$sink ) {
		$this->sink =& $sink;
	}

	function writeOpenStream( $string ) {
		$this->sink->writeOpenStream( "<Results>\n  <AuthorInfo description=\"MediaWiki autogenerated Google Coop output\" />\n" );
	}

	function writeCloseStream( $string ) {
		$this->sink->writeCloseStream( "</Results>\n" );
	}

	function writeOpenPage( $page, $string ) {
		global $wgSitename;
		static $n = 0;
		$n++;
		$this->title = Title::makeTitle( $page->page_namespace, $page->page_title );

		$xml = "  <ResultSpec id=\"mw${n}\">\n";
		$xml .= '    ' . Xml::element( 'Query', null, $this->title->getPrefixedText() ) . "\n";
		$xml .= "    <Response>\n";
		$xml .= '      ' . Xml::element( 'Output', array( 'name' => 'title' ),
				$wgSitename . ':' . $this->title->getPrefixedText() ) . "\n";
		$xml .= '      ' . Xml::element( 'Output', array( 'name' => 'more_url' ),
				$this->title->getCanonicalUrl() ) . "\n";

		// add abstract and links when we have revision data...
		$this->revision = null;

		$this->sink->writeOpenPage( $page, $xml );
	}

	function writeClosePage( $string ) {
		$xml = '';
		if ( $this->revision ) {
			$text = $this->_removeBrackets( $this->_abstract( $this->revision ) );
			if ( $text == '' ) {
				$text = '-';
			}
			$lines = $this->_threeLines( $text );
			for ( $i = 1; $i < 4; $i++ ) {
				if ( $lines[$i] != '' ) {
					$xml .= '      ' . Xml::element( 'Output', array( 'name' => 'text' . $i ), $lines[$i] ) . "\n";
				}
			}
		}
		$xml .= "    </Response>\n  </ResultSpec>\n";
		$this->sink->writeClosePage( $xml );
		$this->title = null;
		$this->revision = null;
	}

	function _removeBrackets( $string ) {
		return preg_replace( '#[\[\]]#', '', $string );
	}

	/**
	 * Returns an array of three strings, each string of the array has no more than
	 * 79 characters. The three strings are the first three 'lines' of the text
	 * given in $str.
	 *
	 * Lines are split at the last blank before position 79.
	 * If there's no blank before position, the entire string is returned as first
	 * element of the result array.
	 *
	 * This code needs a cleanup, it became rather ugly after adding exception
	 * handling :-(
	 *
	 * @param $str
	 * @return array|string
	 */
	function _threeLines( $str ) {
		$s = array();

		$slen = strlen( $str );

		if ( $slen < 79 ) {
			return array( 1 => $str, 2 => '', 3 => '' );
		}

		$a = strrchr( substr( $str, 0, 79 ), ' ' );
		$s1len = 79 - strlen( $a );
		if ( $s1len == 79 ) {
			return array( 1 => $str, 2 => '', 3 => '' );
		}
		$s[1] = substr( $str, 0, $s1len );


		if ( $slen < $s1len + 79 ) {
			return array( 1 => $s[1], 2 => substr( $str, $s1len + 1 ), 3 => '' );
		}

		$b = strrchr( substr( $str, $s1len + 1, 79 ), ' ' );
		$s2len = 79 - strlen( $b );
		$s[2] = substr( $str, $s1len + 1, $s2len );

		if ( $slen < $s1len + $s2len + 79 ) {
			return array( 1 => $s[1],  2 => $s[2],  3 => substr( $str, $s1len + $s2len + 1 ) );
		}

		$c = strrchr( substr( $str, $s1len + $s2len + 2, 76 ), ' ' );
		$s3len = 76 - strlen ( $c );
		$s[3] = substr( $str, $s1len + $s2len + 2, $s3len );
		if ( strlen( $str ) > $s1len + $s2len + $s3len + 2 ) {
			$s[3] .= '...';
		}

		return $s;
	}
}
