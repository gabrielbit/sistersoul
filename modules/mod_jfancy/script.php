<?php

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
	$updir = getVariable("updir", 'images/');
	$updir = HDir($updir);
	$maxsize = getVariable("mblimit", 10);
	$extensions = getVariable("imgtt", "*.jpg,*.jpeg,*.gif,*.png");
	$extensions = strtolower($extensions);
	$extensions = str_replace("*.", "", $extensions);
	$exts = explode(",", $extensions);

include(dirname(__FILE__) . "/JSON.php");
$result = array();
 
if (isset($_FILES['photoupload']) )
{
	$file = $_FILES['photoupload']['tmp_name'];
	$error = false;
	$size = false;
 
	if (!is_uploaded_file($file) || ($_FILES['photoupload']['size'] > $maxsize * 1024 * 1024) )
	{
		$error = "Please upload only files smaller than $maxsize"."Mb!";
	}
	$size = @getimagesize($file);
	
	if (!in_array(getExt($_FILES['photoupload']['name']), $exts)) {
		$error = "File not supported type;<br>valid extensions are $extensions";
	}
//	if (0)
//	{
//		$error = 'Please upload an image bigger than 25px.';
//	}
	else {
		move_uploaded_file($_FILES['photoupload']['tmp_name'], $updir . $_FILES['photoupload']['name']);
		chmod($updir . $_FILES['photoupload']['name'], 0777);
	}
 
	$addr = gethostbyaddr($_SERVER['REMOTE_ADDR']);
 
	/*
	$log = fopen('script.log', 'a');
	fputs($log, ($error ? 'FAILED' : 'SUCCESS') . ' - ' . preg_replace('/^[^.]+/', '***', $addr) . ": {$_FILES['photoupload']['name']} - {$_FILES['photoupload']['size']} byte\n" );
	fclose($log);*/
 
	if ($error)
	{
		$result['result'] = 'failed';
		$result['error'] = $error;
	}
	else
	{
		$result['result'] = 'success';
		if ($size[0])
			$result['size'] = "Uploaded an image ({$size['mime']}) with  {$size[0]}px/{$size[1]}px.";
		else 
			$result['size'] = "Uploaded an item (.".getExt($_FILES['photoupload']['name']).").";
	}
 
}
else
{
	$result['result'] = 'error';
	$result['error'] = 'Missing file or internal error!';
}
 
if (!headers_sent() )
{
	header('Content-type: application/json');
}
 
echo json_encode($result);
 


function HDir ($dname) {
	if (!defined("DS")) define("DS", "/");
	if (!defined("JPATH_SITE")) define("JPATH_SITE", str_replace("/modules/mod_jfancy", '', dirname(__FILE__)));

	$dname = trim($dname);
	if (strpos($dname, '/')!==0) $dname = JPATH_SITE . DS . $dname;
	if (substr($dname, -1)!=DS) $dname.=DS;
	$dname = str_replace(DS.DS, DS, $dname);
	return $dname;		
}

function getVariable($var, $default = '') {
	$mod = "modules/mod_jfancy";
	$dir = str_replace($mod, '', dirname(__FILE__));
	require_once ($dir."configuration.php");

	$j = new JConfig();
	
	$dbh = mysql_connect($j->host, $j->user, $j->password) or die('error db');
	$dbPrefix = $j->dbprefix;
	$query = "SELECT params FROM $dbPrefix"."modules WHERE module='mod_jfancy' LIMIT 1";
	
	$db = mysql_select_db($j->db, $dbh) or die('error db');
	$result = mysql_query($query);
	$params = mysql_fetch_assoc($result) or die ('error db');
	$params = $params['params'];
		
	$params = explode("\n", $params);	
	
	foreach ($params as $p1) {
		$pp = explode("=", $p1);
		if ($pp[0] == $var) {			
			return ($pp[1]?$pp[1]:$default);
		}
	}
	mysql_close($dbh);
}

function getExt($filename, $infotype = 'extension') {
	$path_info = pathinfo($filename);
	return (isset($path_info[$infotype])?strtolower($path_info[$infotype]):"");		
}


?>