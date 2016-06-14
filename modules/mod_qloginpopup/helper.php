<?php
/**
 * @package 	Qloginpopup for Joomla! 1.5
 * @version 	$Id: helper.php 002 2010-12-07 02:26:33Z NetQ $
 * @author 		NETQ CREATIVE SOFTWARE (service@netqcreative.com)
 * @copyright 	Copyright (C) 2010- NETQ CREATIVE SOFTWARE
 * @license 	GNU/GPL http://www.gnu.org/copyleft/gpl.html
 */

// no direct access
defined('_JEXEC') or die ('Restricted access');
class modQloginpopupHelper{
	function getType(){
		$user = & JFactory::getUser();
		return (!$user->get('guest')) ? 'logout' : 'login';
	}
	
	function getReturnURL($params, $type)
	{
		if($itemid =  $params->get($type)){  
			$menu =& JSite::getMenu();  
			$item = $menu->getItem($itemid); 
			if ($item)	{
				$url = JRoute::_($item->link.'&Itemid='.$itemid, false);
			}else	{
			// stay on the same page
			$uri = JFactory::getURI();
			$url = $uri->toString(array('path', 'query', 'fragment'));
			}
		}else{
			// stay on the same page
			$uri = JFactory::getURI();
			$url = $uri->toString(array('path', 'query', 'fragment'));
		}
	return base64_encode($url);
	}
}
?>
