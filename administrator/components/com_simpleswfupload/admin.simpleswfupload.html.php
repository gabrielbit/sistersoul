<?php
/**
* @Copyright Copyright (C) 2010- Gary Teh Name1price.Com
* @license GNU/GPL http://www.gnu.org/copyleft/gpl.html
**/

// no direct access
defined( '_JEXEC' ) or die( 'Restricted access' );

class SimpleSWFUploadView
{
	function showUploadForm(){

		$document =& JFactory::getDocument();  

		$document->setBuffer($listStyle, 'modules', 'submenu');		
		$document->title = "Upload a new document";		
		$document->addScript( AssetsURLocation.'jquery/jquery.js' );		
		$document->addScript( AssetsURLocation.'swfupload/swfupload.js?ver=2.9.2' );
		$document->addScript( AssetsURLocation.'swfupload/swfupload.queue.js?ver=2.9.2' );		
		$document->addScript( AssetsURLocation.'swfupload/fileprogress.js?ver=2.9.2' );				
		$document->addScript( AssetsURLocation.'swfupload/handlers.js?ver=2.9.2' );		
		$document->addStyleSheet(AssetsURLocation.'swfupload/default.css');
						
		
		$session = & JFactory::getSession();		
		
		?>
		

		<script>
			jQuery(document).ready(function() {			
				try{
					var settings = {
						flash_url : '<?php echo AssetsURLocation; ?>swfupload/swfupload.swf',
						upload_url: '<?php echo JURI::root(); ?>administrator/components/com_simpleswfupload/uploadhandler.php',
						//upload_url: '<?php echo JURI::root(); ?>administrator/',
						post_params: {
							'format' : 'raw',
							'swfupload' : '1',
							 '<?php echo $session->getName();?>' : '<?php echo $session->getId();?>',	

						},
						file_size_limit : '5 MB',
						file_types : '*.*;', 
						file_types_description : 'All Files',
						file_upload_limit : 100,
						file_queue_limit : 0,
						custom_settings : {
							progressTarget : 'fsUploadProgress',
							cancelButtonId : 'btnCancel'
						},
						debug: false,
			
						// Button settings
						button_image_url: '<?php echo AssetsURLocation; ?>swfupload/upload.png',
						button_width: '132',
						button_height: '24',
						button_placeholder_id: 'spanButtonPlaceHolder',
						button_text: "<span class='button'>Upload a File</span>",
						button_text_style: ".button{ text-align: center; font-weight: bold; font-family:'Lucida Grande','Lucida Sans Unicode',Tahoma,Verdana,sans-serif; }",
						button_text_left_padding: 0,
						button_text_top_padding: 2,
						
						// The event handler functions are defined in handlers.js
						file_queued_handler : fileQueued,
						file_queue_error_handler : fileQueueError,
						file_dialog_complete_handler : fileDialogComplete,
						upload_start_handler : uploadStart,
						upload_progress_handler : uploadProgress,
						upload_error_handler : uploadError,
						upload_success_handler : uploadSuccess,
						upload_complete_handler : uploadComplete,
						queue_complete_handler : queueComplete	// Queue plugin event
					};		
					
					//alert(swfu );
					if(typeof swfu == "undefined"){
						swfu = new SWFUpload(settings);
						
						/*
						//echos all the post parameters of this object
						for(var i in swfu.settings.post_params){
							alert(swfu.settings.post_params[i])
						}
						*/
					}
				}
				catch(exception){
					alert('Cannot upload xml this time '+exception);
				}	
			});		
		</script>		
			<div align='center'>


				<div style='height:10px;'></div>
			
				<div id='divStatus'></div>
				<div class='fieldset flash' id='fsUploadProgress'>
					<span class='legend' style='display:none;'>Upload Queue</span>
				</div>

				<div id='divStatus' style='display:none;'>0 Files Uploaded</div>

			
				<div class='flash-image-uploader'>
					<span id='spanButtonPlaceHolder'></span>
				<div id='media-items-library'> </div>
				</div>		
			
	
			</div>

		
		<?php	
	
	}
}

?>