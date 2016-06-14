<?php
/**
* @Copyright Copyright (C) 2010- Gary Teh Name1price.Com
* @license GNU/GPL http://www.gnu.org/copyleft/gpl.html
**/


//recursively hash file name uptill slot is available
function file_uploader_upload_hashed_name($File, $path){

	$exist_already = false;
	$hash_value = 'test';

	do{
		$hash_value = file_uploader_get_file_id_key($File);
		$File['name']['file'] = $hash_value ;
	}while(
		$exist_already = file_exists($path.$hash_value.".".file_uploader_get_filetype($File)	)
	);

	$uploadfile = 	$path.
						$hash_value.".".
						file_uploader_get_filetype($File);	

	if( move_uploaded_file($File['tmp_name']['file'], 'gary123.jpg') ){

		return $hash_value.".".file_uploader_get_filetype($File);
	}	
	else{

		return false;
	}
}

//recursively hash file name uptill slot is available for SWF Upload
function file_uploader_upload_hashed_name_swf($File, $path){

	$exist_already = false;
	$hash_value = 'test';
	//print_r($File);
	do{

		//echo $File['name']."\r\n";
		$hash_value = md5($File['name']);			
		$File['name'] = $hash_value.".".file_uploader_swf_type_finder($File['name']);
		//echo "checking ".$path.$hash_value.".".file_uploader_swf_type_finder($File['name'])."\r\n";		
	}while(
		$exist_already = file_exists($path.$hash_value.".".file_uploader_swf_type_finder($File['name'])	)
	);

	$uploadfile = 	$path.
						$hash_value.".".
						file_uploader_swf_type_finder($File['name']);	
	/*
	if( move_uploaded_file($File['tmp_name']['file'], $uploadfile) ){
		echo "Successful upload";
		return $hash_value.".".file_uploader_get_filetype($File);
	}
	*/
	//echo "uploading to $uploadfile \r\n";

	if( move_uploaded_file($File['tmp_name'], $uploadfile) ){
		//echo "Successful upload";
		return $hash_value.".".file_uploader_swf_type_finder($File['name']);
	}	
	else{
		//echo "Failed upload";	
		return false;
	}
}

function file_uploader_swf_type_finder($filename){
	$filename = explode(".",$filename);
	return $filename[count($filename)-1];
}

//uploads the file as per normal
function file_uploader_upload_normal($File,  $path){

	if( move_uploaded_file($File['tmp_name'], $path.$File['name']) ){
		return true;
	}
	else{
		return false;
	}
}

//deletes a file
function file_uploader_deleteFile($File, $path){
	unlink($path.$File);
}

function file_uploader_get_filetype($File){
	$type = $File["type"]['file'];			
	$type = strstr ( $type, '/');
	$type = substr($type, 1); 

	return $type;
}

function file_uploader_get_file_id_key($File){

	$ID = md5($File['name']['file']);		

	return $ID;
}

?>