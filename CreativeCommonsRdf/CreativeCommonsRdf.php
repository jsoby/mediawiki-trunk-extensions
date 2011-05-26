<?php

$wgExtensionCredits['other'][] = array(
	'path' => __FILE__,
	'name' => 'CreativeCoreRdf',
	'url' => 'http://www.mediawiki.org/wiki/Extension:CreativeCoreRdf',
	'author' => 'Evan Prodromou',
	'description' => "CreativeCommons RDF-metadata"
);

$wgHooks['MediaWikiPerformAction'][] = 'efCreativeCommonsRdfPreformAction';
$wgHooks['BeforePageDisplay'][] = 'efCreativeCommonsRdfBeforePageDisplay';

$wgAutoloadClasses['CreativeCommonsRdf'] = $dir . 'CreativeCommonsRdf_body.php';

function efCreativeCommonsRdfPreformAction( $output, $article, $title, $user, $request, $mediaWiki ) {
	if ( $mediaWiki->getAction() !== 'creativecommons' ) {
		return true;
	}

	$rdf = new CreativeCommonsRdf( $article );
	$rdf->show();
	return false;
}

/**
 * @param $out OutputPage
 * @param $skin Skin
 * @return bool
 */
function efCreativeCommonsRdfBeforePageDisplay( $out, $skin ) {
	$out->addHeadItem( 'creativecommons',
						Html::element( 'link', array(
							'rel' => $out->getMetadataAttribute(),
							'title' => 'Creative Commons',
							'type' => 'application/rdf+xml',
							'href' => $out->getTitle()->getLocalURL( 'action=creativecommons' ) )
						));
	return true;
}