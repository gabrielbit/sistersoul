<?php 
defined('_JEXEC') or die('Restricted access'); 
/**
* @version		$Id: mod_jfancy.php 2.03 2010-03-31 $
* @package		jFancy upload Module
* @Copyright Copyright (C) 2010 - joomlaProduction.com
* @license GNU/GPL http://www.gnu.org/copyleft/gpl.html
**/
/*
This file is part of jFancy Upload Module.

    jFancy Upload Module is free software: you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation, either version 3 of the License, or
    (at your option) any later version.

    jFancy Upload Module is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with jFancy Upload Module.  If not, see <http://www.gnu.org/licenses/>.
*/

$document = &JFactory::getDocument();
$document->addStyleSheet(JURI::base()."modules/mod_jfancy/css/jfancy.css");



if ($params->get('mootoolshack', 0)) {
	
	$headerstuff = $document->getHeadData();
	$search = array('mootools', 'caption.js', 'joomla.javascript.js');
	
	foreach($headerstuff['scripts'] as $key => $script) {		
		foreach($search as $findme) {
			if(strpos($key, $findme) !== false) {
				unset($headerstuff['scripts'][$key]);
			}
		}
	}
	$document->setHeadData($headerstuff);
	$document->addScript(JURI::base(). "modules/mod_jfancy/js/mootools-1.2-core-nc.js");
}



$document->addScript(JURI::base(). "modules/mod_jfancy/js/Swiff.Uploader.js");
$document->addScript(JURI::base(). "modules/mod_jfancy/js/Fx.ProgressBar.js");
$document->addScript(JURI::base(). "modules/mod_jfancy/js/FancyUpload2.js");


require(JModuleHelper::getLayoutPath('mod_jfancy'));

function rUri() {
	$uri = JUri::base(true);
	$uri = str_replace('administrator','',$uri);
	return $uri;
}

?> 
