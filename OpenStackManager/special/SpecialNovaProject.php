<?php
class SpecialNovaProject extends SpecialNova {

	var $userNova, $adminNova;

	function __construct() {
		parent::__construct( 'NovaProject', 'manageproject' );

		global $wgOpenStackManagerNovaAdminKeys;

		$this->userLDAP = new OpenStackNovaUser();
		$adminCredentials = $wgOpenStackManagerNovaAdminKeys;
		$this->adminNova = new OpenStackNovaController( $adminCredentials );
	}

	function execute( $par ) {
		global $wgRequest, $wgUser;

		if ( !$this->userCanExecute( $wgUser ) ) {
			$this->displayRestrictionError();
			return false;
		}

		if ( ! $wgUser->isLoggedIn() ) {
			$this->notLoggedIn();
			return false;
		}

		$action = $wgRequest->getVal( 'action' );
		if ( $action == "create" ) {
			$this->createProject();
		} else if ( $action == "delete" ) {
			$this->deleteProject();
		} else if ( $action == "addmember" ) {
			$this->addMember();
		} else if ( $action == "deletemember" ) {
			$this->deleteMember();
		} else {
			$this->listProjects();
		}
	}

	function createProject() {
		global $wgRequest, $wgOut;

		$this->setHeaders();
		$wgOut->setPagetitle( wfMsg( 'openstackmanager-createproject' ) );

		$projectInfo = Array();
		$projectInfo['projectname'] = array(
			'type' => 'text',
			'label-message' => 'openstackmanager-projectname',
			'default' => '',
			'section' => 'project/info',
		);

		$projectInfo['action'] = array(
			'type' => 'hidden',
			'default' => 'create',
		);

		$projectForm = new SpecialNovaProjectForm( $projectInfo, 'openstackmanager-novaproject' );
		$projectForm->setTitle( SpecialPage::getTitleFor( 'NovaProject' ) );
		$projectForm->setSubmitID( 'novaproject-form-createprojectsubmit' );
		$projectForm->setSubmitCallback( array( $this, 'tryCreateSubmit' ) );
		$projectForm->show();

		return true;
	}

	function addMember() {
		global $wgRequest, $wgOut;

		$this->setHeaders();
		$wgOut->setPagetitle( wfMsg( 'openstackmanager-addmember' ) );

		$project = $wgRequest->getText( 'projectname' );
		$projectInfo = Array();
		$projectInfo['member'] = array(
			'type' => 'text',
			'label-message' => 'openstackmanager-member',
			'default' => '',
			'section' => 'project/info',
		);
		$projectInfo['action'] = array(
			'type' => 'hidden',
			'default' => 'addmember',
		);
		$projectInfo['projectname'] = array(
			'type' => 'hidden',
			'default' => $project,
		);

		$projectForm = new SpecialNovaProjectForm( $projectInfo, 'openstackmanager-novaproject' );
		$projectForm->setTitle( SpecialPage::getTitleFor( 'NovaProject' ) );
		$projectForm->setSubmitID( 'novaproject-form-addmembersubmit' );
		$projectForm->setSubmitCallback( array( $this, 'tryAddMemberSubmit' ) );
		$projectForm->show();

		return true;
	}

	function deleteMember() {
		global $wgRequest, $wgOut;

		$this->setHeaders();
		$wgOut->setPagetitle( wfMsg( 'openstackmanager-removemember' ) );

		$projectname = $wgRequest->getText( 'projectname' );
		$project = OpenStackNovaProject::getProjectByName( $projectname );
		$projectmembers = $project->getMembers();
		$member_keys = array();
		foreach ( $projectmembers as $projectmember ) {
			$member_keys["$projectmember"] = $projectmember;
		}
		$projectInfo = Array();
		$projectInfo['members'] = array(
			'type' => 'multiselect',
			'label-message' => 'openstackmanager-member',
			'section' => 'project/info',
			'options' => $member_keys,
		);
		$projectInfo['action'] = array(
			'type' => 'hidden',
			'default' => 'deletemember',
		);
		$projectInfo['projectname'] = array(
			'type' => 'hidden',
			'default' => $projectname,
		);

		$projectForm = new SpecialNovaProjectForm( $projectInfo, 'openstackmanager-novaproject' );
		$projectForm->setTitle( SpecialPage::getTitleFor( 'NovaProject' ) );
		$projectForm->setSubmitID( 'novaproject-form-deletemembersubmit' );
		$projectForm->setSubmitCallback( array( $this, 'tryDeleteMemberSubmit' ) );
		$projectForm->show();

		return true;
	}

	function deleteProject() {
		global $wgOut, $wgRequest;

		$this->setHeaders();
		$wgOut->setPagetitle( wfMsg( 'openstackmanager-deleteproject' ) );

		$project = $wgRequest->getText( 'projectname' );
		if ( ! $wgRequest->wasPosted() ) {
			$out .= Html::element( 'p', array(), wfMsgExt( 'openstackmanager-removeprojectconfirm', array(), $project ) );
			$wgOut->addHTML( $out );
		}
		$projectInfo = Array();
		$projectInfo['projectname'] = array(
			'type' => 'hidden',
			'default' => $project,
		);
		$projectInfo['action'] = array(
			'type' => 'hidden',
			'default' => 'delete',
		);
		$projectForm = new SpecialNovaProjectForm( $projectInfo, 'openstackmanager-novaproject' );
		$projectForm->setTitle( SpecialPage::getTitleFor( 'NovaProject' ) );
		$projectForm->setSubmitID( 'novaproject-form-deleteprojectsubmit' );
		$projectForm->setSubmitCallback( array( $this, 'tryDeleteSubmit' ) );
		$projectForm->setSubmitText( 'confirm' );
		$projectForm->show();

		return true;
	}

	function listProjects() {
		global $wgOut, $wgUser;

		$this->setHeaders();
		$wgOut->setPagetitle( wfMsg( 'openstackmanager-projectlist' ) );

		$out = '';
		$sk = $wgUser->getSkin();
		$out .= $sk->link( $this->getTitle(), wfMsg( 'openstackmanager-createproject' ), array(), array( 'action' => 'create' ), array() );
		$projectsOut = Html::element( 'th', array(), wfMsg( 'openstackmanager-projectname' ) );
		$projectsOut .= Html::element( 'th', array(),  wfMsg( 'openstackmanager-members' ) );
		$projectsOut .= Html::element( 'th', array(),  wfMsg( 'openstackmanager-roles' ) );
		$projectsOut .= Html::element( 'th', array(), wfMsg( 'openstackmanager-actions' ) );
		$projects = OpenStackNovaProject::getAllProjects();
		if ( ! $projects ) {
			$projectsOut = '';
		}
		foreach ( $projects as $project ) {
			$projectName = $project->getProjectName();
			$projectOut = Html::element( 'td', array(), $projectName );
			$projectMembers = $project->getMembers();
			$memberOut = '';
			foreach ( $projectMembers as $projectMember ) {
				$memberOut .= Html::element( 'li', array(), $projectMember );
			}
			if ( $memberOut ) {
				$memberOut = Html::rawElement( 'ul', array(), $memberOut );
			}
			$projectOut .= Html::rawElement( 'td', array(), $memberOut );
			$rolesOut = Html::element( 'th', array(), wfMsg( 'openstackmanager-rolename' ) );
			$rolesOut .= Html::element( 'th', array(),  wfMsg( 'openstackmanager-members' ) );
			$rolesOut .= Html::element( 'th', array(), wfMsg( 'openstackmanager-actions' ) );
			foreach ( $project->getRoles() as $role ) {
				$roleOut = Html::element( 'td', array(), $role->getRoleName() );
				$roleMembers = '';
				$specialRoleTitle = Title::newFromText( 'Special:NovaRole' );
				foreach ( $role->getMembers() as $member ) {
					$roleMembers .= Html::element( 'li', array(), $member );
				}
				$roleMembers = Html::rawElement( 'ul', array(), $roleMembers );
				$roleOut .= Html::rawElement( 'td', array(), $roleMembers );
				$link = $sk->link( $specialRoleTitle, wfMsg( 'openstackmanager-addrolemember' ), array(),
								   array( 'action' => 'addmember', 'projectname' => $projectName, 'rolename' => $role->getRoleName(), 'returnto' => 'Special:NovaProject' ), array() );
				$actions = Html::rawElement( 'li', array(), $link );
				$link = $sk->link( $specialRoleTitle, wfMsg( 'openstackmanager-removerolemember' ), array(),
								   array( 'action' => 'deletemember', 'projectname' => $projectName, 'rolename' => $role->getRoleName(), 'returnto' => 'Special:NovaProject' ), array() );
				$actions .= Html::rawElement( 'li', array(), $link );
				$actions = Html::rawElement( 'ul', array(), $actions );
				$roleOut .= Html::rawElement( 'td', array(), $actions );
				$rolesOut .= Html::rawElement( 'tr', array(), $roleOut );
			}
			$rolesOut = Html::rawElement( 'table', array( 'class' => 'wikitable' ), $rolesOut );
			$projectOut .= Html::rawElement( 'td', array(), $rolesOut );
			$link = $sk->link( $this->getTitle(), wfMsg( 'openstackmanager-deleteproject' ), array(),
							   array( 'action' => 'delete', 'projectname' => $projectName ), array() );
			$actions = Html::rawElement( 'li', array(), $link );
			$link = $sk->link( $this->getTitle(), wfMsg( 'openstackmanager-addmember' ), array(),
									 array( 'action' => 'addmember', 'projectname' => $projectName ), array() );
			$actions .= Html::rawElement( 'li', array(), $link );
			$link = $sk->link( $this->getTitle(), wfMsg( 'openstackmanager-removemember' ), array(),
							   array( 'action' => 'deletemember', 'projectname' => $projectName ), array() );
			$actions .= Html::rawElement( 'li', array(), $link );
			$actions = Html::rawElement( 'ul', array(), $actions );
			$projectOut .= Html::rawElement( 'td', array(), $actions );
			$projectsOut .= Html::rawElement( 'tr', array(), $projectOut );
		}
		if ( $projectsOut ) {
			$out .= Html::rawElement( 'table', array( 'class' => 'wikitable' ), $projectsOut );
		}

		$wgOut->addHTML( $out );
	}

	function tryCreateSubmit( $formData, $entryPoint = 'internal' ) {
		global $wgOut, $wgUser;

		$success = OpenStackNovaProject::createProject( $formData['projectname'] );
		if ( ! $success ) {
			$out = Html::element( 'p', array(), wfMsg( 'openstackmanager-createprojectfailed' ) );
			$wgOut->addHTML( $out );
			return true;
		}
		$out = Html::element( 'p', array(), wfMsg( 'openstackmanager-createdproject' ) );
		$out .= '<br />';
		$sk = $wgUser->getSkin();
		$out .= $sk->link( $this->getTitle(), wfMsg( 'openstackmanager-backprojectlist' ), array(), array(), array() );
		$wgOut->addHTML( $out );

		return true;
	}

	function tryDeleteSubmit( $formData, $entryPoint = 'internal' ) {
		global $wgOut, $wgUser;

		$success = OpenStackNovaProject::deleteProject( $formData['projectname'] );
		if ( $success ) {
			$out = Html::element( 'p', array(), wfMsg( 'openstackmanager-deletedproject' ) );
		} else {
			$out = Html::element( 'p', array(), wfMsg( 'openstackmanager-deleteprojectfailed' ) );
		}
		$out .= '<br />';
		$sk = $wgUser->getSkin();
		$out .= $sk->link( $this->getTitle(), wfMsg( 'openstackmanager-backprojectlist' ), array(), array(), array() );
		$wgOut->addHTML( $out );

		return true;
	}

	function tryAddMemberSubmit( $formData, $entryPoint = 'internal' ) {
		global $wgOut, $wgUser;

		$project = new OpenStackNovaProject( $formData['projectname'] );
		$success = $project->addMember( $formData['member'] );
		if ( $success ) {
			$out = Html::element( 'p', array(), wfMsgExt( 'openstackmanager-addedto', array(), $formData['member'],
			                                              $formData['projectname'] ) );
		} else {
			$out = Html::element( 'p', array(), wfMsgExt( 'openstackmanager-failedtoadd', array(), $formData['member'],
			                                              $formData['projectname'] ) );
		}
		$out .= '<br />';
		$sk = $wgUser->getSkin();
		$out .= $sk->link( $this->getTitle(), wfMsg( 'openstackmanager-backprojectlist' ), array(), array(), array() );
		$wgOut->addHTML( $out );

		return true;
	}

	function tryDeleteMemberSubmit( $formData, $entryPoint = 'internal' ) {
		global $wgOut, $wgUser;

		$project = OpenStackNovaProject::getProjectByName( $formData['projectname'] );
		if ( ! $project ) {
			$out = Html::element( 'p', array(), wfMsg( 'openstackmanager-nonexistentproject' ) );
			$wgOut->addHTML( $out );
			return true;
		}
		$out = '';
		foreach ( $formData['members'] as $member ) {
			$success = $project->deleteMember( $member );
			if ( $success ) {
				$out = Html::element( 'p', array(), wfMsgExt( 'openstackmanager-removedfrom', array(), $formData['member'], $formData['projectname'] ) );
			} else {
				$out = Html::element( 'p', array(), wfMsgExt( 'openstackmanager-failedtoremove', array(), $formData['member'], $formData['projectname'] ) );
			}
		}
		$out .= '<br />';
		$sk = $wgUser->getSkin();
		$out .= $sk->link( $this->getTitle(), wfMsg( 'openstackmanager-backprojectlist' ), array(), array(), array() );
		$wgOut->addHTML( $out );

		return true;
	}
}

class SpecialNovaProjectForm extends HTMLForm {
}
