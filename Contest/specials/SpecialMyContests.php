<?php

/**
 * List of contests for a user. 
 * 
 * @since 0.1
 * 
 * @file SpecialMyContests.php
 * @ingroup Contest
 * 
 * @licence GNU GPL v3 or later
 * @author Jeroen De Dauw < jeroendedauw@gmail.com >
 */
class SpecialMyContests extends SpecialContestPage {
	
	/**
	 * Constructor.
	 * 
	 * @since 0.1
	 */
	public function __construct() {
		parent::__construct( 'MyContests', 'contestparticipant' );
	}
	
	/**
	 * Main method.
	 * 
	 * @since 0.1
	 * 
	 * @param string $arg
	 */
	public function execute( $subPage ) {
		$subPage = str_replace( '_', ' ', $subPage );
		
		if ( !parent::execute( $subPage ) ) {
			return;
		}
		
		if ( $this->getRequest()->wasPosted() && $this->getUser()->matchEditToken( $this->getRequest()->getVal( 'wpEditToken' ) ) ) {
			$contestant = ContestContestant::s()->selectRow( null, array( 'id' => $this->getRequest()->getInt( 'wpcontestant-id' ) ) );
			$this->showSubmissionPage( $contestant );
		}
		else {
			if ( $subPage == '' ) {
				$this->displayContestsOverview();
			}
			else {
				$this->handleSubmissionView( $subPage );
			}
		}
	}
	
	protected function displayContestsOverview() {
		$contestants = ContestContestant::s()->select( 
			array( 'id', 'contest_id', 'challenge_id' ),
			array( 'user_id' => $this->getUser()->getId() )
		);
		
		$contestantCount = count( $contestants );
		
		if ( $contestantCount == 0 ) {
			$this->getOutput()->addWikiMsg( 'contest-mycontests-no-contests' );
		}
		else if ( $contestantCount == 1 ) {
			$contest =  $contestants[0]->getContest( array( 'status', 'name' ) );
			
			if ( $contest->getField( 'status' ) == Contest::STATUS_ACTIVE ) {
				$this->getOutput()->redirect( $this->getTitle( $contest->getField( 'name' ) )->getLocalURL() );
			}
			else {
				$this->displayContestsTable( $contestants );
			}
		}
		else {
			$this->displayContestsTable( $contestants );
		}
	}
	
	/**
	 * Displays a list of contests the user participates or participated in,
	 * together with their user specific choices such as the contest challenge.
	 * 
	 * @since 0.1
	 * 
	 * @param array $contestants
	 */
	protected function displayContestsTable( array /* of ContestContestant */ $contestants ) {
		$user = $this->getUser();
		
		$running = array();
		$passed = array();
		$contests = array();
		
		foreach ( $contestants as $contestant ) {
			$contest = $contestant->getContest();
			
			if ( $contest->getField( 'status' ) == Contest::STATUS_ACTIVE ) {
				$running[] = $contestant;
			}
			else if ( $contest->getField( 'status' ) == Contest::STATUS_FINISHED ) {
				$passed[] = $contestant;
			}
			
			$contests[$contest->getId()] = $contest;
		}
		
		if ( count( $running ) > 0 ) {
			$this->displayRunningContests( $running, $contests );
		}
		
		if ( count( $passed ) > 0 ) {
			//$this->displayPassedContests( $passed, $contests );
		}
	}
	
	protected function displayRunningContests( array /* of ContestContestant */ $contestants, array /* Contest */ $contests ) {
		$out = $this->getOutput();
		
		$out->addHTML( Html::element( 'h2', array(), wfMsg( 'contest-mycontests-active-header' ) ) );
		$out->addHTML( Html::element( 'p', array(), wfMsg( 'contest-mycontests-active-text' ) ) );
		
		$out->addHTML( Xml::openElement(
			'table',
			array( 'class' => 'wikitable sortable' )
		) );
		
		$headers = array(
			Html::element( 'th', array(), wfMsg( 'contest-mycontests-header-contest' ) ),
			Html::element( 'th', array(), wfMsg( 'contest-mycontests-header-challenge' ) ),
		);
		
		$out->addHTML( '<thead><tr>' . implode( '', $headers ) . '</tr></thead>' );
		
		$out->addHTML( '<tbody>' );
		
		foreach ( $contestants as $contestant ) {
			$contest = $contests[$contestant->getField( 'contest_id' )];
			
			$challengeTitle = ContestChallenge::s()->selectRow(
				'title',
				array( 'id' => $contestant->getField( 'challenge_id' ) )
			)->getField( 'title' );
			
			$fields = array();
			
			$fields[] = Html::rawElement( 'td', array( 'data-sort-value' => $contest->getField( 'name' ) ), Html::rawElement(
				'a',
				array(
					'href' => SpecialPage::getTitleFor( 'MyContests', $contest->getField( 'name' ) )->getLocalURL()
				),
				htmlspecialchars( $contest->getField( 'name' ) )
			) );
			
			$fields[] = Html::element( 'td', array(), $challengeTitle );
			
			$out->addHTML( '<tr>' . implode( '', $fields ) . '</tr>' );
		}
		
		$out->addHTML( '</tbody>' );
		$out->addHTML( '</table>' );
	}
	
	protected function displayPassedContests( array /* of ContestContestant */ $contestants, array /* Contest */ $contests ) {
		$out = $this->getOutput();
		
		$out->addHTML( Html::element( 'h2', array(), wfMsg( 'contest-mycontests-finished-header' ) ) );
		$out->addHTML( Html::element( 'h2', array(), wfMsg( 'contest-mycontests-finished-text' ) ) );
		
		// TODO
	}
	
	/**
	 * Handle view requests for the page.
	 * 
	 * @since 0.1
	 * 
	 * @param string $contestName
	 */
	protected function handleSubmissionView( $contestName ) {
		$out = $this->getOutput();
		
		$contest = Contest::s()->selectRow( null, array( 'name' => $contestName ) );
		
		if ( $contest === false ) {
			$this->showError( 'contest-submission-unknown' );
			$out->addHTML( '<br /><br /><br /><br />' );
			$out->returnToMain();
		}
		else {
			switch ( $contest->getField( 'status' ) ) {
				case Contest::STATUS_ACTIVE:
					$this->handleEnabledPage( $contest );	
					break;
				case Contest::STATUS_FINISHED:
					$this->showWarning( 'contest-submission-finished' );
					$out->addHTML( '<br /><br /><br /><br />' );
					$out->returnToMain();	
					break;
			}
		}
	}
	
	/**
	 * Handle page request when the contest is enabled.
	 * 
	 * @since 0.1
	 * 
	 * @param Contest $contest
	 */
	protected function handleEnabledPage( Contest $contest ) {
		// Check if the user is already a contestant in this contest.
		// If he is, reirect to submission page, else show signup form.
		$contestant = ContestContestant::s()->selectRow(
			null,
			array(
				'contest_id' => $contest->getId(),
				'user_id' => $this->getUser()->getId()
			)
		);
		
		if ( $contestant === false ) {
			$this->getOutput()->redirect( SpecialPage::getTitleFor( 'ContestSignup', $contest->getField( 'name' ) )->getLocalURL() );
		}
		else {
			$contestant->setContest( $contest );
			$this->showSubmissionPage( $contestant );
		}
	}
	
	/**
	 * Show the page content.
	 * 
	 * @since 0.1
	 * 
	 * @param ContestContestant $contestant
	 */
	protected function showSubmissionPage( ContestContestant $contestant ) {
		$this->getOutput()->setPageTitle( $contestant->getContest()->getField( 'name' ) );
		$this->getOutput()->addWikiMsg( 'contest-submission-header', $contestant->getContest()->getField( 'name' ) );
		
		$form = new HTMLForm( $this->getFormFields( $contestant ), $this->getContext() );
		
		$form->setSubmitCallback( array( $this, 'handleSubmission' ) );
		$form->setSubmitText( wfMsg( 'contest-submission-submit' ) );
		
		if( $form->show() ){
			$this->getOutput()->redirect( $this->getTitle( $contestant->getContest()->getField( 'name' ) )->getLocalURL() );
		}
		else {
			$this->getOutput()->addModules( 'contest.special.submission' );
		}
	}
	
	/**
	 * Handle form submission.
	 * 
	 * @since 0.1
	 * 
	 * @return true|array
	 */
	public function handleSubmission( array $data ) {
		$user = $this->getUser();
		
		$user->setEmail( $data['contestant-email'] );
		$user->setRealName( $data['contestant-realname'] );
		$user->saveSettings();
		
		$contestant = new ContestContestant( array(
			'id' => $data['contestant-id'],
		
			'full_name' => $data['contestant-realname'],
			'email' => $data['contestant-email'],
		
			'country' => $data['contestant-country'],
			'volunteer' => $data['contestant-volunteer'],
			'wmf' => $data['contestant-wmf'],
			'cv' => $data['contestant-cv'],
		
			'submission' => trim( $data['contestant-submission'] ),
		) );
		
		return $contestant->writeToDB();
	}
	
	/**
	 * Gets the field definitions for the form.
	 * 
	 * @since 0.1
	 * 
	 * @param ContestContestant $contest
	 */
	protected function getFormFields( ContestContestant $contestant ) {
		$fields = array();
		
		$user = $this->getUser();
		
		$fields['contestant-id'] = array(
			'type' => 'hidden',
			'default' => $contestant->getId(),
			'id' => 'contest-id',
		);
		
		$fields['contestant-realname'] = array(
			'type' => 'text',
			'default' => $user->getRealName(),
			'label-message' => 'contest-signup-realname',
			'required' => true,
			'validation-callback' => array( __CLASS__, 'validateNameField' )
		);
		
		$fields['contestant-email'] = array(
			'type' => 'text',
			'default' => $user->getEmail(),
			'label-message' => 'contest-signup-email',
			'required' => true,
			'validation-callback' => array( __CLASS__, 'validateEmailField' )
		);
		
		$fields['contestant-country'] = array(
			'type' => 'select',
			'default' => $contestant->getField( 'country' ),
			'label-message' => 'contest-signup-country',
			'required' => true,
			'options' => ContestContestant::getCountriesForInput()
		);
		
		$fields['contestant-volunteer'] = array(
			'type' => 'check',
			'default' => $contestant->getField( 'volunteer' ),
			'label-message' => 'contest-signup-volunteer',
		);
		
		$fields['contestant-wmf'] = array(
			'type' => 'check',
			'default' => $contestant->getField( 'wmf' ),
			'label-message' => 'contest-signup-wmf',
		);
		
		$hasWMF = $contestant->hasField( 'wmf' );
		
		$fields['contestant-cv'] = array(
			'type' => $hasWMF && $contestant->getField( 'wmf' ) ? 'text' : 'hidden',
			'default' => $hasWMF ? $contestant->getField( 'cv' ) : '',
			'label-message' => 'contest-signup-cv',
			'validation-callback' => array( __CLASS__, 'validateCVField' )
		);
		
		// TODO: this needs UI work to explain to the user what they can enter here,
		// and possibly some pop-up thing where they can just enter their
		// user and project, after which we just find the latest rev and store that url.
		$fields['contestant-submission'] = array(
			'type' => 'text',
			'default' => $contestant->getField( 'submission' ),
			'label-message' => 'contest-submission-submission',
			'validation-callback' => array( __CLASS__, 'validateSubmissionField' )
		);
		
		return $fields;
	}
	
	/**
	 * HTMLForm field validation-callback for name field.
	 * 
	 * @since 0.1
	 * 
	 * @param $value String
	 * @param $alldata Array
	 * 
	 * @return true|string
	 */
	public static function validateNameField( $value, $alldata = null ) {
		if ( strlen( $value ) < 2 ) {
			return wfMsg( 'contest-signup-invalid-name' );
		}
		
		return true;
	}
	
	/**
	 * HTMLForm field validation-callback for email field.
	 * 
	 * @since 0.1
	 * 
	 * @param $value String
	 * @param $alldata Array
	 * 
	 * @return true|string
	 */
	public static function validateEmailField( $value, $alldata = null ) {
		if ( !Sanitizer::validateEmail( $value ) ) {
			return wfMsg( 'contest-signup-invalid-email' );
		}
		
		return true;
	}
	
	/**
	 * HTMLForm field validation-callback for cv field.
	 * 
	 * @since 0.1
	 * 
	 * @param $value String
	 * @param $alldata Array
	 * 
	 * @return true|string
	 */
	public static function validateCVField( $value, $alldata = null ) {
		if ( trim( $value ) !== '' && filter_var( $value, FILTER_VALIDATE_URL ) === false ) {
			return wfMsg( 'contest-signup-invalid-cv' );
		}
		
		return true;
	}

	/**
	 * HTMLForm field validation-callback for the submissiom field.
	 * Warning: regexes used! o_O
	 * 
	 * TODO: add support for other services such as Gitorious?
	 * 
	 * @since 0.1
	 * 
	 * @param $value String
	 * @param $alldata Array
	 * 
	 * @return true|string
	 */
	public static function validateSubmissionField( $value, $alldata = null  ) {
		$value = trim( $value );
		
		if ( $value == '' ) {
			return true;
		}
		
		$allowedPatterns = array(
			// GitHub URLs such as https://github.com/JeroenDeDauw/smwcon/tree/f9b26ec4ba1101b1f5d4ef76b7ae6ad3dabfb53b
			'@^https://github\.com/[a-zA-Z0-9-]+/[a-zA-Z0-9_-]+/tree/[a-zA-Z0-9]{40}$@i'
		);
		
		foreach ( $allowedPatterns as $pattern ) {
			if ( preg_match( $pattern, $value ) ) {
				return true;
			}
		}
		
		return wfMsg( 'contest-submission-invalid-url' );
	}
	
}
