<?php
/**
 * Dynamic Template 'Standart' -> Example
 *
 *  Conditions to use:
 *  Please name the class:			SolrSearchTemplate_NAME
 *  Filename:						SolrSearchTemplate_NAME.php
 *  dont touch the function name:	applyTemplate( $xml )
 * 
 * @ingroup SolrStore
 * @path templates
 * @author Sascha Schueller
 */
class SolrSearchTemplate_Standart {

	var $mTitle = null;
	var $mRedirectTitle = null;
	var $mHighlightSection = null;
	var $mSectionTitle = null;
	var $mDate = null;
	var $mScore = null;
	var $mSize = null;
	var $mHighlightText = null;
	var $mHighlightTitle = null;
	var $mWordCount = null;

	public function applyTemplate( $xml ) { // DONT TOUCH
		$snipmax = 50;
		$textlenght = 250;

		// get Size, Namespace, Wordcound, Date from XML:		
		foreach ( $xml->arr as $doc ) {
			switch ( $doc[ 'name' ] ) {
				case 'text':
					$nsText = $doc->str;
					$this->mSize = '';
					$this->mWordCount = count( $doc->str );
					$textsnip = '';
					$textsnipvar = 0;
					foreach ( $doc->str as $inner ) {
						$textsnipvar++;
						if ( $textsnipvar >= 4 && $textsnipvar <= $snipmax ) {
							$textsnip .= ' ' . $inner;
						}
						$textsnip = substr( $textsnip, 0, $textlenght );
						$this->mSize = $this->mSize + strlen( $inner );
					}
					$this->mSize = ( $this->mSize / 3 );
					$this->mDate = $doc->date;
					break;
			}
		}

		// get Title, Interwiki from XML:		
		foreach ( $xml->str as $docs ) {
			switch ( $docs[ 'name' ] ) {
				case 'pagetitle':
					$this->mTitle = $doc->str;
					break;
				case 'dbkey':
					$title = $doc->str;
					break;
				case 'interwiki':
					$this->mInterwiki = $doc->str;
					break;
			}
		}

		//get namespace from XML:
		foreach ( $xml->int as $doci ) {
			switch ( $doci[ 'name' ] ) {
				case 'namespace':
					$namespace = $doc->str;
					break;
			}
		}

		if ( !isset( $nsText ) ) {
			$nsText = $wgContLang->getNsText( $namespace );
		} else {
			$nsText = urldecode( $nsText );
		}

		// make score / relevance
		$this->mScore = $xml->float;

		// make Title
		$title = urldecode( $title );
		$this->mTitle = Title::makeTitle( $namespace, $title );

		// make Highlight - Title
		if ( $xml->highlight->title != '' ) {
			$this->mHighlightTitle = $xml->highlight->title;
		} else {
			$this->mHighlightTitle = '';
		}

		// make Highlight - Text
		if ( $xml->highlight->Inhalt != '' ) {
			$this->mHighlightText = str_replace( '<em>', '<b>', $xml->highlight->Inhalt );
			$this->mHighlightText = str_replace( '</em>', '</b>', $this->mHighlightText );
			$this->mHighlightText .= '...';
		} else {
			$this->mHighlightText = "NO HIGHLIGHTING TEXT FROM SOLR !";

			// if nothing define itself !
			// 4 example with 
			// $this->mHighlightText = $textsnip;
		}

		return $this;
	}

}

?>
