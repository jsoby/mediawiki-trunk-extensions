/**
 * A simple dump grepper based on the DumpReader module.
 *
 * @author Gabriel Wicke <gwicke@wikimedia.org>
 */

var dumpReader = require('./dumpReader.js'),
	events = require('events'),
	optimist = require('optimist'),
	colors = require('colors');

function DumpGrepper ( regexp ) {
	// inherit from EventEmitter
	//events.EventEmitter.call(this);
	this.re = regexp;
}

DumpGrepper.prototype = new events.EventEmitter();
DumpGrepper.prototype.constructor = DumpGrepper;

DumpGrepper.prototype.grepRev = function ( revision ) {
	var result = this.re.exec( revision.text ),
		matches = [];
	while ( result ) {
		matches.push( result );
		result = this.re.exec( revision.text );
	}
	if ( matches.length ) {
		this.emit( 'match', revision, matches );
	}
};

module.exports.DumpGrepper = DumpGrepper;

if (module === require.main) {
	var argv = optimist.usage( 'Usage: zcat dump.xml.gz | $0 <regexp>', {
		'i': {
			description: 'Case-insensitive matching',
			'boolean': true,
			'default': false
		},
		'color': {
			description: 'Highlight matched substring using color. Use --no-color to disable.',
			'boolean': true,
			'default': true
		}
	} ).argv;

	if( argv.help ) {
		optimist.showHelp();
		process.exit( 0 );
	}
	
	var flags = 'g';
	if(argv.i) {
		flags += 'i';
	}

	var re = new RegExp( argv._[0], flags );

	var reader = new dumpReader.DumpReader(),
		grepper = new DumpGrepper( re );

	reader.on( 'revision', grepper.grepRev.bind( grepper ) );
	grepper.on( 'match', function ( revision, matches ) {
		for ( var i = 0, l = matches.length; i < l; i++ ) {
			console.log( '== Match: [[' + revision.page.title + ']] ==' );
			var m = matches[i];
			//console.warn( JSON.stringify( m.index, null, 2 ) );
			if ( argv.color ) {
				console.log( 
					revision.text.substr( m.index - 40, 40 ) + 
					m[0].green + 
					revision.text.substr( m.index + m[0].length, 40 ) );
			} else {
				console.log( 
					revision.text.substr( m.index, -40 ) + 
					m[0] + 
					revision.text.substr( m.index + m[0].length, 40 ) );
			}
		}
	} );
	process.stdin.setEncoding('utf8');
	process.stdin.on('data', reader.push.bind(reader) );
	process.stdin.resume();
}

