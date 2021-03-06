/*
 * The following variable are declared inline in webitects_2_3step.html:
 *   amountErrors, billingErrors, paymentErrors, scriptPath, actionURL
 */
$( document ).ready( function () {

	// check for RapidHtml errors and display, if any
	var amountErrorString = "",
		billingErrorString = "",
		paymentErrorString = "";

	// generate formatted errors to display
	var temp = [];
	for ( var e in amountErrors )
		if ( amountErrors[e] != "" )
			temp[temp.length] = amountErrors[e];
	amountErrorString = temp.join( "<br />" );

	temp = [];
	for ( var f in billingErrors )
		if ( billingErrors[f] != "" )
			temp[temp.length] = billingErrors[f];
	billingErrorString = temp.join( "<br />" );

	temp = [];
	for ( var g in paymentErrors )
		if ( paymentErrors[g] != "" )
			temp[temp.length] = paymentErrors[g];
	paymentErrorString = temp.join( "<br />" );

	// show the errors
	var prevError = false;
	if ( amountErrorString != "" ) {
		$( "#amtErrorMessages" ).html( amountErrorString );
		prevError = true;
		showStep2(); // init the headers
		showStep3();
		showStep1(); // should be default, but ensure
	}
	if ( billingErrorString != "" ) {
		$( "#billingErrorMessages" ).html( billingErrorString );
		if ( !prevError ) {
			showStep1(); // init the headers
			showStep3();
			showStep2();
			prevError = true;
		}
		showAmount( $( 'input[name="amount"]' ) ); // lets go ahead and assume there is something to show
	}
	if ( paymentErrorString != "" ) {
		$( "#paymentErrorMessages" ).html( paymentErrorString );
		if ( !prevError ) {
			showStep1(); // init the headers
			showStep2();
			showStep3();
		}
		showAmount( $( 'input[name="amount"]' ) ); // lets go ahead and assume there is something to show
	}
	
	// If the form is being reloaded, restore the amount
	var previousAmount = $( 'input[name="amount"]' ).val();
	if ( previousAmount && previousAmount > 0 ) {
		var matched = false;
		$( 'input[name="amountRadio"]' ).each( function( index ) {
			if ( $( this ).val() == previousAmount ) {
				$( this ).attr( 'checked', true );
				matched = true;
			}
		} );
		if ( !matched ) {
			$( 'input#input_amount_other' ).attr( 'checked', true );
			$( 'input#other-amount' ).val( previousAmount );
		}
	}
	// For when people switch back to Other from another value
	$( '#input_amount_other' ).click( function() {
		var otherAmount = $( 'input#other-amount' ).val();
		if ( otherAmount ) {
			setAmount( $( 'input#other-amount' ) );
		}
	} );
	$( "#cc" ).click( function() {
		// Safety check for people who hit the back button
		checkedValue = $( "input[name='amountRadio']:checked" ).val();
		if ( $( 'input[name="amount"]' ).val() == '0.00' && checkedValue && !isNaN( checkedValue ) ) {
			setAmount( $( "input[name='amountRadio']:checked" ) );
		}
		if ( validateAmount() ) {
			showAmount( $( 'input[name="amount"]' ) );
			showStep2();
		}
	} );

	$( "#pp" ).click( function() {
		if ( validateAmount() ) {
			// set the action to go to PayPal
			$( 'input[name="gateway"]' ).val( "paypal" );
			$( 'input[name="PaypalRedirect"]' ).val( "1" );
			$( "#loading" ).html( "<img src=" + scriptPath + "'/extensions/DonationInterface/payflowpro_gateway/forms/rapidhtml/images/loading-white.gif' /> Redirecting to PayPal…" );
			document.paypalcontribution.action = actionURL;
			document.paypalcontribution.submit();
		}
	} );
	$( "#paymentContinueBtn" ).live( "click", function() {
		if ( validate_personal( document.paypalcontribution ) ) {
			showStep3();
		}
	} );
	// Set the cards to progress to step 3
	$( ".cardradio" ).live( "click", function() {
		if ( validate_personal( document.paypalcontribution ) ) {
			showStep3();
		}
		else {
			// show the continue button to indicate how to get to step 3 since they
			// have already clicked on a card image
			$( "#paymentContinue" ).show();
		}
	} );

	$( "#submitcreditcard" ).click( function() {
		if ( validate_cc() ) {
			// set the hidden expiration date input from the two selects
			$( 'input[name="expiration"]' ).val(
				$( 'select[name="mos"]' ).val() + $( 'select[name="year"]' ).val().substring( 2, 4 )
			);
			document.paypalcontribution.action = actionURL;
			document.paypalcontribution.submit();
		}
	} );
	// init all of the header actions
	$( "#step1header" ).click( function() {
		showStep1();
	} );
	$( "#step2header" ).click( function() {
		if ( validateAmount() ) {
			showAmount( $( 'input[name="amount"]' ) );
			showStep2();
		}
	} );
	$( "#step3header" ).click( function() {
		if ( validateAmount() ) {
			showAmount( $( 'input[name="amount"]' ) );
			showStep3();
		}
	} );
	// Set selected amount to amount
	$( 'input[name="amountRadio"]' ).click( function() {
		if ( !isNaN( $( this ).val() ) ) {
			setAmount( $( this ) );
		}
	} );
	// reset the amount field when "other" is changed
	$( "#other-amount" ).change( function() {
		setAmount( $( this ) );
	} );

	// show the CVV help image on click
	$( "#where" ).click( function() {
		$( "#codes" ).toggle();
		return false;
	} );

} );

function showStep1() {
	// show the correct sections
	$( "#step1wrapper" ).slideDown();
	$( "#step2wrapper" ).slideUp();
	$( "#step3wrapper" ).slideUp();
	$( "#change-amount" ).hide();
	$( "#change-billing" ).show();
	$( "#change-payment" ).show();
	$( "#step1header" ).show(); // just in case
}

function showStep2() {
	// show the correct sections
	$( "#step1wrapper" ).slideUp();
	$( "#step2wrapper" ).slideDown();
	$( "#step3wrapper" ).slideUp();
	$( "#change-amount" ).show();
	$( "#change-billing" ).hide();
	$( "#change-payment" ).show();
	$( "#step2header" ).show(); // just in case
}

function showStep3() {
	// show the correct sections
	$( "#step1wrapper" ).slideUp();
	$( "#step2wrapper" ).slideUp();
	$( "#step3wrapper" ).slideDown();
	$( "#change-amount" ).show();
	$( "#change-billing" ).show();
	$( "#change-payment" ).hide();
	$( "#step3header" ).show(); // just in case
}
// Fix behavior of images in labels
// TODO: check that disabling this is okay in things other than Chrome
// $("label img").live("click", function() { $("#" + $(this).parents( "label" ).attr( "for" )).click(); });

// set the hidden amount input to the value of the selected element
function setAmount( e ) {
	$( 'input[name="amount"]' ).val( e.val() );
}
// Display selected amount
function showAmount( e ) {
	$( "#selected-amount" ).html( "($" + e.val() + ")" );
	$( "#change-amount" ).show();
}
function validateAmount() {
	var error = true;
	var amount = $( 'input[name="amount"]' ).val(); // get the amount
	// Normalize weird amount formats.
	// Don't mess with these unless you know what you're doing.
	amount = amount.replace( /[,.](\d)$/, '\:$10' );
	amount = amount.replace( /[,.](\d)(\d)$/, '\:$1$2' );
	amount = amount.replace( /[,.]/g, '' );
	amount = amount.replace( /:/, '.' );
	$( 'input[name="amount"]' ).val( amount ); // set the new amount back into the form

	// Check amount is a real number, sets error as true (good) if no issues
	error = ( amount == null || isNaN( amount ) || amount.value <= 0 );

	// Check amount is at least the minimum
	var currency_code = $( 'input[name="currency_code"]' ).val();
	if ( typeof( wgCurrencyMinimums[currency_code] ) == 'undefined' ) {
		wgCurrencyMinimums[currency_code] = 1;
	}
	if ( amount < wgCurrencyMinimums[currency_code] || error ) {
		alert( mw.msg( 'donate_interface-smallamount-error' ).replace( '$1', wgCurrencyMinimums[currency_code] + ' ' + currency_code ) );
		error = true;
	}
	return !error;
}

function validate_cc() {
	// reset the errors
	$( "#paymentErrorMessages" ).html( '' );
	var error = false;
	if ( $( 'input[name="card_num"]' ).val() == '' ) {
		$( "#paymentErrorMessages" ).append( "Please enter a valid credit card number" );
		error = true;
	}
	if ( $( 'select[name="mos"]' ).val() == '' ) {
		if ( $( "#paymentErrorMessages" ).html() != "" )
			$( "#paymentErrorMessages" ).append( "<br />" );
		$( "#paymentErrorMessages" ).append( "Please enter a valid month for the expiration date" );
		error = true;
	}
	if ( $( 'select[name="year"]' ).val() == '' ) {
		if ( $( "#paymentErrorMessages" ).html() != "" )
			$( "#paymentErrorMessages" ).append( "<br />" );
		$( "#paymentErrorMessages" ).append( "Please enter a valid year for the expiration date" );
		error = true;
	}
	if ( $( 'input[name="cvv"]' ).val() == '' ) {
		if ( $( "#paymentErrorMessages" ).html() != "" )
			$( "#paymentErrorMessages" ).append( "<br />" );
		$( "#paymentErrorMessages" ).append( "Please enter a valid security code" );
		error = true;
	}
	return !error;
}