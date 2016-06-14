<?php
/**
* @package 		mod_customcssjs
* @copyright	Copyright (C) Computer - http://www.saaraan.com. All rights reserved.
* @license		http://www.gnu.org/copyleft/gpl.html GNU/GPL, see LICENSE.php
* @author		Saran Chamling (saaraan@gmail.com)
* @download URL	http://www.saaraan.com
*/
defined('_JEXEC') or die('Restricted access');

$document =& JFactory::getDocument();
if ($params->get('headstuff')!="")
{
	$document->addCustomTag($params->get('headstuff'));
}
if ($params->get('extracss')!="")
{
	$document->addCustomTag('
	<style type="text/css"> 
	<!--
	'. $params->get('extracss'). ' 
	-->
	</style>');
}
if ($params->get('extrajs')!="")
{
	$document->addScriptDeclaration($params->get('extrajs'));
}
if ($params->get('cssfiles')!="")
{
	$cssoriginal =  preg_replace('/\r?\n/', ' ', $params->get('cssfiles')); 

	$cssfileschunks = explode(" ", $cssoriginal);

	for($i = 0; $i < count($cssfileschunks); $i++){

		$document->addStyleSheet($cssfileschunks[$i]);
	}
}

if ($params->get('jsfiles')!="")

{
	$jssoriginal =  preg_replace('/\r?\n/', ' ', $params->get('jsfiles')); 

	$jsfileschunks = explode(" ", $jssoriginal);

	for($i = 0; $i < count($jsfileschunks); $i++){

		$document->addScript($jsfileschunks[$i]);
	}
}
if ($params->get('extrahtml')!="")
{
	echo $params->get('extrahtml');
}
?>