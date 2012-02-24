<?php

class MobileFrontend2 {

	public static function handleOptions(
		Title $title, WebRequest $request, OutputPage $output
	) {
		if ( $request->getBool( 'disableImages' ) ) {
			MobileFrontend2::disableImages( $title, $request, $output );
		}
	}

	/**
	 * @param $title Title
	 * @param $request WebRequest
	 * @param $output OutputPage
	 */
	public static function disableImages( $title, $request, $output ) {
		// Set the cookie
		$request->response()->setcookie( 'mf2-disableimages', '1' );

		// Build a redirect URL
		$query = $request->getQueryValues();
		unset( $query['disableImages'] );
		$url = $title->getLocalURL( wfArrayToCGI( $query ) );

		$output->redirect( $url );
	}

}
