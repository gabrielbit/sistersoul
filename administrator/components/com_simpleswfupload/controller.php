<?php
/**
* @Copyright Copyright (C) 2010- Gary Teh Name1price.Com
* @license GNU/GPL http://www.gnu.org/copyleft/gpl.html
**/


// no direct access
defined('_JEXEC') or die('Restricted access');

jimport( 'joomla.application.component.controller' );

class SimpleSWFUploadController extends JController
{

	function display()
	{


		SimpleSWFUploadView::showUploadForm();		
	}
}
?>