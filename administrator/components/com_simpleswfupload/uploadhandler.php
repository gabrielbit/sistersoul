<?php
/**
* @Copyright Copyright (C) 2010- Gary Teh Name1price.Com
* @license GNU/GPL http://www.gnu.org/copyleft/gpl.html
**/



require_once(dirname(__FILE__)."/file_uploader.php"); //Load Biz-Directory Config File

//ensures only xml files are uploaded.
if(strtolower(substr($_FILES['Filedata']['name'], (strlen($_FILES['Filedata']['name']))-4, 4))== '.php'){
	echo "Sorry for security purposes uploading of PHP files are allowed ";
	exit();
}

else if(is_file('../../../images/stories/'.$_FILES['Filedata']['name'])){
	echo "Sorry only XML Workfow file with Name [".$_FILES['Filedata']['name']."] already exist";
	exit();
}
$file_name = file_uploader_upload_normal($_FILES['Filedata'],  '../../../images/stories/');			
echo "Upload Completed For File ".$_FILES['Filedata']['name'];
exit();

?>