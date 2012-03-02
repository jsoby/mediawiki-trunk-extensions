<?php
/**
 * Dynamic TemplateLoader
 *
 * @ingroup SolrStore
 * @file
 * @author Sascha Schueller
 */

/**
 * TODO: Insert class description
 *
 * @ingroup SolrStore
 */
class SolrSearchTemplateLoader {

	public function applyTemplate( $xml ) {
		global $wgSolrTemplate;

		$dir = dirname( __FILE__ );
		$file = $dir . '/templates/SolrSearchTemplate' . $wgSolrTemplate . '.php';
		$classname = 'SolrSearchTemplate' . $wgSolrTemplate;

		if ( file_exists( $file ) ) {
			if ( !class_exists( $classname ) ) {
				include($dir . '/templates/SolrSearchTemplate' . $wgSolrTemplate . '.php');
			}
			$classname = new $classname();
			return $classname->applyTemplate( $xml );
		}
		die( "SolrSearch Template Problem: File not exists !! " . $file );
	}

}
?>
