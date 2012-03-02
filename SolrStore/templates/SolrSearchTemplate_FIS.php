<?php
/**
 * Dynamic Template 'FIS' -> Example
 *
 * Example Template 
 *  with : makeHighlightText and makeHighlightTitle functions
 *  
 * to use this template add this peace of code to LocalSettings.php
 *	
 *  # define Template
 *	$wgSolrTemplate = "_FIS";
 * 
 * 
 * @ingroup SolrStore
 * @path templates
 * @author Sascha Schueller
 */
class SolrSearchTemplate_FIS {

	var $mTitle = null;
	var $mRedirectTitle = null;
	var $mHighlightSection = null;
	var $mSectionTitle = null;
	var $mDate = null;
	var $mScore = null;
	var $mSize = null;
	var $Inhalt_de_t = null;
	var $mHighlightText = null;
	var $mHighlightTitle = null;
	var $mWordCount = null;

	public function applyTemplate( $xml ) {
		global $wgSolrFields;

		$snipmax = 50;
		$textlenght = 1000;
		$textlenghteffective = 315;

		// Bugfix: clear the var!
		unset( $this->Inhalt_de_t );

		// get Size, Wordcound, Date, Inhalt_de_t from XML:		
		foreach ( $xml->arr as $doc ) {
			switch ( $doc[ 'name' ] ) {
				case 'text':
					$nsText = $doc->str;
					$this->mSize = '';
					$this->mWordCount = count( $doc->str );
					$snipmax = 50;
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
					break;

				case 'Zuletzt geändert_dt':
					$this->mDate = $doc->date;
					break;

				case 'Inhalt de_t':
					$this->Inhalt_de_t[ ] = $doc->str;
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
		$this->mHighlightTitle = $title;
		$this->makeHighlightTitle( $wgSolrFields, $title );

		$firstw = false;

		if ( isset( $this->Inhalt_de_t[ 0 ] ) != '' ) {
			$firstw = substr( $this->Inhalt_de_t[ 0 ], 0, strpos( $this->Inhalt_de_t[ 0 ], " " ) ); // test CUT textsnip:
			if ( $firstw != false ) {
				$textsnip = substr( $textsnip, strpos( $textsnip, $firstw ) );
			} else {
				if ( isset( $xml->highlight->Inhalt ) != '' ) {
					$firstw = substr( $xml->highlight->Inhalt, 0, strpos( $xml->highlight->Inhalt, " " ) ); // test CUT textsnip:
					if ( $firstw != false ) {
						$textsnip = substr( $textsnip, strpos( $textsnip, $firstw ) );
					}
				} else {
					
				}
			}

			// make Highlight - Text
			$this->mHighlightText = substr( $textsnip, 0, $textlenghteffective ) . "..."; // MAX LENG [INHALT]
			$this->makeHighlightText( $wgSolrFields, $textsnip ); // TEXTSNIP: Highlight the searching stuff:
		} else {
			$this->mHighlightText = "";
		}

		return $this;
	}

	private function cleanword( $w ) { // Bugfix 4 the highlighting system
		$str = array( "*", ">", "<", "/", '"' );
		$w = str_replace( $str, "", $w );
		return $w;
	}

	private function makeHighlightTitle( $wgSolrFields, $textsnipcut ) {
		for ( $tfields = 0; $tfields <= count( $wgSolrFields ) - 1; $tfields++ ) {
			foreach ( $wgSolrFields[ $tfields ] as $fieldcollection=>$inhalt ) {
				if ( $fieldcollection == 'mLable' ) { // get Solrfields 
					foreach ( $inhalt as $feldname=>$lablename ) {
						$pos = false;
						$pos = strpos( $feldname, "solr" );
						if ( $pos !== false ) {

							if ( isset( $_REQUEST[ $feldname ] ) != '' && isset( $textsnipcut ) != '' ) {
								$wcount = substr_count( $_REQUEST[ $feldname ], " " ) + 1;
								unset( $leerat );
								for ( $wlpos = 0; $wlpos <= strlen( $_REQUEST[ $feldname ] ); $wlpos++ ) { // wo sind die leerzeichen ?
									if ( substr( $_REQUEST[ $feldname ], $wlpos, 1 ) == " " ) {
										$leerat[ ].=$wlpos;
									}
								}
								for ( $wpos = 1; $wpos <= $wcount; $wpos++ ) {
									$isschon = false;
									$pos1 = false;
									$tempc = false;

									if ( isset( $_REQUEST[ $feldname ] ) && $_REQUEST[ $feldname ] != '' ) {
										if ( $wpos == 1 ) { // First word: [OK]
											if ( $wcount > 1 ) { // more than 1 highlighting word:
												$highlighword = substr( $_REQUEST[ $feldname ], 0, $leerat[ $wpos - 1 ] );
											} else { // Only 1 word: [OK]
												$highlighword = substr( $_REQUEST[ $feldname ], 0 );
											}
										} elseif ( $wpos == $wcount ) { // Last word: [OK]
											$highlighword = substr( $_REQUEST[ $feldname ], $leerat[ $wpos - 2 ] + 1 );
										} elseif ( $wpos != $wcount && $wpos != 1 ) { // all words betwen first and last [OK]
											$highlighword = substr( $_REQUEST[ $feldname ], $leerat[ $wpos - 2 ] + 1, (($leerat[ $wpos - 1 ] - $leerat[ $wpos - 2 ]) - 1 ) );
										}
										$highlighword = $this->cleanword( $highlighword );

										if ( $highlighword != "" ) {
											if ( $highlighword == "b" || $highlighword == "B" ) {
												$this->mHighlightTitle = preg_replace( "#" . strtolower( $highlighword ) . "#", "<em><b>" . $highlighword . "</b></em>", $this->mHighlightTitle );
											} else {

												if ( strpos( strtolower( $this->mHighlightTitle ), strtolower( $highlighword ) ) > 0 ) { // Highlightwort nicht am anfang:
													$tempc = strlen( $highlighword );
													$pos1 = strpos( strtolower( $this->mHighlightTitle ), strtolower( $highlighword ) );

													if ( $pos1 != false && (substr_count( strtolower( $this->mHighlightTitle ), strtolower( $highlighword ) ) == 1) ) { // wenn Wort nur 1x vorhanden ist normal Highlighten:
														$tmpa = substr( $this->mHighlightTitle, 0, $pos1 );
														$tmpb = substr( $this->mHighlightTitle, ( $pos1 + $tempc ) );

														$this->mHighlightTitle = $tmpa . '<em><b>' . substr( $this->mHighlightTitle, $pos1, $tempc ) . '</b></em>' . $tmpb;
													}
													if ( $pos1 != false && (substr_count( strtolower( $this->mHighlightTitle ), strtolower( $highlighword ) ) >= 2) ) { // Wenn Wort mehrmals vorkommt, dann mehrmals highlighten:
														$highcount = substr_count( strtolower( $this->mHighlightTitle ), strtolower( $highlighword ) );
														unset( $offset );
														$offset[ 0 ] = 0;
														for ( $hc = 1; $hc <= $highcount; $hc++ ) {
															$tempc = strlen( $highlighword );

															if ( $hc == 1 ) {
																$pos1 = strpos( strtolower( $this->mHighlightTitle ), strtolower( $highlighword ) );
															} else {
																$pos1 = strpos( strtolower( $this->mHighlightTitle ), strtolower( $highlighword ), $offset[ $hc - 1 ] + 7 + $tempc );
															}

															$offset[ $hc ] = $pos1;
															$tmpa = substr( $this->mHighlightTitle, 0, $pos1 );
															$tmpb = substr( $this->mHighlightTitle, ( $pos1 + $tempc ) );
															$this->mHighlightTitle = $tmpa . '<em><b>' . substr( $this->mHighlightTitle, $pos1, $tempc ) . '</b></em>' . $tmpb;
														}
													}
												} else { // Erstes Wort im Satz:
													$tempc = strlen( $highlighword );
													$pos1 = strpos( strtolower( $this->mHighlightTitle ), strtolower( $highlighword ) );

													if ( $isschon == false && $pos1 == 0 && (strtolower( $highlighword ) == substr( strtolower( $this->mHighlightTitle ), 0, $tempc ) ) ) {
//														
														$tmpb = substr( $this->mHighlightTitle, $tempc );

														if ( strtolower( $highlighword ) == substr( strtolower( $this->mHighlightTitle ), 0, $tempc ) ) {
															$this->mHighlightTitle = '<em><b> ' . substr( $this->mHighlightTitle, 0, $tempc ) . '</b></em>' . $tmpb;
															$isschon = true;
														}
													}
												}
											}
										}
									}
								}
							}
						}
					}
				}
			}
		}
	}

	private function makeHighlightText( $wgSolrFields, $textsnipcut ) {
		for ( $tfields = 0; $tfields <= count( $wgSolrFields ) - 1; $tfields++ ) {
			foreach ( $wgSolrFields[ $tfields ] as $fieldcollection=>$inhalt ) {
				if ( $fieldcollection == 'mLable' ) { // get Solrfields 
					foreach ( $inhalt as $feldname=>$lablename ) {
						$pos = false;

						$pos = strpos( $feldname, "solr" );
						if ( $pos !== false ) {

							if ( isset( $_REQUEST[ $feldname ] ) != '' && isset( $textsnipcut ) != '' ) {
								$wcount = substr_count( $_REQUEST[ $feldname ], " " ) + 1;
								unset( $leerat );
								for ( $wlpos = 0; $wlpos <= strlen( $_REQUEST[ $feldname ] ); $wlpos++ ) { // wo sind die leerzeichen ?
									if ( substr( $_REQUEST[ $feldname ], $wlpos, 1 ) == " " ) {
										$leerat[ ].=$wlpos;
									}
								}
								for ( $wpos = 1; $wpos <= $wcount; $wpos++ ) {
									$isschon = false;
									$pos1 = false;
									if ( isset( $_REQUEST[ $feldname ] ) && $_REQUEST[ $feldname ] != '' ) {
										if ( $wpos == 1 ) { // First word: [OK]
											if ( $wcount > 1 ) { // more than 1 highlighting word:
												$highlighword = substr( $_REQUEST[ $feldname ], 0, $leerat[ $wpos - 1 ] );
											} else { // Only 1 word: [OK]
												$highlighword = substr( $_REQUEST[ $feldname ], 0 );
											}
										} elseif ( $wpos == $wcount ) { // Last word: [OK]
											$highlighword = substr( $_REQUEST[ $feldname ], $leerat[ $wpos - 2 ] + 1 );
										} elseif ( $wpos != $wcount && $wpos != 1 ) { // all words betwen first and last [OK]
											$highlighword = substr( $_REQUEST[ $feldname ], $leerat[ $wpos - 2 ] + 1, (($leerat[ $wpos - 1 ] - $leerat[ $wpos - 2 ]) - 1 ) );
										}

										$highlighword = $this->cleanword( $highlighword );

										if ( $highlighword != "" ) {
											if ( $highlighword == "b" || $highlighword == "B" ) {
												$this->mHighlightText = preg_replace( "#" . strtolower( $highlighword ) . "#", "<em><b>" . $highlighword . "</b></em>", $this->mHighlightText );
											} else {

												if ( strpos( strtolower( $this->mHighlightText ), strtolower( $highlighword ) ) > 0 ) {

													$tempc = strlen( $highlighword );
													$pos1 = strpos( strtolower( $this->mHighlightText ), strtolower( $highlighword ) );

													if ( $pos1 != false && (substr_count( strtolower( $this->mHighlightText ), strtolower( $highlighword ) ) == 1) ) { // wenn Wort nur 1x vorhanden ist normal Highlighten:
														$tmpa = substr( $this->mHighlightText, 0, $pos1 );
														$tmpb = substr( $this->mHighlightText, ( $pos1 + $tempc ) );

														$this->mHighlightText = $tmpa . '<em><b>' . substr( $this->mHighlightText, $pos1, $tempc ) . '</b></em>' . $tmpb;
													}
													if ( $pos1 != false && (substr_count( strtolower( $this->mHighlightText ), strtolower( $highlighword ) ) >= 2) ) { // Wenn Wort mehrmals vorkommt, dann mehrmals highlighten:
														$highcount = substr_count( strtolower( $this->mHighlightText ), strtolower( $highlighword ) );
														unset( $offset );
														$offset[ 0 ] = 0;
														for ( $hc = 1; $hc <= $highcount; $hc++ ) {
															$tempc = strlen( $highlighword );
															if ( $hc == 1 ) {
																$pos1 = strpos( strtolower( $this->mHighlightText ), strtolower( $highlighword ) );
															} else {
																$pos1 = strpos( strtolower( $this->mHighlightText ), strtolower( $highlighword ), $offset[ $hc - 1 ] + 7 + $tempc );
															}
															$offset[ $hc ] = $pos1;
															$tmpa = substr( $this->mHighlightText, 0, $pos1 );
															$tmpb = substr( $this->mHighlightText, ( $pos1 + $tempc ) );
															$this->mHighlightText = $tmpa . '<em><b>' . substr( $this->mHighlightText, $pos1, $tempc ) . '</b></em>' . $tmpb;
														}
													}
												} else {
													$tempc = strlen( $highlighword );
													$pos1 = strpos( strtolower( $this->mHighlightText ), strtolower( $highlighword ) );

													if ( $isschon == false && $pos1 == 0 && (strtolower( $highlighword ) == substr( strtolower( $this->mHighlightText ), 0, $tempc ) ) ) {
														$tmpb = substr( $this->mHighlightText, $tempc );
														$this->mHighlightText = '<em><b> ' . substr( $this->mHighlightText, 0, $tempc ) . '</b></em>' . $tmpb;
														$isschon = true;
													}
												}
											}
										}
									}
								}
							}
						}
					}
				}
			}
		}
	}

}

?>
