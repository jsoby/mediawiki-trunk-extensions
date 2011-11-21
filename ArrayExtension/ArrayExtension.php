<?php

/**
 * Initialization file for the ArrayExtension extension.
 *
 * Documentation: http://www.mediawiki.org/wiki/Extension:ArrayExtension
 * Support:       http://www.mediawiki.org/wiki/Extension_talk:ArrayExtension
 * Source code:   http://svn.wikimedia.org/viewvc/mediawiki/trunk/extensions/ArrayExtension
 *
 * @file ArrayExtension.php
 * @ingroup ArrayExtension
 *
 * @licence MIT License
 *
 * @author Li Ding (lidingpku@gmail.com)
 * @author Jie Bao
 * @author Daniel Werner (since version 1.3)
 * 
 * @ToDo:
 * use $egArrayExtensionCompatbilityMode to finally get rid of unlogic behavior of certain functions
 * who create a new array from the data of one or more old arrays. In case only the new array name is
 * given, sometimes the new array will be created, sometimes not. It should always be created to make
 * things more consistent and clear.
 */

/**
 * This documenation group collects source code files belonging to ArrayExtension.
 *
 * @defgroup ArrayExtension ArrayExtension
 */

/* TODO:
    - add experimental table (2 dimension array)  data structure
       * table  = header, row+  (1,1....)
       * sort_table_by_header (header)
       * sort_table_by_col (col)
       * print_table (format)   e.g. csv, ul, ol,
       * add_table_row (array)
       * get_table_row (row) to an array
       * add_table_col(array)
       * get_table_col (col) to an array
       * get_table_header () to an array
       * get_total_row
       * get_total_col 
*/

if ( ! defined( 'MEDIAWIKI' ) ) { die(); }

$wgExtensionCredits['parserhook'][] = array(
	'path'           => __FILE__,
	'name'           => 'ArrayExtension',
	'url'            => 'http://www.mediawiki.org/wiki/Extension:ArrayExtension',
	'author'         => array ( 'Li Ding', 'Jie Bao', '[http://www.mediawiki.org/wiki/User:Danwe Daniel Werner]' ),
	'descriptionmsg' => 'arrayext-desc',
	'version'        => ExtArrayExtension::VERSION
);

$wgExtensionMessagesFiles['ArrayExtension'     ] = ExtArrayExtension::getDir() . '/ArrayExtension.i18n.php';
$wgExtensionMessagesFiles['ArrayExtensionMagic'] = ExtArrayExtension::getDir() . '/ArrayExtension.i18n.magic.php';

// hooks registration:
$wgHooks['ParserFirstCallInit'][] = 'ExtArrayExtension::init';
$wgHooks['ParserClearState'   ][] = 'ExtArrayExtension::onParserClearState';


/**
 * Full compatbility to versions before 1.4
 * 
 * @since 1.4 alpha
 * 
 * @var boolean
 */
$egArrayExtensionCompatbilityMode = false;


/**
 * Extension class with all the array functionality, also serves as store for arrays per
 * Parser object and offers public accessors for interaction with ArrayExtension.
 * 
 * @since 2.0 ('ArrayExtension' before and one global instance, also non-static parser functions)
 */
class ExtArrayExtension {

	/**
	 * Version of the ArrayExtension extension.
	 * 
	 * @since 2.0 (before in 'ArrayExtension' class since 1.3.2)
	 */
	const VERSION = '2.0 alpha';

	/**
	 * Store for arrays.
	 * 
	 * @var array
	 * @private
	 */
    var $mArrays = array();

	/**
	 * Sets up parser functions
	 * 
	 * @since 2.0
	 */
	public static function init( Parser &$parser ) {		
		/*
		 * store for arrays per Parser object. This will solve several bugs related to
		 * 'ParserClearState' hook clearing all variables early in combination with certain
		 * other extensions. (since v2.0)
		 */
		$parser->mExtArrayExtension = new self();

		// SFH_OBJECT_ARGS available since MW 1.12
		self::initFunction( $parser, 'arraydefine' );
		self::initFunction( $parser, 'arrayprint', SFH_OBJECT_ARGS );
		self::initFunction( $parser, 'arrayindex', SFH_OBJECT_ARGS );
		self::initFunction( $parser, 'arraysize' );		
		self::initFunction( $parser, 'arraysearch', SFH_OBJECT_ARGS );		
		self::initFunction( $parser, 'arraysearcharray' );
		self::initFunction( $parser, 'arrayslice' );
		self::initFunction( $parser, 'arrayreset', SFH_OBJECT_ARGS );
		self::initFunction( $parser, 'arrayunique' );
		self::initFunction( $parser, 'arraysort' );
		self::initFunction( $parser, 'arraymerge' );
		self::initFunction( $parser, 'arrayunion' );
		self::initFunction( $parser, 'arraydiff' );
		self::initFunction( $parser, 'arrayintersect' );
		
		return true;
	}
	private static function initFunction( Parser &$parser, $name, $flags = 0 ) {		
		// all parser functions with prefix:
		$prefix = ( $flags & SFH_OBJECT_ARGS ) ? 'pfObj_' : 'pf_';		
		$functionCallback = array( __CLASS__, $prefix . $name );
				
		$parser->setFunctionHook( $name, $functionCallback, $flags );		
	}	
	
	/**
	 * Returns the extensions base installation directory.
	 *
	 * @since 2.0
	 * 
	 * @return boolean
	 */
	public static function getDir() {
		static $dir = null;
		
		if( $dir === null ) {
			$dir = dirname( __FILE__ );
		}
		return $dir;
	}
		
	
	####################
	# Parser Functions #
	####################

	///////////////////////////////////////////////////////////
	// PART 1. constructor
	///////////////////////////////////////////////////////////

	/**
	* Define an array by a list of 'values' deliminated by 'delimiter',
	* the delimiter should be perl regular expression pattern
	* usage:
	*      {{#arraydefine:arrayid|values|delimiter|options}}
	*
	* http://us2.php.net/manual/en/book.pcre.php
	* see also: http://us2.php.net/manual/en/function.preg-split.php
	*/
    static function pf_arraydefine(
			Parser &$parser,
			$arrayId,
			$value = null,
			$delimiter = '/\s*,\s*/',
			$options = '',
			$delimiter2 = ', ',
			$search = '@@@@',
			$subject = '@@@@',
			$frame = null
	) {
        if ( !isset( $arrayId ) ) {
        	return '';
        }
		
		$out = '';
		$array = array();
		$trimDone = false; // whether or not we can be sure that all array elements are trimmed
		
        // normalize        
        $delimiter = trim( $delimiter );

        if( $value === null ) {
			// no element set, not even an empty one
            $array = array();
        }
		else {
			$value = trim( $value ); // just in case...
			
			// fill array with user input:
			if( $delimiter === '' ) {
				// whole input one element, also takes care of special case empty '' value and 'unique' option set
				$array = array( $value );
				$trimDone = true;
			}
			else {
				// if no regex delimiter given, build one:
				if( ! self::isValidRegEx( $delimiter ) ) {
					$delimiter = '/\s*' . preg_quote( $delimiter, '/' ) . '\s*/';
					$trimDone = true; // spaces are part of the delimiter now
				}
				$array = preg_split( $delimiter, $value );
			}
			
			// trim all values before unique if still necessary, otherwise unique might not work correctly
			if( ! $trimDone ) {
				$array = self::sanitizeArray( $array );
			}

            // now parse the options, and do posterior process on the created array
            $arrayOptions = self::parse_options( $options );
			
            // make it unique if option is set
            if( array_key_exists( 'unique', $arrayOptions ) ) {
				// unique like the parser function would do it
				$array = self::array_unique( $array );
            }
			
			/**
			 * @ToDo:
			 * The 'empty' option was introduced in r81676 but actually breaks old functionality since it will remove
			 * all empty elements by default.
			 * 'unique' already allows to remove all empty elements but it will also remove al duplicates, there should
			 * be a more intelligent alternative to 'unique' which allows both, to preserve or remove empty elements
			 * independent from removing duplicate values.
			 */
			/*
			// remove all empty '' elements if option is NOT set
            if( ! array_key_exists( 'empty', $arrayOptions ) ) {
				$values = array(); // temp array so we won't have gaps (don't use unset!)
				foreach ( $array as $key => $value ) {					
            		if( $value !== '' ) {
            			$values[] = $elem;
            		}
            	}
				$array = $values;
				unset( $values );
            }
			 */

            // sort array if the option is set
            self::pf_arraysort( $parser, $arrayId, self::array_value( $arrayOptions, 'sort' ) );

			// print the array upon request
			switch( self::array_value( $arrayOptions, 'print' ) ) {
				case 'list':
					$out = self::pf_arrayprint( $parser, $arrayId );
					break;
				
				case 'print':
					$out = self::pf_arrayprint( $parser, $arrayId,  $delimiter2, $search, $subject, $frame );
					break;
			}
		}
		
		self::get( $parser )->setArray( $arrayId, $array );

		return $out;
    }


	///////////////////////////////////////////////////////////
	// PART 2. print
	///////////////////////////////////////////////////////////


	/**
	* print an array.
	* foreach element of the array, print 'subject' where  all occurrences of 'search' is replaced with the element,
	* and each element print-out is deliminated by 'delimiter'
	* The subject can embed parser functions; wiki links; and templates.
	* usage:
	*      {{#arrayprint:arrayid|delimiter|search|subject}}
	* examples:
	*    {{#arrayprint:b}}    -- simple
	*    {{#arrayprint:b|<br/>}}    -- add change line
	*    {{#arrayprint:b|<br/>|@@@|[[@@@]]}}    -- embed wiki links
	*    {{#arrayprint:b|<br/>|@@@|{{#set:prop=@@@}} }}   -- embed parser function
	*    {{#arrayprint:b|<br/>|@@@|{{f.tag{{f.print.vbar}}prop{{f.print.vbar}}@@@}} }}   -- embed template function
	*    {{#arrayprint:b|<br/>|@@@|[[name::@@@]]}}   -- make SMW links
	*/
    static function pf_arrayprint( Parser &$parser, $arrayId , $delimiter = ', ', $search = '@@@@', $subject = '@@@@', $frame = null ) {
		// get array, null if non-existant:
		$array = self::get( $parser )->getArray( $arrayId );
		
		if( $array === null ) {
			return '';
		}

		$rendered_values = array();
		foreach( $array as $val ) {
			// replace place holder with current value:
			$rawResult = str_replace( $search, $val, $subject );
			
			/*
			 * $subjectd still is un-expanded (this allows to use some parser functions like
			 * {{FULLPAGENAME:@@@@}} directly without getting parsed before @@@@ is replaced.
			 * Expand it so we replace templates like {{!}} which we need for the final parse.
			 */
			$rawResult = $parser->preprocessToDom( $rawResult, $frame->isTemplate() ? Parser::PTD_FOR_INCLUSION : 0 );
			$rawResult = trim( $frame->expand( $rawResult ) );

			$rendered_values[] = $rawResult;
		}
		
		$output = implode( $delimiter, $rendered_values );		
		$noparse = false;

		/*
		 * don't leave the final parse to Parser::braceSubstitution() since there are some special cases where it
		 * would produce unexpected output (it uses a new child frame and ignores whether the frame is a template!)
		 */
		$noparse = true;

		$output = $parser->preprocessToDom( $output, $frame->isTemplate() ? Parser::PTD_FOR_INCLUSION : 0 );
		$output = trim( $frame->expand( $output ) );
		
		return $output;
	}
	
    static function pfObj_arrayprint( Parser &$parser, $frame, $args ) {
        // Get Parameters
        $arrayId   = isset( $args[0] ) ? trim( $frame->expand( $args[0] ) ) : '';
        $delimiter = isset( $args[1] ) ? trim( $frame->expand( $args[1] ) ) : ', ';
		/*
		 * PPFrame::NO_ARGS and PPFrame::NO_TEMPLATES for expansion make a lot of sense here since the patterns getting replaced
		 * in $subject before $subject is being parsed. So any template or argument influence in the patterns wouldn't make any
		 * sense in any sane scenario.
		 */
        $search  = isset( $args[2] ) ? trim( $frame->expand( $args[2], PPFrame::NO_ARGS | PPFrame::NO_TEMPLATES ) ) : '@@@@';
        $subject = isset( $args[3] ) ? trim( $frame->expand( $args[3], PPFrame::NO_ARGS | PPFrame::NO_TEMPLATES ) ) : '@@@@';

        return self::pf_arrayprint( $parser, $arrayId, $delimiter, $search, $subject, $frame );
    }
	
	
	/**
	* print the value of an array (identified by arrayid)  by the index, invalid index results in the default value  being printed. note the index is 0-based.
	* usage:
	*   {{#arrayindex:arrayid|index}}
	*/
	static function pfObj_arrayindex( Parser &$parser, PPFrame $frame, $args ) {
		global $egArrayExtensionCompatbilityMode;
		
		// Get Parameters
		$arrayId    = isset( $args[0] ) ? trim( $frame->expand( $args[0] ) ) : '';		
		$rawOptions = isset( $args[2] ) ? $args[2] : '';
		
		if( ! isset( $args[1] ) ) {
			return '';
		}
		$index = trim( $frame->expand( $args[1] ) );
		
		// get value or null if it doesn't exist. Takes care of negative index as well
		$val = self::get( $parser )->getArrayValue( $arrayId, $index );
				
        if( $val === null || ( $val === '' && !$egArrayExtensionCompatbilityMode ) ) {
			// index doesn't exist, return default (parameter 3)!			
			// without compatbility, also return default in case of empty string ''
			
			// only expand default when needed
			$defaultOrOptions = trim( $frame->expand( $rawOptions ) );
			
			if( $egArrayExtensionCompatbilityMode ) {
				// COMPATBILITY-MODE
				// now parse the options, and do posterior process on the created array
				$options = self::parse_options( $defaultOrOptions );
				$default = self::array_value( $options, 'default' );
			} else {
				$default = $defaultOrOptions;
			}
			
			return $default;
        }
		
		return $val;
    }
	
	/**
	* returns the size of an array.
	* Print the size (number of elements) in the specified array and '' if array doesn't exist
	* usage:
	*   {{#arraysize:arrayid}}
	*
	*   See: http://www.php.net/manual/en/function.count.php
	*/
    static function pf_arraysize( Parser &$parser, $arrayId ) {
		$store = self::get( $parser );
		
        if( ! $store->arrayExists( $arrayId ) ) {
           return '';
        }
		
        return count( $store->getArray( $arrayId ) );
    }

	
	/**
	* locate the index of the first occurence of an element starting from the 'index'
	*    - print "-1" (not found) or index (found) to show the index of the first occurence of 'value' in the array identified by arrayid
	*    - if 'yes' and 'no' are set, print value of them when found or not-found
	*    - index is 0-based , it must be non-negative and less than lenth
	* usage:
	*   {{#arraysearch:arrayid|value|index|yes|no}}
	*
	*   See: http://www.php.net/manual/en/function.array-search.php
	*   note it is extended to support regular expression match and index
	*/
	static function pfObj_arraysearch( Parser &$parser, PPFrame $frame, $args ) {
		
		$arrayId = trim( $frame->expand( $args[0] ) );
		$index = isset( $args[2] ) ? trim( $frame->expand( $args[2] ) ) : 0;
		
		$store = self::get( $parser );
		
        if( $store->arrayExists( $arrayId )
			&& $store->validate_array_index( $arrayId, $index, false )				
		) {
			$array = $store->getArray( $arrayId );
			
			// validate/build search regex:
			if( isset( $args[1] ) ) {
				
				$needle = trim( $frame->expand( $args[1] ) );
				
				if ( ! self::isValidRegEx( $needle ) ) {
					$needle = '/^\s*' . preg_quote( trim( $needle ), '/' ) . '\s*$/';
				}				
			}
			else {
				$needle = '/^\s*$/';
			}

			// search for a match inside the array:
			$total = count( $array );
			for ( $i = $index; $i < $total; $i++ ) {
				$value = $array[ $i ];

				if ( preg_match( $needle, $value ) ) {
					// found!
					if ( isset( $args[3] ) ) {
						// Expand only when needed!						
						return trim( $frame->expand( $args[3] ) );
					}
					else {
						// return index of first found item
						return $i;
					}
				}
			}
		}
		
		global $egArrayExtensionCompatbilityMode;
		
		// no match! (Expand only when needed!)
		$no = isset( $args[4] )
		      ? trim( $frame->expand( $args[4] ) )
		      : $egArrayExtensionCompatbilityMode ? '-1' : ''; // COMPATBILITY-MODE
        return $no;
    }

	/**
	* search an array and create a new array with all the results. Transforming the new entries before storing them is possible too.
	* usage:
	*   {{#arraysearcharray:arrayid_new|arrayid|needle|index|limit|transform}}
	*
	* "needle" can be a regular expression or a string search value. If "needle" is a regular expression, "transform" can contain
	* "$n" where "n" stands for a number to access a variable from the regex result.
	*/
	static function pf_arraysearcharray(
			Parser &$parser,
			$arrayId_new,
			$arrayId = null,
			$needle = '/^(\s*)$/',
			$index = 0,
			$limit = -1,
			$transform = ''
	) {
		$store = self::get( $parser );
		
		if( $arrayId === null ) {
			global $egArrayExtensionCompatbilityMode;
			if( ! $egArrayExtensionCompatbilityMode ) { // COMPATBILITY-MODE
				$store->setArray( $arrayId_new );
			}
			return '';
		}		
		// also takes care of negative index by calculating start index:
		$validIndex = $store->validate_array_index( $arrayId, $index, false );
		
		// make sure at least empty array exists but don't overwrite data
		// we still need in case new array ID same as target array ID
		$array = $store->getArray( $arrayId );
		$store->setArray( $arrayId_new );
		
        if( $array === null || !$validIndex ) {
			return '';
		}
		
		// non-numeric limit will be set to 0
		$limit = (int)$limit;
		if( $limit === 0 ) {
			return '';
		}
						
		$newArr = array();		
				
        if( ! self::isValidRegEx( $needle ) ) {
			$needle = '/^\s*(' . preg_quote( $needle, '/' ) . ')\s*$/';
		}

		// search the array for all matches and put them in the new array
		$total = count( $array );
        for( $i = $index; $i < $total; $i++ ) {
			
			$value = $array[ $i ];

			if( preg_match( $needle, $value ) ) {
				if( $transform !== '' ) {
					$value = preg_replace( $needle, $transform, $value );
				}
				$newArr[] = trim( $value );
				
				// stop if limit is reached, limit -1 means no limit
				if( --$limit === 0 ) {
					break;
				}
			}
        }
		
		// set new array:
		$store->setArray( $arrayId_new, $newArr );
		return '';
	}



	///////////////////////////////////////////////////////////
	// PART 3. alter an array
	///////////////////////////////////////////////////////////

	/**
	* reset some or all defined arrayes
	* usage:
	*    {{#arrayreset:}}
	*    {{#arrayreset:arrayid1,arrayid2,...arrayidn}}
	*/
	static function pfObj_arrayreset( Parser &$parser, PPFrame $frame, $args) {
		global $egArrayExtensionCompatbilityMode;
				
		if( $egArrayExtensionCompatbilityMode && count( $args ) == 1 ) {
			/*
			 * COMPATBILITY-MODE: before arrays were separated by ';' which is an bad idea since
			 * the ',' is an allowed character in array names!
			 */
			$args = preg_split( '/\s*,\s*/', trim( $frame->expand( $args[0] ) ) );
		}
		
		$store = self::get( $parser );
		
		// reset all hash tables if no specific tables are given:
		if( ! isset( $args[0] ) || ( $args[0] === '' && count( $args ) == 1 ) ) {
			$store->mArrays = array();
		}
		else {
			// reset specific hash tables:
			foreach( $args as $arg ) {
				$arrayId = trim( $frame->expand( $arg ) );
				$store->unsetArray( $arrayId );				
			}
		}
		return '';
    }
	

	/**
	 * convert an array to a set
	 * convert the array identified by arrayid into a set (all elements are unique)
	 * also removes empty '' elements from the array
	 * usage:
	 *   {{#arrayunique:arrayid}}
	 *
	 *   see: http://www.php.net/manual/en/function.array-unique.php
	 */
    static function pf_arrayunique( Parser &$parser, $arrayId ) {
		$store = self::get( $parser );
		
        if( $store->arrayExists( $arrayId ) ) {
		   $array = $store->getArray( $arrayId );
		   $array = self::array_unique( $array );
		   $store->setArray( $arrayId, $array );
        }
		return '';		
    }


	/**
	 * sort specified array in the following order:
	 *    - none:    No sort (default)
	 *    - desc:    In descending order, large to small
	 *    - asce:    In ascending order, small to large
	 *    - random:  Shuffle the arrry in random order
	 *    - reverse: Return an array with elements in reverse order
	 * usage:
	 *   {{#arraysort:arrayid|order}}
	 *
	 *   see: http://www.php.net/manual/en/function.sort.php
	 *        http://www.php.net/manual/en/function.rsort.php
	 *        http://www.php.net/manual/en/function.shuffle.php
 	 *        http://us3.php.net/manual/en/function.array-reverse.php
	 */
    static function pf_arraysort( Parser &$parser, $arrayId , $sort = 'none' ) {        
		$store = self::get( $parser );
		
        if( ! $store->arrayExists( $arrayId ) ) {
           return '';
        }
		
		// do the requested sorting of the given array:
        switch( $sort ) {
                case 'asc':
                case 'asce':
                case 'ascending':
					sort( $store->mArrays[ $arrayId ] );
					break;
				
                case 'desc':
                case 'descending':
					rsort( $store->mArrays[ $arrayId ] );
					break;

                case 'random':
					shuffle( $store->mArrays[ $arrayId ] );
					break;

                case 'reverse':
					$store->mArrays[ $arrayId ] = array_reverse( $store->mArrays[ $arrayId ] );
					break;
            } ;
    }


	///////////////////////////////////////////////////////////
	// PART 4. create an array
	///////////////////////////////////////////////////////////

	/**
	* merge two arrays, keep duplicated values
	* usage:
	*   {{#arraymerge:arrayid_new|arrayid1|arrayid2}}
	*
	*  merge values two arrayes identified by arrayid1 and arrayid2 into a new array identified by arrayid_new.
	*  this merge differs from array_merge of php because it merges values.
	*/
    static function pf_arraymerge( Parser &$parser, $arrayId_new, $arrayId1 = null, $arrayId2 = null ) {
        if( ! isset( $arrayId_new ) || ! isset( $arrayId1 ) || ! isset( $arrayId2 ) ) {
           return '';
		}
		$store = self::get( $parser );
		
        $ret = $store->validate_array_by_arrayId( $arrayId1 );
        if( $ret !== true ) {
           return '';
        }

        $temp_array = array();
        foreach( $store->mArrays[ $arrayId1 ] as $entry ) {
           array_push ( $temp_array, $entry );
        }

        if( isset( $arrayId2 ) && strlen( $arrayId2 ) > 0 ) {
                $ret = $store->validate_array_by_arrayId( $arrayId2 );
                if( $ret === true ) {
                        foreach( $store->mArrays[ $arrayId2 ] as $entry ) {
                           array_push ( $temp_array, $entry );
                        }
                }
        }

        $store->mArrays[$arrayId_new] = $temp_array;
        return '';
    }

	/**
	* extract a slice from an array
	* usage:
	*     {{#arrayslice:arrayid_new|arrayid|offset|length}}
	*
	*    extract a slice from an  array
	*    see: http://www.php.net/manual/en/function.array-slice.php
	*/
	static function pf_arrayslice( Parser &$parser, $arrayId_new, $arrayId = null , $offset = 0, $length = null ) {
		$store = self::get( $parser );
		if( $arrayId === null ) {
			global $egArrayExtensionCompatbilityMode;
			if( ! $egArrayExtensionCompatbilityMode ) { // COMPATBILITY-MODE
				$store->setArray( $arrayId_new );
			}
			return '';
		}
		// get target array before overwriting it in any way
		$array = $store->getArray( $arrayId );

		// make sure at least an empty array exists if we return early
		$store->setArray( $arrayId_new );
		
		if( $array === null
			|| ! is_numeric( $offset ) // don't ignore invalid offset
		) {
		   return '';
		}

		if( ! is_numeric( $length ) ) {
			$length = null; // ignore invalid input, slice till end
		}
		
		// array_slice will re-organize keys		
		$newArray = array_slice( $array, $offset, $length );
		$store->setArray( $arrayId_new, $newArray );
		
		return '';
	}

	///////////////////////////////////////////////// /
	// SET OPERATIONS: a set does not have duplicated element
	
	/**
	* set operation, {red, white} = {red, white} union {red}
	* usage:
	*    {{#arrayunion:arrayid_new|arrayid1|arrayid2}}

	*    similar to arraymerge, this union works on values.
	*/
    static function pf_arrayunion( Parser &$parser, $arrayId_new, $arrayId1 = null , $arrayId2 = null ) {
		$store = self::get( $parser );
        if ( ! isset( $arrayId_new ) || ! isset( $arrayId1 ) || ! isset( $arrayId2 ) ) {
           return '';
		}
        if( ! isset( $arrayId1 ) || ! $store->arrayExists( $arrayId1 ) ) {
           return '';
        }
        if( ! isset( $arrayId2 ) || ! $store->arrayExists( $arrayId2 ) ) {
           return '';
        }

        self::pf_arraymerge( $parser, $arrayId_new, $arrayId1, $arrayId2 );
		$store->setArray( $arrayId_new, array_unique ( $store->getArray( $arrayId_new ) ) );
		
        return '';
    }
	
	/**
	* set operation,    {red} = {red, white} intersect {red,black}
	* usage:
	*    {{#arrayintersect:arrayid_new|arrayid1|arrayid2}}
	*   See: http://www.php.net/manual/en/function.array-intersect.php
	*/
    static function pf_arrayintersect( Parser &$parser, $arrayId_new, $arrayId1 = null , $arrayId2 = null ) {
		$store = self::get( $parser );
        if ( ! isset( $arrayId_new ) || ! isset( $arrayId1 ) || ! isset( $arrayId2 ) ) {
           return '';
		}
        if( ! isset( $arrayId1 ) || ! $store->arrayExists( $arrayId1 ) ) {
           return '';
        }
        if( ! isset( $arrayId2 ) || ! $store->arrayExists( $arrayId2 ) ) {
           return '';
        }

		// keys will be preserved...
        $newArray = array_intersect( array_unique( $store->mArrays[$arrayId1] ), array_unique( $store->mArrays[$arrayId2] ) );

		// ...so we have to reorganize the key order
		$store->mArrays[$arrayId_new] = self::sanitizeArray( $newArray );

        return '';
    }

	/**
	*
	* usage:
	*    {{#arraydiff:arrayid_new|arrayid1|arrayid2}}
	*
	*    set operation,    {white} = {red, white}  -  {red}
	*    see: http://www.php.net/manual/en/function.array-diff.php
	*/
    static function pf_arraydiff( Parser &$parser, $arrayId_new, $arrayId1 = null , $arrayId2 = null ) {
		$store = self::get( $parser );
        if( ! isset( $arrayId_new ) || ! isset( $arrayId1 ) || ! isset( $arrayId2 ) ) {
           return '';
		}        
        if( ! isset( $arrayId1 ) || ! $store->arrayExists( $arrayId1 ) ) {
           return '';
        }
        if( ! isset( $arrayId2 ) || ! $store->arrayExists( $arrayId2 ) ) {
           return '';
        }		
		// keys will be preserved...
        $newArray = array_diff( array_unique( $store->mArrays[$arrayId1] ), array_unique( $store->mArrays[$arrayId2] ) );

		// ...so we have to reorganize the key order
		$store->mArrays[$arrayId_new] = self::sanitizeArray( $newArray );

        return '';
    }
	
	
	##################
	# Private helper #
	##################

    /**
	 * Validates an index for an array and returns true in case the index is a valid index within
	 * the array. This also changes the index value, which is given by reference, in case it is
	 * set to a negative value. In case $strictIndex is set to false, further transforming of
	 * $index might be done - in the same cases normally the function would return false.
	 * 
	 * @param string  $arrayId
	 * @param mixed  &$index
	 * @param bool    $strictIndex Whether non-numeric indexes and negative indexes which would
	 *                end up out of range, below 0, should be set to 0 automatically.
	 * 
	 * @return boolean
	 */
    protected function validate_array_index( $arrayId, &$index, $strictIndex = false ) {
        if( ! is_numeric( $index ) ) {
			if( $strictIndex ) {
				return false;
			} else {
				$index = 0;
			}
		}
		$index = (int)$index;
		
		if( ! array_key_exists( $arrayId, $this->mArrays ) ) {
			return false;
		}
		
		$array = $this->mArrays[ $arrayId ];
		
		// calculate start index for negative start indexes:
		if( $index < 0 ) {
			$index = count( $array ) + $index;
			if ( $index < 0 && !$strictIndex ) {
				$index = 0;
			}
		}
		
        if( ! isset( $array ) ) {
			return false;
		}
        if( ! array_key_exists( $index, $array ) ) {
			return false;
		}
        return true;
    }
	
	/**
	 * private function for validating array by name
	 * @ToDo: get rid of this!
	 * @deprecated
	 */
    protected function validate_array_by_arrayId( $arrayId ) {
		if( ! isset( $arrayId ) ) {
			return '';
		}
		if( ! isset( $this->mArrays )
			|| ! array_key_exists( $arrayId, $this->mArrays )
			|| ! is_array( $this->mArrays[ $arrayId ] )
		) {
			global $egArrayExtensionCompatbilityMode;
			if( $egArrayExtensionCompatbilityMode ) {
				return "undefined array: $arrayId"; // COMPATBILITY-MODE
			} else {
				return '';
			}
		}

		return true;
    }
	
	/**
	 * Convenience function to get a value from an array. Returns '' in case the
	 * value doesn't exist or no array was given
	 */
    protected static function array_value( $array, $field ) {
		if ( is_array( $array ) && array_key_exists( $field, $array ) ) {
			return $array[ $field ];
		}
		return '';
    }
	
	/**
	 * Parses a string of options separated by ','. Options can be just certain key-words or
	 * key-value pairs separated by '='. Options are case-insensitive and spacing between
	 * separators will be ignored.
	 */
    protected static function parse_options( $options ) {
		if( ! isset( $options ) ) {
			return array();
		}

		// now parse the options, and do posterior process on the created array
		$options = preg_split( '/\s*,\s*/', strtolower( $options ) );

		$ret = array();        
		foreach( $options as $option ) {
			$optPair = preg_split( '/\s*\=\s*/', $option, 2 );
			if( sizeof( $optPair ) == 1 ) {					
				$ret[ $optPair[0] ] = true;
			} else {
				$ret[ $optPair[0] ] = $optPair[1];
			}
		}
		return $ret;
    }
	
	/**
	 * same as self::arrayUnique() but without sanitazation, only for internal use.
	 */
	protected static function array_unique( array $array ) {
		// delete duplicate values
		$array = array_unique( $array );
		
		$values = array();
		foreach( $array as $key => $val ) {
			// don't put emty elements into the array
			if( $val !== '' ) {
				$values[] = $val;
			}
		}
		
		return $values;
	}


	##############
	# Used Hooks #
	##############
	
	static function onParserClearState( Parser &$parser ) {
		// remove all arrays to avoid conflicts with job queue or Special:Import or SMW semantic updates
		$parser->mExtArrayExtension = new self();
		return true;
	}


	####################################
	# Public functions for interaction #
	####################################
	#
	# public non-parser functions, accessible for
	# other extensions doing interactive stuff
	# with the Array extension.
	#
	
	/**
	 * Convenience function to return the 'ArrayExtension' extensions array store connected
	 * to a certain Parser object. Each parser has its own store which will be reset after
	 * a parsing process [Parser::parse()] has finished.
	 * 
	 * @since 2.0
	 * 
	 * @param Parser &$parser
	 * 
	 * @return ExtArrayExtension by reference so we still have the right object after 'ParserClearState'
	 */
	public static function &get( Parser &$parser ) {
		return $parser->mExtArrayExtension;
	}
	
	/**
	 * Returns an array identified by $arrayId. If it doesn't exist, null will be returned.
	 * 
	 * @since 2.0
	 * 
	 * @param string $arrayId
	 * 
	 * @return array|null
	 */
    function getArray( $arrayId ) {
		$arrayId = trim( $arrayId );
		if( $this->arrayExists( $arrayId ) ) {
			return $this->mArrays[ $arrayId ];
		}
		return null;
    }
	
	/**
	 * This will add a new array or overwrite an existing one. Values should be delliverd as array
	 * values in form of a string. The array will be sanitized internally.
	 * 
	 * @param string $arrayId
	 * @param array  $array
	 */
	public function createArray( $arrayId, $array = array() ) {
		$array = self::sanitizeArray( $array );
		$this->mArrays[ trim( $arrayId ) ] = $array;
	}
	
	/**
	 * Same as the public function createArray() but without sanitizing the array automatically.
	 * This is save and faster for internal usage, just be sure your array doesn't have un-trimmed
	 * values or non-numeric or negative array keys and no gaps between keys.
	 * 
	 * @param type $arrayId
	 * @param type $array 
	 */
	protected function setArray( $arrayId, $array = array() ) {
		$this->mArrays[ trim( $arrayId ) ] = $array;
	}
	
	/**
	 * Returns whether a certain array is defined within the page scope.
	 * 
	 * @param string $arrayId
	 * 
	 * @return boolean
	 */
	function arrayExists( $arrayId ) {
		return array_key_exists( trim( $arrayId ), $this->mArrays );
	}
	
	/**
	 * Returns a value within an array. If key or array do not exist, this will return null
	 * or another predefined default. $index can also be a negative value, in this case the
	 * value that far from the end of the array will be returned.
	 * 
	 * @since 2.0
	 * 
	 * @param string $arrayId
	 * @param string $index
	 * @param mixed  $default value to return in case the value doesn't exist. null by default.
	 * 
	 * @return string|null
	 */
    function getArrayValue( $arrayId, $index, $default = null ) {
		$arrayId = trim( $arrayId );		
		if( $this->arrayExists( $arrayId )
			&& $this->validate_array_index( $arrayId, $index, true )
			&& array_key_exists( $index, $this->mArrays[ $arrayId ] )			
		) {
			return $this->mArrays[ $arrayId ][ $index ];
		}
		else {
			return $default;
		}
    }


	/**
	 * Removes an existing array. If array didn't exist this will return false, otherwise true.
	 * 
	 * @since 2.0
	 * 
	 * @param string $arrayId
	 * 
	 * @return boolean whether the array existed and has been removed
	 */
	public function unsetArray( $arrayId ) {
		$arrayId = trim( $arrayId );
		if( $this->arrayExists( $arrayId ) ) {
			unset( $this->mArrays[ $arrayId ] );
			return true;
		}
		return false;
	}

	/**
	 * Rebuild the array and reorganize all keys, trim all values.
	 * All gaps between array items will be closed.
	 * 
	 * @since 2.0
	 * 
	 * @param array $arr array to be reorganized
	 * @return array
	 */
	public static function sanitizeArray( $array ) {
		$newArray = array();
		foreach( $array as $val ) {
			$newArray[] = trim( $val );
		}
		return $newArray;
	}
	
	/**
	 * Removes duplicate values and all empty elements from an array just like the
	 * arrayunique parser function would do it. The array will be sanitized internally.
	 * 
	 * @since 2.0
	 * 
	 * @param array $array
	 * 
	 * @return array
	 */
	public static function arrayUnique( array $array ) {
		$arr = $this->sanitizeArray( $arr );
		$array = self::array_unique( $array );
	}

	/**
	 * Decides for the given $pattern whether its a valid regular expression acceptable for
	 * ArrayExtension parser functions or not.
	 * 
	 * @param string $pattern regular expression including delimiters and optional flags
	 * 
	 * @return boolean
	 */
	static function isValidRegEx( $pattern ) {	
		if( ! preg_match( '/^([\\/\\|%]).*\\1[imsSuUx]*$/', $pattern ) ) {
			return false;
		}
		wfSuppressWarnings(); // instead of using the evil @ operator!
		$isValid = false !== preg_match( $pattern, ' ' ); // preg_match returns false on error
		wfRestoreWarnings();
		return $isValid;
	}
}
