<?php

require_once('AbstractFilter.php');

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

	function GoogleCoopFilter( &$sink ) {
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
		$xml .= '    ' . wfElement( 'Query', null, $page->page_title ) . "\n";
		$xml .= "    <Response>\n";
		$xml .= '      ' . wfElement( 'Output', array( 'name' => 'title' ),
				$wgSitename . ':' . $this->title->getPrefixedText() ) . "\n";
		$xml .= '      ' . wfElement( 'Output', array( 'name' => 'more_url' ),
				$this->title->getFullUrl() ) . "\n";
				
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
			for( $i=1; $i<4; $i++ ) {
				if ( $lines[$i] != '' ) {
					$xml .= '      ' . wfElement( 'Output', array( 'name' => 'text'.$i ), $lines[$i] ) . "\n";
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
?>
