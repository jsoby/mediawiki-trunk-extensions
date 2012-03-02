<?php
/**
 * Form for translators to register contact methods
 *
 * @file
 * @author Niklas Laxström
 * @copyright Copyright © 2012, Niklas Laxström
 * @license http://www.gnu.org/copyleft/gpl.html GNU General Public License 2.0 or later
 */

/**
 * Form for translators to register contact methods
 *
 * @ingroup SpecialPage TranslateSpecialPage
 */

class SpecialTranslatorSignup extends SpecialPage {
	public function __construct() {
		parent::__construct( 'TranslatorSignup' );
	}

	public function execute( $parameters ) {
		if ( !$this->getUser()->isLoggedIn() ) {
			throw new PermissionsError( 'read' );
		}

		$context = $this->getContext();
		$htmlForm = new HtmlForm( $this->getDataModel(), $context, 'translationnotifications' );
		$htmlForm->setId( 'translationnotifications-form' );
		$htmlForm->setSubmitText( $context->msg( 'translationnotifications-submit' )->text() );
		$htmlForm->setSubmitID( 'translationnotifications-submit' );
		$htmlForm->setSubmitCallback( array( $this, 'formSubmit' ) );
		$htmlForm->show();

		$this->setHeaders();
		$this->getOutput()->addInlineScript(
<<<JAVASCRIPT
jQuery( function ( $ ) {
	var toggle = function () {
		$( '#mw-input-wpcmethod-talkpage-elsewhere-loc' ).toggle( $( '#mw-input-wpcmethod-talkpage-elsewhere' ).prop( 'checked' ) );
	};
	toggle();
	$( '#mw-input-wpcmethod-talkpage-elsewhere' ).change( toggle );
} );
JAVASCRIPT
		);
	}
	public function getDataModel() {
		global $wgTranslationNotificationsContactMethods, $wgLang;

		$m['username'] = array(
			'type' => 'info',
			'label-message' => 'translationnotifications-username',
			'default' => $this->getUser()->getName(),
			'section' => 'info',
		);

		$user = $this->getUser();
		if ( $user->isEmailConfirmed() ) {
			$status = $this->msg( 'translationnotifications-email-confirmed' )->parse();
		} elseif ( trim( $user->getEmail() ) !== '' )  {
			$submit = Xml::submitButton( $this->msg( 'confirmemail_send' )->text(), array( 'name' => 'x' ) );
			$status = $this->msg( 'translationnotifications-email-unconfirmed' )->rawParams( $submit )->parse();
		} else {
			$status = $this->msg( 'translationnotifications-email-notset' )->parse();
		}

		$m['emailstatus'] = array(
			'type' => 'info',
			'label-message' => 'translationnotifications-emailstatus',
			'default' => $status,
			'section' => 'info',
			'raw' => true,
		);


		$languages = Language::getLanguageNames();
		ksort( $languages );

		$options = array();
		foreach ( $languages as $code => $name ) {
			$display = wfBCP47( $code ) . ' - ' . $name;
			$options[$display] = $code;
		}

		$options = array( wfMessage( 'translationnotifications-nolang' )->plain() => '' ) + $options;

		for ( $i = 1; $i < 4; $i++ ) {
			$m["lang-$i"] = array(
				'type' => 'select',
				'label-message' => array( "translationnotifications-lang", $wgLang->formatNum( $i ) ),
				'section' => 'languages',
				'options' => $options,
				'default' => $user->getOption( "translationnotifications-lang-$i" ),
			);

			if ( $i === 1 ) {
				$m["lang-$i"]['default'] = $user->getOption( "translationnotifications-lang-$i", $wgLang->getCode() );
				$m["lang-$i"]['required'] = true;
			}
		}

		foreach ( $wgTranslationNotificationsContactMethods as $method => $value ) {
			if ( $value === false ) {
				continue;
			}

			$m["cmethod-$method"] = array(
				'type' => 'check',
				'label-message' => "translationnotifications-cmethod-$method",
				'default' => $user->getOption( "translationnotifications-cmethod-$method" ),
				'section' => 'contact',
			);
			if ( $method === 'email' ) {
				$m["cmethod-$method"]['disabled'] = !$user-> isEmailConfirmed();
			}

			if ( $method === 'talkpage-elsewhere' ) {
				$m['cmethod-talkpage-elsewhere-loc'] = array(
					'type' => 'select',
					'default' => $user->getOption( 'translationnotifications-cmethod-talkpage-elsewhere-loc' ),
					'section' => 'contact',
					'options' => $this->getOtherWikis(),
				);
			}
		}

		$m['freq'] = array(
			'type' => 'radio',
			'default' => $user->getOption( 'translationnotifications-freq', 'always' ),
			'section' => 'frequency',
			'options' => array(
				$this->msg( 'translationnotifications-freq-always' )->text()  => 'always',
				$this->msg( 'translationnotifications-freq-week' )->text()    => 'week',
				$this->msg( 'translationnotifications-freq-month' )->text()   => 'month',
				$this->msg( 'translationnotifications-freq-weekly' )->text()  => 'weekly',
				$this->msg( 'translationnotifications-freq-monthly' )->text() => 'monthly',
			),
		);
		return $m;
	}

	public function formSubmit( $formData, $form ) {
		global $wgRequest;
		$user = $this->getUser();

		if ( $wgRequest->getVal( 'x' ) === $this->msg( 'confirmemail_send' )->text() ) {
			$user->sendConfirmationMail( 'set' );
			return;
		}

		foreach ( $formData as $key => $value ) {
			$user->setOption( "translationnotifications-$key", $value );
		}
		$user->saveSettings();
	}

	protected function getOtherWikis() {
		if ( !class_exists( 'CentralAuthUser' ) ) {
			return array();
		}
		$globalUser = new CentralAuthUser( $this->getUser()->getName() );
		if ( !$globalUser->exists() ) {
			return array();
		}

		$wikis = array();
		$stuff = $globalUser->queryAttached();
		foreach ( $stuff as $dbname => $value ) {
			$wikis[] = $dbname;
		}

		return array_combine( $wikis, $wikis );
	}
}
