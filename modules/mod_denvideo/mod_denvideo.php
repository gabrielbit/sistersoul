<?php
/**
 * @version		$Id: mod_dencode.php
 * @package		Joomla 1.5, denVideo
 * @copyright	Copyright (C) 2007 3DEN Open Software. All rights reserved.
 * @license		GNU/GPL
 */
// no direct access
defined('_JEXEC') or die('Restricted access');

// Try to import denVideo
$denpath = JPATH_SITE.DS.'plugins'.DS.'content'.DS.'denvideo.php';
if(!is_file($denpath)){
	$error = 'Please install denVideo<br />
		<a href="http://3den.org/joom/index.php/denjoomla/8-denvideo.html">
			Download it for free, now!
		</a>';
	include( JModuleHelper::getLayoutPath( 'mod_denvideo', '_error' ) );
	return;
}
include_once( $denpath );

// Include the syndicate functions only once
include_once( dirname(__FILE__).DS.'helper.php' );

// set variables
$video = modDenVideoHelper::getVideo($params);

// Display
$layout =  $params->get('layout', 'default' );
include( JModuleHelper::getLayoutPath( 'mod_denvideo', $layout ) );
