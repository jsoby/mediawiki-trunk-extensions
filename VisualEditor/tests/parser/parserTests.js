/**
 * Initial parser tests runner for experimental JS parser
 *
 * This pulls all the parserTests.txt items and runs them through the JS
 * parser and JS HTML renderer. Currently no comparison is done on output,
 * as a direct string comparison won't be very encouraging. :)
 *
 * Needs smarter compare, as well as search-y helpers.
 *
 * 2011-07-20 <brion@pobox.com>
 */

(function() {
"use strict";

var fs = require('fs'),
	path = require('path'),
	HTML5 = require('html5').HTML5;

// @fixme wrap more or this setup in a common module

// Fetch up some of our wacky parser bits...

var basePath = path.join(path.dirname(path.dirname(process.cwd())), 'modules');
function _require(filename) {
	return require(path.join(basePath, filename));
}

function _import(filename, symbols) {
	var module = _require(filename);
	symbols.forEach(function(symbol) {
		global[symbol] = module[symbol];
	});
}

// needed for html5 parser adapter
//var events = require('events');

// For now most modules only need this for $.extend and $.each :)
global.$ = require('jquery');

// hack for renderer
global.document = $('<div>')[0].ownerDocument;

var pj = path.join;

// Local CommonJS-friendly libs
global.PEG = _require(pj('parser', 'lib.pegjs.js'));


// Our code...
_import(pj('parser', 'mediawiki.parser.peg.js'), ['PegParser']);
_import(pj('parser', 'mediawiki.parser.environment.js'), ['MWParserEnvironment']);
_import(pj('parser', 'ext.cite.taghook.ref.js'), ['MWRefTagHook']);

_require(pj('parser', 'mediawiki.html5TokenEmitter.js'));

// WikiDom and serializers
_require(pj('es', 'es.js'));
_require(pj('es', 'es.Html.js'));
_require(pj('es', 'serializers', 'es.AnnotationSerializer.js'));
_require(pj('es', 'serializers', 'es.HtmlSerializer.js'));
_require(pj('es', 'serializers', 'es.WikitextSerializer.js'));
_require(pj('es', 'serializers', 'es.JsonSerializer.js'));

// Preload the grammar file...
PegParser.src = fs.readFileSync(path.join(basePath, 'parser', 'pegParser.pegjs.txt'), 'utf8');

var parser = new PegParser();

var testFileName = '../../../../phase3/tests/parser/parserTests.txt'; // default
if (process.argv.length > 2) {
	// hack :D
	testFileName = process.argv[2];
	console.log(testFileName);
}

try {
	var testParser = PEG.buildParser(fs.readFileSync('parserTests.pegjs', 'utf8'));
} catch (e) {
	console.log(e);
}

var testFile = fs.readFileSync(testFileName, 'utf8');


try {
	var cases = testParser.parse(testFile);
} catch (e) {
	console.log(e);
}

var articles = {};

function normalizeTitle(name) {
	if (typeof name !== 'string') {
		throw new Error('nooooooooo not a string');
	}
	name = name.replace(/[\s_]+/g, '_');
	name = name.substr(0, 1).toUpperCase() + name.substr(1);
	if (name === '') {
		throw new Error('Invalid/empty title');
	}
	return name;
}

function fetchArticle(name) {
	var norm = normalizeTitle(name);
	if (norm in articles) {
		return articles[norm];
	}
}

function processArticle(item) {
	var norm = normalizeTitle(item.title);
	articles[norm] = item.text;
}

function nodeToHtml(node) {
	return $('<div>').append(node).html();
}

// Normalize the expected parser output by parsing it using a HTML5 parser and
// re-serializing it to HTML. Ideally, the parser would normalize inter-tag
// whitespace for us. For now, we fake that by simply stripping all newlines.
function normalizeHTML(source) {
	var parser = new HTML5.Parser();
	// TODO: Do not strip newlines in pre and nowiki blocks!
	source = source.replace(/\n/g, '');
	parser.parse('<body>' + source + '</body>');
	return parser.document
		.getElementsByTagName('body')[0]
		.innerHTML;
}

// Specialized normalization of the parser output, mostly to ignore a few
// known-ok differences.
function normalizeOut ( out ) {
	// TODO: Do not strip newlines in pre and nowiki blocks!
	return out.replace(/\n| data-sourcePos="[^>]+"|<!--[^-]*-->\n?/g, '');
}

function formatHTML ( source ) {
	// Quick hack to insert newlines before block level start tags!
	return source.replace(/(.)<((dd|dt|li|p|table|dl|ol|ul)[^>]*)>/g,
											'$1\n<$2>');
}


function processTest(item) {
	var tokenizer = new FauxHTML5.Tokenizer();
		// ordinary HTML5 parser for DOM comparison
	if (!('title' in item)) {
		console.log(item);
		throw new Error('Missing title from test case.');
	}
	if (!('input' in item)) {
		console.log(item);
		throw new Error('Missing input from test case ' + item.title);
	}
	if (!('result' in item)) {
		console.log(item);
		throw new Error('Missing input from test case ' + item.title);
	}

	function printTitle() {
		console.log('=====================================================');
		console.log(item.title);
		console.log("INPUT:");
		console.log(item.input + "\n");
	}

	parser.parseToTree(item.input + "\n", function(tree, err) {
		if (err) {
			printTitle();
			console.log('PARSE FAIL', err);
		} else {
			var environment = new MWParserEnvironment({
				tagHooks: {
					'ref': MWRefTagHook,
					'references': MWReferencesTagHook
				}
			});
			//var res = es.HtmlSerializer.stringify(tree,environment);
			processTokens(tree, tokenizer);
			var out = tokenizer.parser.document
						.getElementsByTagName('body')[0]
						.innerHTML;

			if (normalizeOut(out) !== normalizeHTML( item.result ) ||
				err ) {
					printTitle();
					if (err) {
						console.log('RENDER FAIL', err);
					} else {
						console.log('RAW EXPECTED:');
						console.log(item.result + "\n");

						console.log('RAW RENDERED:');
						console.log(formatHTML(out) + "\n");

						console.log('NORMALIZED EXPECTED:');
						console.log(formatHTML(normalizeHTML( item.result )) + "\n");

						console.log('NORMALIZED RENDERED:')
						console.log(formatHTML(normalizeOut(out)) + "\n");
					}
				}
		}
	});
}

function processTokens ( tokens, tokenizer ) {
	// push a body element, just to be sure to have one
	tokenizer.processToken({type: 'TAG', name: 'body'});
	// Process all tokens
	for (var i = 0, length = tokens.length; i < length; i++) {
		tokenizer.processToken(tokens[i]);
	}
	// And signal the end
	tokenizer.processToken({type: 'END'});
}


cases.forEach(function(item) {
	if (typeof item == 'object') {
		if (item.type == 'article') {
			processArticle(item);
		} else if (item.type == 'test') {
			processTest(item);
		}
	}
});
})();
