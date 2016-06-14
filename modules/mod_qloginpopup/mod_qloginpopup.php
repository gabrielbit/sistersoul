<?php
/**
 * @package 	Qloginpopup for Joomla! 1.5
 * @version 	$Id: mod_qloginpopup.php 002 2010-12-07 02:26:33Z NetQ $
 * @author 		NETQ CREATIVE SOFTWARE (service@netqcreative.com)
 * @copyright 	Copyright (C) 2010- NETQ CREATIVE SOFTWARE
 * @license 	GNU/GPL http://www.gnu.org/copyleft/gpl.html
 */

// no direct access
defined('_JEXEC') or die ('Restricted access');

require(dirname(__FILE__).DS.'helper.php');

$doc = &Jfactory::getDocument();
$doc->addStyleSheet(JURI::root(true).'/modules/mod_qloginpopup/css/qloginpopup.css');

$params->def('greeting', 1);

$type 	= modQLoginpopupHelper::getType();
$return	= modQLoginpopupHelper::getReturnURL($params, $type);

$user =& JFactory::getUser();

require(JModuleHelper::getLayoutPath('mod_qloginpopup', 'default'));
?>
