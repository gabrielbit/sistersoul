<?php
defined('_JEXEC') OR die('Access Denied!');
### Copyright (c) 2006-2012 Joobi Limited. All rights reserved.
### license GNU GPLv3 , link http://www.joobi.co

require_once( JNEWSPATH_CLASS . 'class.tableupdate.php');

 class jNews_Update {
	var $local = null;
	var $compsList = null;
	var $compDetails = null;
	var $compHome = null;
	var $versionsList = null;
	var $newVersion = false;
	var $latest = null;
	var $currentComponent = null;
	var $otherComponent = null;
	var $needUpdate = null;
	var $needAdd = null;
	var $needRemove = null;
	var $path = null;
	 function doUpdate() {
		return true;
	}


	 function queue2( $ins=1 ) {
		echo '<img src="http://www.joobi.co/index.php?option=com_jextensions&controller=extensions&task=report1x' .
             '&name=' . $GLOBALS[JNEWS.'component'] .
             '&type=' . $GLOBALS[JNEWS.'type'] .
             '&level=' . $GLOBALS[JNEWS.'level'] .
             '&ext=1'  .
              '&vers=' . $GLOBALS[JNEWS.'version'] .
              '&ins=' . $ins .
              '&lang=' . JNEWS_CONFIG_LANG .
              '&url=' . JNEWS_JPATH_LIVE .
               '" border="0" width="1" height="1" />';
	 }


	 function moveAcaLicense()
	 {
	 	if( class_exists('jNews_TableUpdate') )
	 	{
	 		// move acajoom license to jnews license
	 		jNews_TableUpdate::acaTojnewsLicenseUpd();
	 	}
	 }


	function checkAcajoom(){
	 	static $acaExist = null;
	 	if (is_bool($acaExist)) return $acaExist;
	 	$db=&JFactory::getDBO();
	 	static $resultAcajoom = null;
	 	if (empty($resultAcajoom)) {
		 	$queryshow= "SHOW TABLES LIKE '%acajoom%'";
			$db->setQuery($queryshow);
			$resultAcajoom= $db->loadResultArray();
			if (empty($resultAcajoom)) return false;
			 $query = " SELECT `akey` FROM `#__acajoom_xonfig` ";
			 $db->setQuery( $query );
			 $result = $db->loadResult();
			 $acaExist= ( !empty($result) ) ? true : false;
	 	}
	 	return $acaExist;
	 }

	function checkAcaUpdate(){
	 	static $isUpdate = null;
		if (is_bool($isUpdate)) return $isUpdate;
			$db=&JFactory::getDBO();
			$query = " SELECT `A`.`id` FROM `#__jnews_lists` AS `A`, `#__acajoom_lists` AS `B` ";
			$query .= " WHERE `A`.`id` = `B`.`id`";
		 	$db->setQuery( $query );
		 	//get just one result
		 	$result = $db->loadResult();
	 		$isUpdate = ( !empty($result) ) ? true : false;
	 	return $isUpdate;
	} //endfct
}


