<?php

/**
 * Parameter definition class.
 * 
 * @since 0.4
 * 
 * @file Parameter.php
 * @ingroup Validator
 * 
 * @author Jeroen De Dauw
 */
class Parameter {
	
	const TYPE_STRING = 'string';
	const TYPE_NUMBER = 'number';
	const TYPE_INTEGER = 'integer';
	const TYPE_FLOAT = 'float';
	const TYPE_BOOLEAN = 'boolean';
	const TYPE_CHAR = 'char';
	
	/**
	 * Indicates if the parameter value should be lowercased.
	 * 
	 * @since 0.4
	 * 
	 * @var boolean
	 */
	public $lowerCaseValue = true;
	
	/**
	 * Dependency list containing parameters that need to be handled before this one. 
	 * 
	 * @since 0.4
	 * 
	 * @var array
	 */			
	public $dependencies = array();	
	
	/**
	 * The default value for the parameter, or null when the parameter is required.
	 * 
	 * @since 0.4
	 * 
	 * @var mixed
	 */
	public $default;	
	
	/**
	 * List of formatting functions to shape the final form of the parameter value. 
	 * 
	 * @since 0.4
	 * 
	 * @var array
	 */			
	public $outputTypes = array();	
	
	/**
	 * The main name of the parameter.
	 * 
	 * @since 0.4
	 * 
	 * @var string
	 */
	protected $name;
	
	/**
	 * The type of the parameter, element of the Parameter::TYPE_ enum.
	 * 
	 * @since 0.4
	 * 
	 * @var string
	 */
	protected $type;
	
	/**
	 * List of aliases for the parameter name.
	 * 
	 * @since 0.4
	 * 
	 * @var array
	 */	
	protected $aliases;
	
	/**
	 * List of criteria the parameter value needs to hold against.
	 * 
	 * @since 0.4
	 * 
	 * @var array of ParameterCriterion
	 */		
	protected $criteria;
	
	/**
	 * The original parameter name as provided by the user. This can be the
	 * main name or an alias.
	 * 
	 * @since 0.4 
	 * 
	 * @var string
	 */
	protected $originalName;
	
	/**
	 * The original value as provided by the user. This is mainly retained for
	 * usage in error messages when the parameter turns out to be invalid.
	 * 
	 * @since 0.4 
	 * 
	 * @var string
	 */
	protected $originalValue;
	
	/**
	 * Keeps track of how many times the parameter has been set by the user.
	 * This is used to detect overrides and for figuring out a parameter is missing. 
	 * 
	 * @since 0.4 
	 * 
	 * @var integer
	 */
	protected $setCount = 0;
	
	/**
	 * Returns a new instance of Parameter by converting a Validator 3.x-style parameter array definition.
	 * Note: this method is for backward compatibility and should not be used in new code.
	 * 
	 * @since 0.4
	 * 
	 * @param string $name
	 * @param array $definition
	 * 
	 * @return Parameter
	 */
	public static function newFromArray( $name, array $definition ) {
		$isList = false;
		$delimiter = false;
		
		if ( array_key_exists( 'type', $definition ) ) {
			if ( is_array( $definition['type'] ) ) {
				if ( count( $definition['type'] ) > 1 ) {
					$isList = true;
					
					if ( count( $definition['type'] ) > 2 ) {
						$delimiter = $definition['type'][2];
					}
				}
				else {
					$type = $definition['type'][0];
				}
			}
			else {
				$type = $definition['type'];
			}
		}
		else {
			$type = 'string';
		}
		
		if ( array_key_exists( 'required', $definition ) && $definition['required'] ) {
			$default = null;
		}
		else {
			$default = array_key_exists( 'default', $definition ) ? $definition['default'] : '';
		}
		
		if ( $isList ) {
			$parameter = new ListParameter(
				$name,
				$delimiter,
				$type,
				$default,
				array_key_exists( 'aliases', $definition ) ? $definition['aliases'] : array(),
				array_key_exists( 'criteria', $definition ) ? $definition['criteria'] : array()			
			);
		}
		else {
			$parameter = new Parameter(
				$name,
				$type,
				$default,
				array_key_exists( 'aliases', $definition ) ? $definition['aliases'] : array(),
				array_key_exists( 'criteria', $definition ) ? $definition['criteria'] : array()
			);			
		}
		
		if ( array_key_exists( 'output-types', $definition ) ) {
			$types = array();
			
			for ( $i = 0, $c = count( $definition['output-types'] ); $i < $c; $i++ ) {
				if ( ! is_array( $definition['output-types'][$i] ) ) {
					$definition['output-types'][$i] = array( $definition['output-types'][$i] );
				}
				
				$types[$name] = $definition['output-types'][$i];
			}
			
			$parameter->outputTypes = $types ;
		}
		elseif ( array_key_exists( 'output-type', $definition ) ) {
			if ( ! is_array( $definition['output-type'] ) ) {
				$definition['output-type'] = array( $definition['output-type'] );
			}
			
			$parameter->outputTypes = array( $name => $definition['output-type'] );
		}
		
		if ( array_key_exists( 'tolower', $definition ) ) {
			$parameter->lowerCaseValue = (bool)$definition['tolower'];
		}
		
		if ( array_key_exists( 'dependencies', $definition ) ) {
			$parameter->dependencies = (array)$definition['dependencies'];
		}		
		
		return $parameter;
	}
	
	/**
	 * Constructor.
	 * 
	 * @since 0.4
	 * 
	 * @param string $name
	 * @param string $type
	 * @param mixed $default Use null for no default (which makes the parameter required)
	 * @param array $aliases
	 * @param array $criteria
	 */
	public function __construct( $name, $type = Parameter::TYPE_STRING, $default = null, array $aliases = array(), array $criteria = array() ) {
		$this->name = $name;
		$this->type = $type;
		$this->default = $default;
		$this->aliases = $aliases;
		$this->criteria = $criteria;
	}
	
	/**
	 * @since 0.4
	 * 
	 * @param string $paramName
	 * @param string $paramValue
	 */
	public function setUserValue( $paramName, $paramValue ) {
		if ( $this->setCount > 0 && true /* TODO: accept overridng? */ ) {
			// TODO: fatal error
		}
		else {
			$this->originalName = $paramName;
			$this->paramValue = $paramValue;
			
			$this->setCount++;			
		}
	}
	
	/**
	 * Validates the parameter value against it's criteria.
	 * 
	 * @since 0.4
	 */
	public function validate() {
		if ( $this->setCount == 0 ) {
			if ( $this->isRequired() ) {
				// TODO: fatal error
			}
			else {
				$this->validateCriteria( $this->default );
			}
		}
		else {
			$this->validateCriteria( $this->originalValue );
		}
	}
	
	protected function validateCriteria( $value ) {
		
	}
	
	/**
	 * Returns the parameters main name.
	 * 
	 * @since 0.4
	 * 
	 * @return string
	 */			
	public function getName() {
		return $this->name;
	}
	
	/**
	 * Returns if the parameter is a required one or not.
	 * 
	 * @since 0.4
	 * 
	 * @return boolean
	 */		
	public function isRequired() {
		return is_null( $this->default );
	}
	
	/**
	 * Returns if the parameter is a list or not.
	 * 
	 * @since 0.4
	 * 
	 * @return boolean
	 */		
	public function isList() {
		return false;
	}
	
	/**
	 * Returns the list delimeter.
	 * 
	 * @since 0.4
	 * 
	 * @return string
	 */
	public function getListDelimeter() {
		if ( $this->isList() ) {
			return count( $this->type ) > 1 ? $this->type[1] : self::$defaultListDelimeter;
		}
		else {
			return false;
		}
	}
	
	/**
	 * Returns the parameter criteria.
	 * 
	 * @since 0.4
	 * 
	 * @return array of ParameterCriterion
	 */	
	public function getCriteria() {
		return array_merge( $this->getCriteriaForType(), $this->criteria ); 
	}
	
	/**
	 * Gets the criteria for the type of the parameter.
	 * 
	 * @since 0.4
	 * 
	 * @return array
	 */
	protected function getCriteriaForType() {
		$criteria = array();
		
		/* TODO
		switch( $this->type ) {
			case TYPE_INTEGER:
				$criteria[] = 'is_integer';
				break;
			case TYPE_FLOAT:
				$criteria[] = 'is_float';
				break;
			case TYPE_NUMBER: // Note: This accepts non-decimal notations! 
				$criteria[] = 'is_numeric';
				break;
			case TYPE_BOOLEAN:
				// TODO: work with list of true and false values. 
				// TODO: i18n
				$criteria[] =  array( 'in_array' => array( 'yes', 'no', 'on', 'off' ) );
				break;
			case TYPE_CHAR:
				$criteria[] = array( 'has_length' => array( 1, 1 ) );
				break;
			case TYPE_STRING: default:
				// No extra criteria for strings.
				break;
		}
		*/

		return $criteria;
	}
	
	/**
	 * Returns the criteria that apply to the list as a whole.
	 * 
	 * @since 0.4
	 * 
	 * @return array
	 */		
	public function getListCriteria() {
		// TODO
		return array();
	}
	
	/**
	 * Returns the parameter name aliases.
	 * 
	 * @since 0.4
	 * 
	 * @return array
	 */
	public function getAliases() {
		return $this->aliases;
	}
	
	/**
	 * Returns if the parameter has a certain alias.
	 * 
	 * @since 0.4
	 * 
	 * @param string $alias
	 * 
	 * @return boolean
	 */
	public function hasAlias( $alias ) {
		return in_array( $alias, $this->getAliases() );
	}
	
}