<?php
/**
 * @version		$Id: mod_dencode.php 0.15
 * @package		Joomla 1.5, denCode 0.15
 * @copyright	Copyright (C) 2005 - 2007 Open Source Matters. All rights reserved.
 * @license		GNU/GPL, see LICENSE.php
 * Joomla! is free software. This version may have been modified pursuant
 * to the GNU General Public License, and as distributed it includes or
 * is derivative of works licensed under the GNU General Public License or
 * other free or open source software licenses.
 * See COPYRIGHT.php for copyright notices and details.
 */
// no direct access
defined('_JEXEC') or die('Restricted access');

// Try to import denVideo
jimport('joomla.application.component.helper');
if( !JComponentHelper::isEnabled('com_jmultimedia', true) ){
	$error = JText::_('Module requires the JMultimedia component');
	include( JModuleHelper::getLayoutPath('mod_jmultimedia', '_error') );
	return;
}
// Component parameters
$cparams =& JComponentHelper::getParams('com_jmultimedia'); 

// Language
$language =& JFactory::getLanguage();
$language->load('com_jmulimedia');

// Sytle
if($option != 'com_jmultimedia' ){
	$style = $cparams->get('style', 'default.css');
	$document =& JFactory::getDocument();
	$document->addStyleSheet( JURI::base().'/components/com_jmultimedia/assets/'.$style ); 
}
	
// Include the syndicate functions only once
include_once( dirname(__FILE__).DS.'helper.php' );
include_once(JPATH_SITE.DS.'components'.DS.'com_jmultimedia'.DS.'helpers'.DS.'player.php');

// List
$list =  modJMultimediaHelper::getList($params);
if( empty($list)  ){
	$error= JText::_('Resource not found');
	$params->set('layout', '_error');
}

// Display
$layout =  $params->get('layout', 'default' );
include( JModuleHelper::getLayoutPath('mod_jmultimedia', $layout) );