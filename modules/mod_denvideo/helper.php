<?php
/**
* @version		$Id: helper.php 9764 2007-12-30 07:48:11Z ircmaxell $
* @package		Joomla
* @copyright	Copyright (C) 2005 - 2008 Open Source Matters. All rights reserved.
* @license		GNU/GPL, see LICENSE.php
* Joomla! is free software. This version may have been modified pursuant
* to the GNU General Public License, and as distributed it includes or
* is derivative of works licensed under the GNU General Public License or
* other free or open source software licenses.
* See COPYRIGHT.php for copyright notices and details.
*/

// no direct access
defined('_JEXEC') or die('Restricted access');

class modDenVideoHelper
{
	function getVideo( &$params ){
		$video = $params->get('video', '');
		$width = $params->get('width', '');
		$height =$params->get('height', '');
		$autoplay = $params->get('autostart', 0);
		
		// Display Code 
		return showDenVideo( $video, $width, $height, $autoplay );
	}	
}
