<?php

/**
 * Class representing a single course.
 *
 * @since 0.1
 *
 * @file EPCourse.php
 * @ingroup EducationProgram
 *
 * @licence GNU GPL v3 or later
 * @author Jeroen De Dauw < jeroendedauw@gmail.com >
 */
class EPCourse extends EPDBObject {

	/**
	 * Field for caching the linked master course.
	 *
	 * @since 0.1
	 * @var EPMC|false
	 */
	protected $mc = false;

	/**
	 * Field for caching the linked org.
	 *
	 * @since 0.1
	 * @var EPOrg|false
	 */
	protected $org = false;

	/**
	 * Cached array of the linked EPStudent objects.
	 *
	 * @since 0.1
	 * @var array|false
	 */
	protected $students = false;

	/**
	 * Returns a list of statuses a term can have.
	 * Keys are messages, values are identifiers.
	 *
	 * @since 0.1
	 *
	 * @return array
	 */
	public static function getStatuses() {
		return array(
			wfMsg( 'ep-course-status-passed' ) => 'passed',
			wfMsg( 'ep-course-status-current' ) => 'current',
			wfMsg( 'ep-course-status-planned' ) => 'planned',
		);
	}

	/**
	 * Returns the message for the provided status identifier.
	 *
	 * @since 0.1
	 *
	 * @param string $status
	 *
	 * @return string
	 */
	public static function getStatusMessage( $status ) {
		static $map = null;

		if ( is_null( $map ) ) {
			$map = array_flip( self::getStatuses() );
		}

		return $map[$status];
	}

	/**
	 * @see parent::getFieldTypes
	 *
	 * @since 0.1
	 *
	 * @return array
	 */
	protected static function getFieldTypes() {
		return array(
			'id' => 'id',
			'mc_id' => 'id',
			'org_id' => 'id',

			'year' => 'int',
			'start' => 'str', // TS_MW
			'end' => 'str', // TS_MW
			'description' => 'str',
			'token' => 'str',
			'online_ambs' => 'array',
			'campus_ambs' => 'array',
		
			'students' => 'int',
		);
	}

	/**
	 * (non-PHPdoc)
	 * @see EPDBObject::getDefaults()
	 */
	public static function getDefaults() {
		return array(
			'year' => substr( wfTimestamp( TS_MW ), 0, 4 ),
			'start' => wfTimestamp( TS_MW ),
			'end' => wfTimestamp( TS_MW ),
			'description' => '',
			'token' => '',
			'online_ambs' => array(),
			'campus_ambs' => array(),
		
			'students' => 0,
		);
	}

	/**
	 * Returns the students enrolled in this course.
	 *
	 * @since 0.1
	 *
	 * @param string|array|null $fields
	 * @param array $conditions
	 *
	 * @return array of EPStudent
	 */
	protected function doGetStudents( $fields, array $conditions ) {
		$conditions[] = array( array( 'ep_courses', 'id' ), $this->getId() );

		return EPStudent::select(
			$fields,
			$conditions,
			array(),
			array(
				'ep_students_per_term' => array( 'INNER JOIN', array( array( array( 'ep_students_per_course', 'student_id' ), array( 'ep_students', 'id' ) ) ) ),
				'ep_courses' => array( 'INNER JOIN', array( array( array( 'ep_students_per_course', 'course_id' ), array( 'ep_courses', 'id' ) ) ) )
			)
		);
	}

	/**
	 * Returns the students enrolled in this course.
	 * Caches the result when no conditions are provided and all fields are selected.
	 *
	 * @since 0.1
	 *
	 * @param string|array|null $fields
	 * @param array $conditions
	 *
	 * @return array of EPStudent
	 */
	public function getStudents( $fields = null, array $conditions = array() ) {
		if ( count( $conditions ) !== 0 ) {
			return $this->doGetStudents( $fields, $conditions );
		}

		if ( $this->students === false ) {
			$students = $this->doGetStudents( $fields, $conditions );

			if ( is_null( $fields ) ) {
				$this->students = $students;
			}

			return $students;
		}
		else {
			return $this->students;
		}
	}

	/**
	 * (non-PHPdoc)
	 * @see EPDBObject::loadSummaryFields()
	 */
	public function loadSummaryFields( $summaryFields = null ) {
		if ( is_null( $summaryFields ) ) {
			$summaryFields = array( 'org_id', 'students' );
		}
		else {
			$summaryFields = (array)$summaryFields;
		}

		$fields = array();

		if ( in_array( 'org_id', $summaryFields ) ) {
			$fields['org_id'] = $this->getCourse( 'org_id' )->getField( 'org_id' );
		}
		
		if ( in_array( 'students', $summaryFields ) ) {
			$fields['students'] = wfGetDB( DB_SLAVE )->select(
				'ep_students_per_term',
				'COUNT(*) AS rowcount',
				array( 'spt_term_id' => $this->getId() )
			);

			$fields['students'] = $fields['students']->fetchObject()->rowcount;
		}

		$this->setFields( $fields );
	}

	/**
	 * (non-PHPdoc)
	 * @see EPDBObject::insertIntoDB()
	 */
	protected function insertIntoDB() {
		if ( !$this->hasField( 'org_id' ) ) {
			$this->setField( 'org_id', $this->getCourse( 'org_id' )->getField( 'org_id' ) );
		}

		$success = parent::insertIntoDB();

		if ( $success && $this->updateSummaries ) {
			EPOrg::updateSummaryFields( array( 'terms', 'active' ), array( 'id' => $this->getField( 'org_id' ) ) );
			EPMC::updateSummaryFields( 'active', array( 'id' => $this->getField( 'mc_id' ) ) );
		}

		return $success;
	}

	/**
	 * (non-PHPdoc)
	 * @see EPDBObject::removeFromDB()
	 */
	public function removeFromDB() {
		$id = $this->getId();

		if ( $this->updateSummaries ) {
			$this->loadFields( array( 'org_id', 'mc_id' ) );
			$orgId = $this->getField( 'org_id' );
			$courseId = $this->getField( 'mc_id' );
		}

		$success = parent::removeFromDB();

		if ( $success && $this->updateSummaries ) {
			EPCourse::updateSummaryFields( 'students', array( 'id' => $courseId ) );
			EPOrg::updateSummaryFields( array( 'terms', 'students', 'active' ), array( 'id' => $orgId ) );
		}

		if ( $success ) {
			$success = wfGetDB( DB_MASTER )->delete( 'ep_students_per_term', array( 'spt_term_id' => $id ) ) && $success;
		}

		return $success;
	}

	/**
	 * (non-PHPdoc)
	 * @see EPDBObject::updateInDB()
	 */
	protected function updateInDB() {
		if ( $this->updateSummaries ) {
			$oldOrgId = $this->hasField( 'org_id' ) ? self::selectFieldsRow( 'org_id', array( 'id' => $this->getId() ) ) : false;
			$oldCourseId = $this->hasField( 'mc_id' ) ? self::selectFieldsRow( 'mc_id', array( 'id' => $this->getId() ) ) : false;
		}

		if ( $this->hasField( 'mc_id' ) ) {
			$oldCourseId = self::selectFieldsRow( 'mc_id', array( 'id' => $this->getId() ) );

			if ( $this->getField( 'mc_id' ) !== $oldCourseId ) {
				$this->setField( 'org_id', EPCourse::selectFieldsRow( 'org_id', array( 'id' => $this->getField( 'mc_id' ) ) ) );
			}
		}

		$success = parent::updateInDB();

		if ( $this->updateSummaries && $success ) {
			if ( $oldOrgId !== false && $oldOrgId !== $this->getField( 'org_id' ) ) {
				$conds = array( 'id' => array( $oldOrgId, $this->getField( 'org_id' ) ) );
				EPOrg::updateSummaryFields( array( 'courses', 'students', 'active' ), $conds );
			}

			if ( $oldCourseId !== false && $oldCourseId !== $this->getField( 'org_id' ) ) {
				$conds = array( 'id' => array( $oldCourseId, $this->getField( 'mc_id' ) ) );
				EPCourse::updateSummaryFields( array( 'active', 'students' ), $conds );
			}
		}

		return $success;
	}

	/**
	 * Returns the master course associated with this course.
	 *
	 * @since 0.1
	 *
	 * @param string|array|null $fields
	 *
	 * @return EPMC
	 */
	public function getMasterCourse( $fields = null ) {
		if ( $this->mc === false ) {
			$this->mc = EPMC::selectRow( $fields, array( 'id' => $this->loadAndGetField( 'mc_id' ) ) );
		}

		return $this->mc;
	}

	/**
	 * Returns the org associated with this term.
	 *
	 * @since 0.1
	 *
	 * @param string|array|null $fields
	 *
	 * @return EPOrg
	 */
	public function getOrg( $fields = null ) {
		if ( $this->org === false ) {
			$this->org = EPOrg::selectRow( $fields, array( 'id' => $this->loadAndGetField( 'org_id' ) ) );
		}

		return $this->org;
	}

	/**
	 * Display a pager with terms.
	 *
	 * @since 0.1
	 *
	 * @param IContextSource $context
	 * @param array $conditions
	 */
	public static function displayPager( IContextSource $context, array $conditions = array() ) {
		$pager = new EPCoursePager( $context, $conditions );

		if ( $pager->getNumRows() ) {
			$context->getOutput()->addHTML(
				$pager->getFilterControl() .
				$pager->getNavigationBar() .
				$pager->getBody() .
				$pager->getNavigationBar() .
				$pager->getMultipleItemControl()
			);
		}
		else {
			$context->getOutput()->addHTML( $pager->getFilterControl( true ) );
			$context->getOutput()->addWikiMsg( 'ep-courses-noresults' );
		}
	}

	/**
	 * Adds a control to add a term org to the provided context.
	 * Additional arguments can be provided to set the default values for the control fields.
	 *
	 * @since 0.1
	 *
	 * @param IContextSource $context
	 * @param array $args
	 *
	 * @return boolean
	 */
	public static function displayAddNewControl( IContextSource $context, array $args ) {
		if ( !$context->getUser()->isAllowed( 'ep-term' ) ) {
			return false;
		}

		$out = $context->getOutput();

		$out->addHTML( Html::openElement(
			'form',
			array(
				'method' => 'post',
				'action' => SpecialPage::getTitleFor( 'EditTerm' )->getLocalURL(),
			)
		) );

		$out->addHTML( '<fieldset>' );

		$out->addHTML( '<legend>' . wfMsgHtml( 'ep-courses-addnew' ) . '</legend>' );

		$out->addHTML( Html::element( 'p', array(), wfMsg( 'ep-courses-namedoc' ) ) );

		$out->addHTML( Html::element( 'label', array( 'for' => 'newmc' ), wfMsg( 'ep-courses-newmastercourse' ) ) );

		$select = new XmlSelect(
			'newmc',
			'newmc',
			array_key_exists( 'mc', $args ) ? $args['mc'] : false
		);

		$select->addOptions( EPCourse::getCourseOptions() );
		$out->addHTML( $select->getHTML() );

		$out->addHTML( '&#160;' . Xml::inputLabel( wfMsg( 'ep-courses-newyear' ), 'newyear', 'newyear', 10 ) );

		$out->addHTML( '&#160;' . Html::input(
			'addnewcourse',
			wfMsg( 'ep-terms-add' ),
			'submit'
		) );

		$out->addHTML( Html::hidden( 'isnew', 1 ) );

		$out->addHTML( '</fieldset></form>' );

		return true;
	}

	/**
	 * Adds a control to add a new term to the provided context
	 * or show a message if this is not possible for some reason.
	 *
	 * @since 0.1
	 *
	 * @param IContextSource $context
	 * @param array $args
	 */
	public static function displayAddNewRegion( IContextSource $context, array $args = array() ) {
		if ( EPCourse::has() ) {
			EPCourse::displayAddNewControl( $context, $args );
		}
		elseif ( $context->getUser()->isAllowed( 'ep-course' ) ) {
			$context->getOutput()->addWikiMsg( 'ep-courses-addcoursefirst' );
		}
	}

	/**
	 * Gets the amount of days left, rounded up to the nearest integer.
	 *
	 * @since 0.1
	 *
	 * @return integer
	 */
	public function getDaysLeft() {
		$timeLeft = (int)wfTimestamp( TS_UNIX, $this->getField( 'end' ) ) - time();
		return (int)ceil( $timeLeft / ( 60 * 60 * 24 ) );
	}

	/**
	 * Gets the amount of days since term start, rounded up to the nearest integer.
	 *
	 * @since 0.1
	 *
	 * @return integer
	 */
	public function getDaysPassed() {
		$daysPassed = time() - (int)wfTimestamp( TS_UNIX, $this->getField( 'start' ) );
		return (int)ceil( $daysPassed / ( 60 * 60 * 24 ) );
	}

	/**
	 * Returns the status of the course.
	 *
	 * @since 0.1
	 *
	 * @return string
	 */
	public function getStatus() {
		if ( $this->getDaysLeft() <= 0 ) {
			$status = 'passed';
		}
		elseif ( $this->getDaysPassed() <= 0 ) {
			$status = 'planned';
		}
		else {
			$status = 'current';
		}

		return $status;
	}

	/**
	 * Get a link to Special:Course/id.
	 *
	 * @since 0.1
	 *
	 * @return string
	 */
	public function getLink() {
		return Linker::linkKnown(
			SpecialPage::getTitleFor( 'Course', $this->getId() ),
			htmlspecialchars( $this->getId() )
		);
	}

}
