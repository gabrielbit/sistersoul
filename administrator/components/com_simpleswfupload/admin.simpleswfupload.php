<?php
/**
* @Copyright Copyright (C) 2010- Gary Teh Name1price.Com
* @license GNU/GPL http://www.gnu.org/copyleft/gpl.html
**/


defined('_JEXEC') or die('Restricted access');

require_once( JPATH_COMPONENT.DS.'controller.php' );
require_once( JPATH_COMPONENT.DS.'configuration.php' );
require_once (JApplicationHelper::getPath('admin_html'));

$controller= new SimpleSWFUploadController();
$controller->execute(JRequest::getCmd('task'));
$controller->redirect();
?>