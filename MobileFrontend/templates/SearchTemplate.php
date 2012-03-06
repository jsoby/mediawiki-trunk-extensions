<?php

if ( !defined( 'MEDIAWIKI' ) ) {
	die( -1 );
}

class SearchTemplate extends MobileFrontendTemplate {

	public function getHTML() {

		$searchField = htmlspecialchars( $this->data['searchField'] );
		$mainPageUrl = $this->data['mainPageUrl'];
		$randomPageUrl = $this->data['randomPageUrl'];
		$homeButton = $this->data['messages']['mobile-frontend-home-button'];
		$randomButton = $this->data['messages']['mobile-frontend-random-button'];
		$clearText = htmlentities( $this->data['messages']['mobile-frontend-clear-search'], ENT_QUOTES );

		$scriptUrl = wfScript();
		$searchBoxDisplayNone = ( $this->data['hideSearchBox'] ) ? ' style="display: none;" ' : '';

		$logoDisplayNone = ( $this->data['hideLogo'] ) ? ' style="display: none;" ' : '';

		$openSearchResults = '<div id="results"></div>';

		$languageSelection = $this->data['buildLanguageSelection'] . '<br/>';
		$languageSelectionText = '<b>' . $this->data['messages']['mobile-frontend-language'] . ':</b><br/>';
		$languageSelectionDiv = '<div id="languageselectionsection">' . $languageSelectionText . $languageSelection . '</div>';

		$searchWebkitHtml = <<<HTML
			{$openSearchResults}
		<div id='header'>
			<div id='searchbox' {$logoDisplayNone}>
			<img width="35" height="22" alt='Logo' id='logo' src='{$this->data['wgMobileFrontendLogo']}' {$logoDisplayNone} />
			<form action='{$scriptUrl}' class='search_bar' method='get' {$searchBoxDisplayNone}>
			  <input type="hidden" value="Special:Search" name="title" />
				<div id="sq" class="divclearable">
					<input type="search" name="search" id="search" size="22" value="{$searchField}" autocorrect="off" autocomplete="off" autocapitalize="off" maxlength="1024" class="search" />
					<div class="clearlink" id="clearsearch" title="{$clearText}"></div>
				</div>
			  <button id='goButton' class='goButton' type='submit'></button>
			</form>
			</div>
			<div class='nav' id='nav' {$logoDisplayNone}>
			{$languageSelectionDiv}
			<a href="{$mainPageUrl}" id="homeButton" class="button">{$homeButton}</a>
			<a href="{$randomPageUrl}" id="randomButton" class="button">{$randomButton}</a>
		  </div>
		</div>
HTML;
		return $searchWebkitHtml;
	}
}
