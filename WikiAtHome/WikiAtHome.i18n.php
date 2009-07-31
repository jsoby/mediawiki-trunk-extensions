<?php
/**
 * Internationalisation file for extension Wiki At Home.
 *
 * @addtogroup Extensions
*/

$messages = array();

/** English
 * @author Michael Dale
 * @author Purodha 	http://ksh.wikipedia.org/wiki/User:Purodha
 */
$messages['en'] = array(
	'specialwikiathome'	=> 'Wiki@Home',
	'wah-desc'		=> 'Enables distributing transcoding video jobs to clients using firefogg.',
	'wah-user-desc'		=> 'Wiki@Home enables community members to donate spare cpu cycles to help with resource intensive operations',
	'wah-short-audio'	=> '$1 sound file, $2',
	'wah-short-video'	=> '$1 video file, $2',
	'wah-short-general'	=> '$1 media file, $2',

	'wah-long-audio'       	=> '($1 sound file, length $2, $3)',
	'wah-long-video'       	=> '($1 video file, length $2, $4×$5 pixels, $3)',
	'wah-long-multiplexed' 	=> '(multiplexed audio/video file, $1, length $2, $4×$5 pixels, $3 overall)',
	'wah-long-general'     	=> '(media file, length $2, $3)',
	'wah-long-error'       	=> '(ffmpeg could not read this file: $1)',

	'wah-transcode-working' => 'This video is being transcoded its $1% done',
	'wah-transcode-helpout' => 'You can help transcode this video by visiting [[Special:WikiAtHome|Wiki@Home]]',

	'wah-javascript-off'	=> 'You must have JavaScript enabled to participate in Wiki@Home',
	'wah-loading'		=> 'loading Wiki@Home interface <blink>...</blink>'
);
