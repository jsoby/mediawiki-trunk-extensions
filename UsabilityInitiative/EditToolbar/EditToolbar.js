/* JavaScript for EditToolbar extension */

/**
 * This is designed to be directly compatible with (and is essentially taken
 * directly from) the mv_embed code for bringing internationalized messages into
 * the JavaScript space. As such, if we get to the point of merging that stuff
 * into the main branch this code will be uneeded and probably cause issues.
 */
// Creates global message object if not already in existence
if ( !gMsg ) var gMsg = {};
/**
 * Caches a list of messages for later retieval
 * @param {Object} msgSet Hash of key:value pairs of messages to cache
 */
function loadGM( msgSet ){
	for ( var i in msgSet ){
		gMsg[ i ] = msgSet[i];
	}
}
/**
 * Retieves a message from the global message cache, performing on-the-fly
 * replacements using MediaWiki message syntax ($1, $2, etc.)
 * @param {String} key Name of message as it is in MediaWiki
 * @param {Array} args Array of replacment arguments
 */
function gM( key, args ) {
	var ms = '';	
	if ( key in gMsg ) {
		ms = gMsg[ key ];
		if ( typeof args == 'object' || typeof args == 'array' ) {				 
			for ( var v in args ){
				var rep = '\$'+ ( parseInt(v) + 1 );
				ms = ms.replace( rep, args[v]);
			}			 
		} else if ( typeof args =='string' || typeof args =='number' ) {
			ms = ms.replace( /\$1/, args );
		}
		return ms;
	} else {
		return '[' + key + ']';
	}
}
/**
 * This is the toolbar plugin, which can be used like
 * $( 'div#edittoolbar' ).toolbar( '#wpTextbox1', tools );
 * Where tools is an array of objects which describe each tool (see below for
 * specific examples) (THIS NEEDS BETTER DOCUMENTATION WHEN I HAVE TIME)
 */
(function($){
	$.fn.extend({
		/**
		 * 
		 * @param {Object} textbox
		 * @param {Object} tools
		 */
		toolbar: function( textbox, tools ) {
			return this.each(function() {
				// Checks if main section is in the structure
				if ( 'main' in tools ) {
					// Adds main section to toolbar
					$(this).addToolbarSection( tools.main, textbox );
				}
				// Appends additional section tabs
				var tabDiv = $( '<div />' )
					.attr( 'class', 'tabs' )
					.appendTo( $(this) );
				// Appends additional section
				var sectionsDiv = $( '<div />' )
					.attr( 'class', 'sections' )
					.appendTo( $(this) );
				// Appends float-clearing div
				$(this).append( $( '<div style="clear:both"></div>' ) );
				// Loops over each section
				for ( section in tools ) {
					// Skips over main (was handled as special case already)
					if ( section == 'main' ) {
						continue;
					}
					// Appends section content
					var sectionDiv = $( '<div />')
						.attr( { 'class': 'section', 'id': $(this).attr( 'id' ) + '-section-' + section } )
						.appendTo( sectionsDiv );
					// Appends toolbar to section div
					sectionDiv.addToolbarSection( tools[section], textbox )
					// Appends section tab
					tabDiv.append(
						$( '<div />' )
							.attr( 'class', 'tab' )
							.append(
								$( '<a />' )
									.text( tools[section].label || gM( tools[section].labelMsg ) )
									.attr( { 'href': '#', 'rel': section } )
									.data( 'sectionDiv', sectionDiv )
									.click( function() {
										$(this).blur();
										var show = ( $(this).data( 'sectionDiv' ).css( 'display' ) == 'none' );
										$(this).data( 'sectionDiv' ).parent().children().hide();
										$(this).parent().parent().find( 'a' ).removeClass( 'current' );
										if ( show ) {
											$(this).data( 'sectionDiv' ).show();
											$(this).addClass( 'current' );
										}
										return false;
									})
							)
					);
				}
			});
		},
		/**
		 * Adds a toolbar section to a containing div
		 * @param {Object} section Section data to build toolbar from
		 */
		addToolbarSection: function( section, textbox ) {
			// Path to images (THIS WILL HAVE TO CHANGE IF YOU MOVE THIS INTO CORE)
			var imagePath = wgScriptPath +
				'/extensions/UsabilityInitiative/EditToolbar/images/';
			// Check for groups
			if ( !( 'groups' in section ) ) {
				return;
			}
			// Loops over each main group
			for ( group in section.groups ) {
				// Appends group
				var groupDiv = $( '<div />' )
						.attr( 'class', 'group' )
						.appendTo( $(this) );
				// Creates generic action
				var action = function() {
					$(this).useTool(
						$(this).data( 'context' ).tool,
						$(this).data( 'context' ).textbox
					);
				};
				// Loops over each tool
				for ( tool in section.groups[group] ) {
					// Creates context for use in action
					var context = { 'tool': section.groups[group][tool], 'textbox': textbox };
					// Creates the label of the tool
					var label = ( section.groups[group][tool].label || gM( section.groups[group][tool].labelMsg ) );
					switch ( section.groups[group][tool].type ) {
						case 'button':
							// Appends button
							groupDiv.append(
								$( '<img />' )
								.attr( {
									src: imagePath + section.groups[group][tool].icon,
									alt: label,
									title: label
								} )
								.data( 'context', context )
								.click( action )
							);
						break;
						case 'select':
							// Appends select
							var selectDiv = $( '<select />' )
								.data( 'context', context )
								.change( action )
								.append(
									$( '<option />' ) .text( label )
								)
								.appendTo( groupDiv );
							// Appends options
							for ( item in section.groups[group][tool].list ) {
								selectDiv.append(
									$( '<option/>' )
										.text( ( section.groups[group][tool].list[item].label || gM( section.groups[group][tool].list[item].labelMsg ) ) )
										.attr( 'value', item )
								);
							}
						break;
						default: break;
					}
				}
			}
		},
		/**
		 * Performs action on a textbox using a tool
		 * @param {Object} tool
		 * @param {Object} textbox
		 */
		useTool: function( tool, textbox ) {
			function performAction( action, textbox ) {
				switch ( action.type) {
					case 'encapsulate':
						var parts = { 'pre': '', 'peri': '', 'post': '' };
						for ( part in parts ) {
							if ( part + 'Msg' in action.options ) {
								parts[part] = gM( action.options[part + 'Msg'], ( action.options[part] || null ) );
							} else {
								parts[part] = ( action.options[part] || '' )
							}
						}
						textbox.encapsulateSelection( parts.pre, parts.peri, parts.post );
					break;
					default: break;
				}
			}
			switch ( tool.type ) {
				case 'button':
					performAction( tool.action, textbox );
				break;
				case 'select':
					if ( $(this).val() in tool.list ) {
						performAction( tool.list[$(this).val()].action, textbox );
					}
					$(this).find(":selected").attr( 'selected', false );
					$(this).find(":first").attr( 'selected', true );
				break;
				default: break;
			}
		}
	});
})(jQuery);
/**
 * This initializes an edit toolbar on div#edittoolbar and connects it to
 * textarea#wpTextbox1 - which needs to be done after the document is loaded.
 */
$( document ).ready( function() {
	$( 'div#edittoolbar' ).toolbar( $( 'textarea#wpTextbox1' ), editToolbarConfiguration );
});
/**
 * This enormous structure is what makes the toolbar what it is. Customization
 * of this structure prior to the document being ready and thus executing the
 * initialization procedure for the toolbar will result in a custom toolbar.
 */
var editToolbarConfiguration = {
	// Main section
	'main': {
		groups: {
			'format': {
				'bold': {
					labelMsg: 'edittoolbar-format-bold',
					type: 'button',
					icon: 'format-bold.png',
					action: {
						type: 'encapsulate',
						options: {
							pre: "'''",
							periMsg: 'edittoolbar-format-bold-example',
							post: "'''"
						}
					}
				},
				'italic': {
					section: 'main',
					group: 'format',
					id: 'italic',
					labelMsg: 'edittoolbar-format-italic',
					type: 'button',
					icon: 'format-italic.png',
					action: {
						type: 'encapsulate',
						options: {
							pre: "''",
							periMsg: 'edittoolbar-format-italic-example',
							post: "''"
						}
					}
				}
			},
			'insert': {
				'xlink': {
					labelMsg: 'edittoolbar-insert-xlink',
					type: 'button',
					icon: 'insert-xlink.png',
					action: {
						type: 'encapsulate',
						options: {
							pre: "[",
							periMsg: 'edittoolbar-insert-xlink-example',
							post: "]"
						}
					}
				},
				'ilink': {
					labelMsg: 'edittoolbar-insert-ilink',
					type: 'button',
					icon: 'insert-ilink.png',
					action: {
						type: 'encapsulate',
						options: {
							pre: "[[",
							periMsg: 'edittoolbar-insert-ilink-example',
							post: "]]"
						}
					}
				},
				'file': {
					labelMsg: 'edittoolbar-insert-file',
					type: 'button',
					icon: 'insert-file.png',
					action: {
						type: 'encapsulate',
						options: {
							pre: "[[",
							preMsg: 'edittoolbar-insert-file-pre',
							periMsg: 'edittoolbar-insert-file-example',
							post: "]]"
						}
					}
				},
				'reference': {
					labelMsg: 'edittoolbar-insert-reference',
					type: 'button',
					icon: 'insert-reference.png',
					action: {
						type: 'encapsulate',
						options: {
							pre: "<ref>",
							periMsg: 'edittoolbar-insert-reference-example',
							post: "</ref>"
						}
					}
				}
			}
		}
	},
	// Format section
	'format': {
		labelMsg: 'edittoolbar-section-format',
		groups: {
			'list': {
				'ulist': {
					labelMsg: 'edittoolbar-format-ulist',
					type: 'button',
					icon: 'format-ulist.png',
					action: {
						type: 'encapsulate',
						options: {
							pre: "* ",
							periMsg: 'edittoolbar-format-ulist-example',
							post: ""
						}
					}
				},
				'olist': {
					labelMsg: 'edittoolbar-format-olist',
					type: 'button',
					icon: 'format-olist.png',
					action: {
						type: 'encapsulate',
						options: {
							pre: "# ",
							periMsg: 'edittoolbar-format-olist-example',
							post: ""
						}
					}
				}
			},
			'heading': {
				'heading': {
					labelMsg: 'edittoolbar-format-heading',
					type: 'select',
					list: {
						'heading-1' : {
							labelMsg: 'edittoolbar-format-heading-1',
							action: {
								type: 'encapsulate',
								options: {
									pre: "=",
									periMsg: 'edittoolbar-format-heading-example',
									post: "="
								}
							}
						},
						'heading-2' : {
							labelMsg: 'edittoolbar-format-heading-2',
							action: {
								type: 'encapsulate',
								options: {
									pre: "==",
									periMsg: 'edittoolbar-format-heading-example',
									post: "=="
								}
							}
						},
						'heading-3' : {
							labelMsg: 'edittoolbar-format-heading-3',
							action: {
								type: 'encapsulate',
								options: {
									pre: "===",
									periMsg: 'edittoolbar-format-heading-example',
									post: "==="
								}
							}
						},
						'heading-4' : {
							labelMsg: 'edittoolbar-format-heading-4',
							action: {
								type: 'encapsulate',
								options: {
									pre: "====",
									periMsg: 'edittoolbar-format-heading-example',
									post: "===="
								}
							}
						},
						'heading-5' : {
							labelMsg: 'edittoolbar-format-heading-5',
							action: {
								type: 'encapsulate',
								options: {
									pre: "=====",
									periMsg: 'edittoolbar-format-heading-example',
									post: "====="
								}
							}
						}
					}
				}
			},
			'size': {
				'superscript': {
					labelMsg: 'edittoolbar-format-superscript',
					type: 'button',
					icon: 'format-superscript.png',
					action: {
						type: 'encapsulate',
						options: {
							pre: "<super>",
							periMsg: 'edittoolbar-format-superscript-example',
							post: "</super>"
						}
					}
				},
				'subscript': {
					labelMsg: 'edittoolbar-format-subscript',
					type: 'button',
					icon: 'format-subscript.png',
					action: {
						type: 'encapsulate',
						options: {
							pre: "<sub>",
							periMsg: 'edittoolbar-format-subscript-example',
							post: "</sub>"
						}
					}
				},
				'big': {
					labelMsg: 'edittoolbar-format-big',
					type: 'button',
					icon: 'format-big.png',
					action: {
						type: 'encapsulate',
						options: {
							pre: "<big>",
							periMsg: 'edittoolbar-format-big-example',
							post: "</big>"
						}
					}
				},
				'small': {
					labelMsg: 'edittoolbar-format-small',
					type: 'button',
					icon: 'format-small.png',
					action: {
						type: 'encapsulate',
						options: {
							pre: "<small>",
							periMsg: 'edittoolbar-format-small-example',
							post: "</small>"
						}
					}
				}
			}
		}
	}
};