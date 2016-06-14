<?php
/**
* @Copyright Copyright (C) 2010- Gary Teh Name1price.Com
* @license GNU/GPL http://www.gnu.org/copyleft/gpl.html
**/

// no direct access
defined( '_JEXEC' ) or die( 'Restricted access' );



require_once( JApplicationHelper::getPath( 'toolbar_html' ) );

switch ($task)
{
	default:
		TOOLBAR_content::_DEFAULT();
		break;
}