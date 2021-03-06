<?php

/**
 * Action for deleting EPPageObject items.
 *
 * @since 0.1
 *
 * @file EPDeleteAction.php
 * @ingroup EducationProgram
 * @ingroup Action
 *
 * @licence GNU GPL v3+
 * @author Jeroen De Dauw < jeroendedauw@gmail.com >
 */
class EPDeleteAction extends EPAction {

	/**
	 * (non-PHPdoc)
	 * @see Action::getName()
	 */
	public function getName() {
		return 'delete';
	}
	
	/**
	 * (non-PHPdoc)
	 * @see Action::getDescription()
	 */
	protected function getDescription() {
		return $this->msg( 'backlinksubtitle' )->rawParams( Linker::link( $this->getTitle() ) );
	}
	
	/**
	 * (non-PHPdoc)
	 * @see Action::getRestriction()
	 */
	public function getRestriction() {
		$this->page->getEditRight();
	}

	/**
	 * (non-PHPdoc)
	 * @see FormlessAction::onView()
	 */
	public function onView() {
		$this->getOutput()->setPageTitle( $this->getPageTitle() );

		$object = $this->page->getTable()->get( $this->getTitle()->getText() );

		if ( $object === false ) {
			$this->getOutput()->addWikiMsg( $this->prefixMsg( 'none' ), $this->getTitle()->getText() );
			$this->getOutput()->setSubtitle( '' );
		}
		else {
			$req = $this->getRequest();
			
			if ( $req->wasPosted() && $this->getUser()->matchEditToken( $req->getText( 'deleteToken' ), $this->getSalt() ) ) {
				$success = $this->doDelete( $object );
				
				if ( $success ) {
					$title = SpecialPage::getTitleFor( $this->page->getListPage() );
					$query = array( 'deleted' => $this->getTitle()->getText() ); // TODO: handle
				}
				else {
					$title = $this->getTitle();
					$query = array( 'delfailed' => '1' ); // TODO: handle
				}
				
				$this->getOutput()->redirect( $title->getLocalURL( $query ) );
			}
			else {
				$this->displayForm( $object );
			}
		}

		return '';
	}
	
	/**
	 * Does the actual deletion action.
	 * 
	 * @since 0.1
	 * 
	 * @param EPPageObject $object
	 * 
	 * @return boolean Success indicator
	 */
	protected function doDelete( EPPageObject $object ) {
		$revAction = new EPRevisionAction();
		
		$revAction->setUser( $this->getUser() );
		$revAction->setComment( $this->getRequest()->getText( 'summary', '' ) );
		$revAction->setDelete( true );
		
		return $object->revisionedRemove( $revAction );
	}

	/**
	 * Display the deletion form for the provided EPPageObject.
	 * 
	 * @since 0.1
	 * 
	 * @param EPPageObject $object
	 */
	protected function displayForm( EPPageObject $object ) {
		$out = $this->getOutput();
		
		$out->addModules( 'ep.formpage' );

		$out->addWikiMsg( $this->prefixMsg( 'text' ), $object->getField( 'name' ) );

		$out->addHTML( Html::openElement(
			'form',
			array(
				'method' => 'post',
				'action' => $this->getTitle()->getLocalURL( array( 'action' => 'delete' ) ),
			)
		) );

		$out->addHTML( '&#160;' . Xml::inputLabel(
			wfMsg( $this->prefixMsg( 'summary' ) ),
			'summary',
			'summary',
			65,
			false,
			array(
				'maxlength' => 250,
				'spellcheck' => true,
			)
		) );

		$out->addHTML( '<br />' );

		$out->addHTML( Html::input(
			'delete',
			wfMsg( $this->prefixMsg( 'delete-button' ) ),
			'submit',
			array(
				'class' => 'ep-delete',
			)
		) );

		$out->addElement(
			'button',
			array(
				'id' => 'cancelDelete',
				'class' => 'ep-delete-cancel ep-cancel',
				'data-target-url' => $this->getTitle()->getLocalURL(),
			),
			wfMsg( $this->prefixMsg( 'cancel-button' ) )
		);

		$out->addHTML( Html::hidden( 'deleteToken', $this->getUser()->getEditToken( $this->getSalt() ) ) );

		$out->addHTML( '</form>' );
	}
	
	/**
	 * Returns the page title.
	 *
	 * @since 0.1
	 *
	 * @return string
	 */
	protected function getPageTitle() {
		return wfMsgExt(
			$this->prefixMsg( 'title' ),
			'parsemag',
			$this->getTitle()->getText()
		);
	}

}