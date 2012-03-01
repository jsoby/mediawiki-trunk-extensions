<?php
/**
 * Contains class which offers functionality for reading and updating Translate group
 * related metadata
 *
 * @file
 * @author Niklas Laxström
 * @author Santhosh Thottingal
 * @copyright Copyright © 2012, Niklas Laxström, Santhosh Thottingal
 * @license http://www.gnu.org/copyleft/gpl.html GNU General Public License 2.0 or later
 */

class TranslateMetadata {
	/**
	 * Get a metadata value for the given group and key.
	 * @param $group The group name
	 * @param $key Metadata key
	 * @return String
	 */
	public static function get( $group, $key ) {
		static $cache = null;
		if ( $cache === null ) {
			$dbr = wfGetDB( DB_SLAVE );
			$cache = $dbr->select( 'translate_metadata', '*', array(), __METHOD__ );
		}

		foreach ( $cache as $row ) {
			if ( $row->tmd_group === $group && $row->tmd_key === $key ) {
				return $row->tmd_value;
			}
		}

		return false;
	}

	/**
	 * Set a metadata value for the given group and metadata key. Updates the value if already existing.
	 * @param $group The group name
	 * @param $key Metadata key
	 * @param $value Metadata value
	 */
	public static function set( $group, $key, $value ) {
		$dbw = wfGetDB( DB_MASTER );
		$data = array( 'tmd_group' => $group, 'tmd_key' => $key, 'tmd_value' => $value );
		if ( $value === false ) {
			unset( $data['tmd_value'] );
			$dbw->delete( 'translate_metadata', $data );
		} else {
			$dbw->replace( 'translate_metadata', array( array( 'tmd_group', 'tmd_key' ) ), $data, __METHOD__ );
		}
	}

}
