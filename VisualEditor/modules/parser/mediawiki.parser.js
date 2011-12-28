/**
 *
 * Simple parser class. Should have lots of options for observing parse stages (or, use events).
 *
 * @author Gabriel Wicke <gwicke@wikimedia.org>
 * @author Neil Kandalgaonkar <neilk@wikimedia.org>
 */

var fs = require('fs'),
	path = require('path'),
	$ = require('jquery'),
	PegTokenizer                = require('./mediawiki.tokenizer.peg.js').PegTokenizer,
	TokenTransformDispatcher    = require('./mediawiki.TokenTransformDispatcher.js').TokenTransformDispatcher,
	DOMPostProcessor            = require('./mediawiki.DOMPostProcessor.js').DOMPostProcessor,
	DOMConverter                = require('./mediawiki.DOMConverter.js').DOMConverter,
	QuoteTransformer            = require('./ext.core.QuoteTransformer.js').QuoteTransformer,
	Cite                        = require('./ext.Cite.js').Cite,
	MWRefTagHook                = require('./ext.cite.taghook.ref.js').MWRefTagHook,
	FauxHTML5                   = require('./mediawiki.HTML5TreeBuilder.node.js').FauxHTML5;

function ParseThingy( config ) {

	if ( !config ) {
		config = {};
	}

	if ( !config.peg ) {
		// n.b. __dirname is relative to the module.
		var pegSrcPath = path.join( __dirname, 'pegTokenizer.pegjs.txt' );
		config.peg = fs.readFileSync( pegSrcPath, 'utf8' );
	}

	// XXX parser environment? Will be needed for fetching templates, etc.

	this.wikiTokenizer = new PegTokenizer(config.parserEnv, config.peg);

	this.postProcessor = new DOMPostProcessor();

	this.DOMConverter = new DOMConverter();

	var pthingy = this;

	// Set up the TokenTransformDispatcher with a callback for the remaining
	// processing.
	this.tokenDispatcher = new TokenTransformDispatcher ( function ( tokens ) {
		
		//console.log("TOKENS: " + JSON.stringify(tokens, null, 2));
		
		// Create a new tree builder, which also creates a new document.
		var treeBuilder = new FauxHTML5.TreeBuilder();

		// Build a DOM tree from tokens using the HTML tree builder/parser.
		pthingy.buildTree( tokens, treeBuilder );
		
		// Perform post-processing on DOM.
		pthingy.postProcessor.doPostProcess(treeBuilder.document);

		// And serialize the result.
		// XXX fix this -- make it a method
		pthingy.out = treeBuilder.document.body.innerHTML;

		// XXX fix this -- make it a method
		pthingy.getWikiDom = function() {
			return JSON.stringify(
				pthingy.DOMConverter.HTMLtoWiki( treeBuilder.document.body ),
				null, 
				2
			) + "\n";
		};

		// XXX  pull HTML5 htmlparser fixups into this module? Or leave in tests?
		

	});

	// Add token transformations..
	var qt = new QuoteTransformer();
	qt.register(this.tokenDispatcher);

	var citeExtension = new Cite();
	citeExtension.register(this.tokenDispatcher);

}


ParseThingy.prototype = {
	buildTree: function ( tokens, treeBuilder ) {
		// push a body element, just to be sure to have one
		treeBuilder.processToken({type: 'TAG', name: 'body'});
		// Process all tokens
		for (var i = 0, length = tokens.length; i < length; i++) {
			treeBuilder.processToken(tokens[i]);
		}
		
		// FIXME HACK: For some reason the end token is not processed sometimes,
		// which normally fixes the body reference up.
		treeBuilder.document.body = treeBuilder.parser
			.document.getElementsByTagName('body')[0];

	}
};

if (typeof module == "object") {
	module.exports.ParseThingy = ParseThingy;
}

