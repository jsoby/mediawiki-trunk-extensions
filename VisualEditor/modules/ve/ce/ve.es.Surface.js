/**
 * Creates an ve.es.Surface object.
 * 
 * @class
 * @constructor
 * @param {jQuery} $container DOM Container to render surface into
 * @param {ve.dm.Surface} model Surface model to view
 */
ve.es.Surface = function( $container, model ) {
	// Inheritance
	ve.EventEmitter.call( this );

	// References for use in closures
	var	_this = this,
		$document = $( document ),
		$window = $( window );
	
	// Properties
	this.model = model;
	this.documentView = new ve.es.DocumentNode( this.model.getDocument(), this );
	this.contextView = null;
	this.clipboard = {};
	this.$ = $container
		.addClass( 'es-surfaceView' )
		.append( this.documentView.$ );
	this.emitUpdateTimeout = undefined;

	// Events
	this.model.getDocument().on( 'update', function() {
		_this.emitUpdate( 25 );
	} );

	this.$	
		.on('cut copy', function(event) {
			var key = rangy.getSelection().getRangeAt(0).toString().replace(/( |\r\n|\n|\r|\t)/gm,"");

			_this.clipboard[key] = ve.copyArray( _this.documentView.model.getData( _this.getSelection() ) );

			console.log(_this.clipboard);

			if (event.type == 'cut') {
				var selection = _this.getSelection();

				setTimeout(function() {
					var tx = _this.model.getDocument().prepareRemoval( selection );
					_this.model.transact( tx );
					_this.showCursorAt(selection.start);
				}, 1);
			}
			
		})
		.on('beforepaste paste', function(event) {
			var insertionPoint = _this.getSelection().start;
			console.log(_this.clipboard);
			
			var scrollTop = $(window).scrollTop();
			
			$('#paste').html('');
			$('#paste').focus();
			
			setTimeout(function() {
				var key = $('#paste').text().replace(/( |\r\n|\n|\r|\t)/gm,"");

				if (_this.clipboard[key]) {
					var tx = _this.documentView.model.prepareInsertion( insertionPoint, _this.clipboard[key]);
					_this.documentView.model.commit(tx);
					_this.showCursorAt(insertionPoint + _this.clipboard[key].length);
					$(window).scrollTop(scrollTop);
				} else {
					alert('i can only handle copy/paste from hybrid surface. sorry. :(');
				}
				
			}, 1);
		});
		
	

	// Initialization
	this.documentView.renderContent();
};

/* Methods */

ve.es.Surface.prototype.attachContextView = function( contextView ) {
	this.contextView = contextView;
};

ve.es.Surface.prototype.getModel = function() {
	return this.model;
};

ve.es.Surface.prototype.emitUpdate = function( delay ) {
	if ( delay ) {
		if ( this.emitUpdateTimeout !== undefined ) {
			return;
		}
		var _this = this;
		this.emitUpdateTimeout = setTimeout( function() {
			_this.emit( 'update' );	
			_this.emitUpdateTimeout = undefined;
		}, delay );
	} else {
		this.emit( 'update' );	
	}
};

ve.es.Surface.prototype.getOffset = function( localNode, localOffset ) {
	var $node = $( localNode );
	while( !$node.hasClass( 'ce-leafNode' ) ) {
		$node = $node.parent();
	}
	
	var current = [$node.contents(), 0];
	var stack = [current];
	
	var offset = 0;
	
	while ( stack.length > 0 ) {
		if ( current[1] >= current[0].length ) {
			stack.pop();
			current = stack[ stack.length - 1 ];
			continue;
		}
		var item = current[0][current[1]];
		var $item = current[0].eq( current[1] );
		
		if ( item.nodeType === 3 ) {
			if ( item === localNode ) {
				offset += localOffset;
				break;
			} else {
				offset += item.textContent.length;
			}
		} else if ( item.nodeType === 1 ) {
			if ( $( item ).attr('contentEditable') === "false" ) {
				offset += 1;
			} else {
				console.log(item);
				console.log(localNode);
				if ( item === localNode ) {
					offset += localOffset;
					break;
				}
			
				stack.push( [$item.contents(), 0] );
				current[1]++;
				current = stack[stack.length-1];
				continue;
			}
		}
		current[1]++;
	}

	return this.documentView.getOffsetFromNode( $node.data('view') ) + 1 + offset;
}

ve.es.Surface.prototype.getSelection = function() {
	var selection = rangy.getSelection();

	if ( selection.anchorNode === selection.focusNode && selection.anchorOffset === selection.focusOffset ) {
		// only one offset
		var offset = this.getOffset( selection.anchorNode, selection.anchorOffset );
		return new ve.Range( offset, offset );
	} else {
		// two offsets		
		var offset1 = this.getOffset( selection.anchorNode, selection.anchorOffset );
		var offset2 = this.getOffset( selection.focusNode, selection.focusOffset );

		return new ve.Range( offset1, offset2 );
	}
};


ve.es.Surface.prototype.showCursorAt = function( offset ) {
	var $node = this.documentView.getNodeFromOffset( offset ).$;
	var current = [$node.contents(), 0];
	var stack = [current];
	var node;
	var localOffset;
	
	var index = 1 + this.documentView.getOffsetFromNode( $node.data('view') );
		
	while ( stack.length > 0 ) {
		if ( current[1] >= current[0].length ) {
			stack.pop();
			current = stack[ stack.length - 1 ];
			continue;
		}
		var item = current[0][current[1]];
		var $item = current[0].eq( current[1] );
		
		if ( item.nodeType === 3 ) {
			var length = item.textContent.length;
			if ( offset >= index && offset <= index + length ) {
				node = item;
				localOffset = offset - index;
			} else {
				index += length;
			}
		} else if ( item.nodeType === 1 ) {
			if ( $( item ).attr('contentEditable') === "false" ) {
				index += 1;
			} else {
				stack.push( [$item.contents(), 0] );
				current[1]++;
				current = stack[stack.length-1];
				continue;
			}
		}
		current[1]++;
	}
	var range = document.createRange();
	range.collapsed = true;
	range.setStart(node, localOffset);

	var sel = window.getSelection();
	sel.removeAllRanges();
	sel.addRange(range);
};

/* Inheritance */

ve.extendClass( ve.es.Surface, ve.EventEmitter );
