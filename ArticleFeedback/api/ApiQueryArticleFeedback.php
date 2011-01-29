<?php
class ApiQueryArticleFeedback extends ApiQueryBase {
	public function __construct( $query, $moduleName ) {
		parent::__construct( $query, $moduleName, 'af' );
	}

	public function execute() {
		global $wgArticleFeedbackRatings;
		$params = $this->extractRequestParams();

		$result = $this->getResult();

		$this->addTables( array( 'article_feedback_pages', 'article_feedback_ratings' ) );

		$this->addFields( array( 'aap_page_id', 'aap_total', 'aap_count', 'aap_rating_id', 'aar_rating' ) );

		$this->addJoinConds( array(
				'article_feedback_ratings' => array( 'LEFT JOIN', array(
					'aar_id=aap_rating_id',
					'aap_rating_id' => $wgArticleFeedbackRatings,
				)
			),
		) );

		$this->addWhereFld( 'aap_page_id', $params['pageid'] );

		if ( $params['userrating'] ) {
			global $wgUser;

			$leftJoinCondsAF = array(
					'aa_page_id=aap_page_id',
					'aa_rating_id=aap_rating_id',
					'aa_user_id=' . $wgUser->getId() );
			$leftJoinCondsAFP = array(
					'afp_revision=aa_revision',
					'afp_user_text=aa_user_text',
					'afp_user_anon_token=aa_user_anon_token',
					'afp_key' => 'expertise' );

			if ( $wgUser->isAnon() ) {
				if ( !isset( $params['anontoken'] ) ) {
					$this->dieUsageMsg( array( 'missingparam', 'anontoken' ) );
				} elseif ( strlen( $params['anontoken'] ) != 32 ) {
					$this->dieUsage( 'The anontoken is not 32 characters', 'invalidtoken' );
				}

				$leftJoinCondsAF['aa_user_anon_token'] = $params['anontoken'];
			} else {
				$leftJoinCondsAF['aa_user_anon_token'] = '';
			}

			$this->addTables( array( 'article_feedback', 'article_feedback_properties' ) );
			$this->addJoinConds( array( 
					'article_feedback' => array( 'LEFT JOIN', $leftJoinCondsAF ),
					'article_feedback_properties' => array( 'LEFT JOIN', $leftJoinCondsAFP )
				)
			);

			$this->addFields( array( 'aa_rating_value', 'aa_revision', 'afp_value_text' ) );

			$this->addOption( 'ORDER BY', 'aa_revision DESC' );
		}

		$this->addOption( 'LIMIT', count( $wgArticleFeedbackRatings ) );

		$res = $this->select( __METHOD__ );

		$ratings = array();

		$userRatedArticle = false;

		foreach ( $res as $row ) {
			$pageId = $row->aap_page_id;

			if ( !isset( $ratings[$pageId] ) ) {
				$page = array(
					'pageid' => $pageId,
				);

				if ( $params['userrating'] ) {
					$page['revid'] = $row->aa_revision;
					if ( !is_null( $row->afp_value_text ) ) {
						$page['expertise'] = $row->afp_value_text;
					}
				}

				$ratings[$pageId] = $page;
			}

			$thisRow = array(
				'ratingid' => $row->aap_rating_id,
				'ratingdesc' => $row->aar_rating,
				'total' => $row->aap_total,
				'count' => $row->aap_count,
			);

			if ( $params['userrating'] && !is_null( $row->aa_rating_value ) ) {
				$thisRow['userrating'] = $row->aa_rating_value;

				$userRatedArticle = true;
			}

			$ratings[$pageId]['ratings'][] = $thisRow;
		}

		//Only can actually be "stale" if the user has rated the article before
		if ( $params['userrating'] && $userRatedArticle ) {
			$dbr = wfGetDb( DB_SLAVE );

			global $wgArticleFeedbackStaleCount;

			$res = $dbr->select(
				'revision',
				'rev_id',
				array(
					'rev_page' => $params['pageid'],
					'rev_id > ' . $ratings[$pageId]['revid']
				),
				__METHOD__,
				array ( 'LIMIT', $wgArticleFeedbackStaleCount + 1 )
			);

			if ( $res && $dbr->numRows( $res ) > $wgArticleFeedbackStaleCount ) {
				//it's stale!
				$ratings[$params['pageid']]['stale'] = '';
			}
		}

		foreach ( $ratings as $rat ) {
			$result->setIndexedTagName( $rat['ratings'], 'r' );
			$result->addValue( array( 'query', $this->getModuleName() ), null, $rat );
		}

		$result->setIndexedTagName_internal( array( 'query', $this->getModuleName() ), 'aa' );
	}

	public function getAllowedParams() {
		return array(
			'pageid' => array(
				ApiBase::PARAM_REQUIRED => true,
				ApiBase::PARAM_ISMULTI => false,
				ApiBase::PARAM_TYPE => 'integer',
			),
			'userrating' => false,
			'anontoken' => null,
		);
	}

	public function getParamDescription() {
		return array(
			'pageid' => 'Page ID to get feedbacks for',
			'userrating' => "Whether to get the current user's ratings for the specific rev/article",
			'anontoken' => 'Token for anonymous users',
		);
	}

	public function getDescription() {
		return array(
			'List all article feedbacks'
		);
	}

	public function getPossibleErrors() {
		return array_merge( parent::getPossibleErrors(), array(
				array( 'missingparam', 'anontoken' ),
				array( 'code' => 'invalidtoken', 'info' => 'The anontoken is not 32 characters' ),
			)
		);
	}

	protected function getExamples() {
		return array(
			'api.php?action=query&list=articlefeedback',
			'api.php?action=query&list=articlefeedback&afpageid=1',
			'api.php?action=query&list=articlefeedback&afpageid=1&afuserrating',
		);
	}

	public function getVersion() {
		return __CLASS__ . ': $Id$';
	}
}