/**
 * Initalise bullet lists with class "tam-star"
 */
window.stars = [];
$( function() {
	$('div.tam-star').each( function() {
		var tree = $(this);
		var root = 'starnode' + window.stars.length;
		tree.html( '<ul><li><a href="/">root</a>' + tree.html() + '</li></ul>' );
		$('ul', tree).css('list-style','none');
		tree.css('width','400px').css('height','400px').css('background','white').css('border','1px solid green');
		$('a', this).each( function() {

			// Initialise the <a> element
			var e = $(this);
			e.css('position','absolute')
			 .css('background','url( /wiki/extensions/TreeAndMenu/img/star-node-sml-grn.png ) top center no-repeat' )
			 .css('padding','15px 5px 0px 5px')
			 .css('display','none')
			 .attr('href','javascript:');

			// Get the depth of this element
			var li = e.parent();
			var d = 0;
			while( li[0].tagName == 'LI' ) {
				li = li.parent().parent();
				d++;
			}

			// Get the parent <a> or <div> and add item to parents children
			var p = e.parent().parent().parent();
			if( d > 1 ) {
				p = p.children().first();
				window.stars[p.attr('id').substr(8)].children.push(e);
			}

			// Set initial position to parent
			var ox = p.position().left + p.width() / 2;
			var oy = p.position().top + p.height() / 2;
			e.css('left', ox - e.width() / 2).css('top', oy - e.height() / 2);

			// Create a unique ID and persistent data for this element
			e.attr('id', 'starnode' + window.stars.length);
			window.stars.push( {
				children: [],
				parent: p,
				depth: d,
				open: false
			});

			// Set a callback to open or close the node when clicked
			e.click( function() {
				$(this).animate( { t: 100 }, {
					duration: 500,
					easing: 'swing',
					step: function(now, fx) {
						var t = fx.pos;
						var e = $(fx.elem);
						var data = window.stars[e.attr('id').substr(8)];
						var display = 'block';
						var o = t;

						// Set origin for the children to this elements center
						var ox = e.position().left + e.width() / 2;
						var oy = e.position().top + e.height() / 2;

						// Hide the labels during animation
						var col = t < 0.9 ? 'white' : 'black';

						// If closing flip t, and hide items at end
						if( data.open ) {
							if( t > 0.9 ) display = 'none';
							t = 1 - t;
							o = 1 + o;
						}


						// Current radius for this elements children
						var d = data.depth;
						var r = 120;
						if( d == 2 ) r = 90;
						else if( d == 3 ) r = 40;
						else if( d > 3 ) r = 20;
						r = r * t;

						// Position the children to their locations around the parent
						var k = Math.PI * 2 / data.children.length;
						for( var i in data.children ) {
							var child = data.children[i];
							var a = k * i + o;
							var x = Math.cos(a) * r;
							var y = Math.sin(a) * r;
							child.css( 'display','block' )
								.css('left', ox + x - child.width() / 2)
								.css('top', oy + y - child.height() / 2)
								.css('color', col)
								.css('display', display);
						}
					},

					// Toggle the status on completion
					complete: function() {
						var e = $(this);
						var data = window.stars[e.attr('id').substr(8)];
						data.open = !data.open;
					}
				});
			});
		});

		// Make the root node visible
		var e = $('#'+root);
		var data = window.stars[0];
		var p = data.parent;
		var ox = p.position().left + p.width() / 2;
		var oy = p.position().top + p.height() / 2;
		e.css('display','block').css('left',tree.left + tree.width()/2).css('top',tree.top + tree.height()/2);
	});
});
