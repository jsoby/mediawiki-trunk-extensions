<?php

/**
 * Internationalisation file for the bad image list extension
 *
 * @package MediaWiki
 * @subpackage Extensions
 * @author Rob Church <robchur@gmail.com>
 * @copyright © 2006 Rob Church
 * @licence Copyright holder allows use of the code for any purpose
 */

function efBadImageMessages() {
	return array(

# Special page messages
'badimages' => 'Bad image list',
'badimages-add-btn' => 'Add',
'badimages-added' => '$1 was added to the list.',
'badimages-count' => "There are '''$1''' images on the bad image list.",
'badimages-name' => 'Name:',
'badimages-not-added' => 'The image could not be added.',
'badimages-not-removed' => 'The image could not be removed.',
'badimages-reason' => 'Reason:',
'badimages-remove' => '(remove)',
'badimages-remove-btn' => 'Remove',
'badimages-remove-confirm' => 'Please confirm you wish to remove $1 from the list:',
'badimages-removed' => '$1 was removed from the list.',
'badimages-subheading' => 'Current items',
'badimages-unprivileged' => '(You do not have sufficient permission to alter the list)',

# Auditing messages
'badimages-log-name' => 'Bad image list',
'badimages-log-header' => 'This is a log of changes to the [[Help:Bad image list|bad image list]].',
'badimages-log-add' => 'added [[$1]] to the bad image list',
'badimages-log-remove' => 'removed [[$1]] from the bad image list',

	);
}

?>