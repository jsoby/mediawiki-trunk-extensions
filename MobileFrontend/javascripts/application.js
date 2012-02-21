MobileFrontend = function() {

	function init() {
		document.body.className = "jsEnabled";
		var sectionHeadings = document.getElementsByClassName( 'section_heading' );
		for( var i = 0; i < sectionHeadings.length; i++ ) {
			sectionHeadings[i].addEventListener( 'click', function() {
				var sectionNumber = this.id ? this.id.split( '_' )[1] : -1;
				if(sectionNumber > -1) {
					wm_toggle_section( sectionNumber );
				}
			}, false );
		}
		var search = document.getElementById( 'search' );
		var clearSearch = document.getElementById( 'clearsearch' );
		var results = document.getElementById( 'results' );
		var languageSelection = document.getElementById( 'languageselection' );

		function initClearSearchLink() {
			clearSearch.setAttribute( 'title','Clear' );
			clearSearch.addEventListener( 'mousedown', clearSearchBox, true );
			search.addEventListener( 'keyup', handleClearSearchLink, false );
		}

		function navigateToLanguageSelection() {
			var url;
			if ( languageSelection ) {
				url = languageSelection.options[languageSelection.selectedIndex].value;
				if ( url ) {
					location.href = url;
				}
			}
		}
		document.getElementById( 'languageselection' ).addEventListener( 'change', navigateToLanguageSelection );

		function handleClearSearchLink() {
			if ( clearSearch ) {
				if ( search.value.length > 0 ) {
					clearSearch.style.display = 'block';
				} else {
					clearSearch.style.display = 'none';
					if ( results ) {
						results.style.display = 'none';
					}
				}
			}
		}

		function clearSearchBox( event ) {
			search.value = '';
			clearSearch.style.display = 'none';
			if ( results ) {
				results.style.display = 'none';
			}
			if ( event ) {
				event.preventDefault();
			}
		}

		function logoClick() {
			var n = document.getElementById( 'nav' ).style;
			n.display = n.display == 'block' ? 'none' : 'block';
			if (n.display == 'block') {
				if ( languageSelection ) {
					if ( languageSelection.offsetWidth > 175 ) {
						var newWidth = languageSelection.offsetWidth + 30;
						n.width = newWidth + 'px';
					}
				}
			}
		};
		initClearSearchLink();
		document.getElementById( 'logo' ).addEventListener( 'click', logoClick );
		var dismissNotification = document.getElementById( 'dismiss-notification' );

		if ( dismissNotification ) {
			var cookieNameZeroVisibility = 'zeroRatedBannerVisibility';
			var zeroRatedBanner = document.getElementById( 'zero-rated-banner' );
			var zeroRatedBannerVisibility = readCookie( cookieNameZeroVisibility );

			if ( zeroRatedBannerVisibility === 'off' ) {
				zeroRatedBanner.style.display = 'none';
			}

			dismissNotification.onclick = function() {
				if ( zeroRatedBanner ) {
					zeroRatedBanner.style.display = 'none';
					writeCookie( cookieNameZeroVisibility, 'off', 1 );
				}
			};
		}
		if ( document.location.hash.indexOf( '#' ) == 0 ) {
			wm_reveal_for_hash( document.location.hash );
		}

		for ( var a = document.getElementsByTagName( 'a' ), i = 0; i < a.length; i++ ) {
			a[i].addEventListener( 'click', function() {
				if ( this.hash.indexOf( '#' ) == 0 ) {
					wm_reveal_for_hash( this.hash );
				}
			});
		}

		// Try to scroll and hide URL bar
		window.scrollTo( 0, 1 );
	}
	init();

	function wm_reveal_for_hash( hash ) {
		var targetel = document.getElementById( hash.substr(1) );
		if ( targetel ) {
			for (var p = targetel.parentNode; p && p.className != 'content_block' && p.className != 'section_heading'; ) {
				p = p.parentNode;
			}
			if ( p && p.style.display != 'block' ) {
				var section_idx = parseInt( p.id.split( '_' )[1] );
				wm_toggle_section( section_idx );
			}
		}
	}

	function wm_toggle_section( section_id ) {
		var b = document.getElementById( 'section_' + section_id ),
			bb = b.getElementsByTagName( 'button' );
		for ( var i = 0; i <= 1; i++ ) {
			var s = bb[i].style;
			s.display = s.display == 'none' || ( i && !s.display ) ? 'inline-block' : 'none';
		}
		for ( var i = 0, d = ['content_','anchor_']; i<=1; i++ ) {
			var e = document.getElementById( d[i] + section_id );
		
			if ( e ) {
				e.style.display = e.style.display == 'block' ? 'none' : 'block';
			}
		}
	}

	function writeCookie( name, value, days ) {
		if ( days ) {
			var date = new Date();
			date.setTime( date.getTime() + ( days * 24 * 60 * 60 *1000 ) );
			var expires = '; expires=' + date.toGMTString();
		} else {
			var expires = '';
		}
		document.cookie = name + '=' + value + expires + '; path=/';
	}

	function readCookie( name ) {
		var nameVA = name + '=';
		var ca = document.cookie.split( ';' );
		for( var i=0; i < ca.length; i++ ) {
			var c = ca[i];
			while ( c.charAt(0) === ' ' ) {
				c = c.substring( 1, c.length );
			}
			if ( c.indexOf( nameVA ) == 0 ) {
				return c.substring( nameVA.length, c.length );
			}
		}
		return null;
	}

	function removeCookie( name ) {
		writeCookie( name, '', -1 );
		return null;
	}

	return {
		readCookie: readCookie,
		writeCookie: writeCookie,
		removeCookie: removeCookie,
		wm_reveal_for_hash: wm_reveal_for_hash,
		wm_toggle_section: wm_toggle_section,
		init: init
	};

}();

