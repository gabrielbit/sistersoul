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

?>

<script type="text/javascript">

window.addEvent('load', function() {
	  
		var swiffy = new FancyUpload2($('jf_status'), $('jf_list'), {
			url: $('form-jf').action,
			fieldName: 'photoupload',
			path: '<?php echo JURI::base() .DS."modules".DS."mod_jfancy".DS;?>Swiff.Uploader.swf',
			limitSize: <?php echo $params->get('mblimit', 20);?> * 1024 * 1024,
			onLoad: function() {
				$('jf_status').removeClass('hide');
				$('jf_fallback').destroy();
			},
			debug: false,
			target: 'jf_browse'
		});
	 
	 
		$('jf_browse').addEvent('click', function() {
			swiffy.browse();
			return false;
		});
	 
		$('jf_select-images').addEvent('change', function() {
			var filter = null;
			if (this.checked) {
				<?php
					$imgTypes = $params->get('imgtt', '*.jpg,*.jpeg,*.gif,*.png');
					$imgTypes = str_replace(',', '|', $imgTypes);
					$imgTypes = explode('|', $imgTypes);
				?>
				filter = {'Images (<?php echo implode(', ', $imgTypes);?>)': '<?php echo implode('; ', $imgTypes);?>'};
			}
			swiffy.options.typeFilter = filter;
		});
	 
		$('jf_clear').addEvent('click', function() {
			swiffy.removeFile();
			return false;
		});
	 
		$('jf_upload').addEvent('click', function() {
			swiffy.upload();
			return false;
		});
	 
	});
	</script>
	
	<?php
		$ds = $params->get('divstyle', '');
		if ($ds) {
			?>
			<style>
				<?php echo $ds;?>
			</style>
			<?php
		}
	?>

<form action="<?php echo rUri().DS;?>modules/mod_jfancy/script.php" method="post" enctype="multipart/form-data" id="form-jf">
	<fieldset id="jf_fallback">
		<legend><?php echo JText::_('FILEUPLOAD');?></legend>
		<p>
			<?php echo JText::_('SELECTPHOTO');?>.<br />
		</p>
		<label for="jf_photoupload">
			<?php echo JText::_('UPLOADPHOTOS');?>:
			<input type="file" name="photoupload" id="jf_photoupload" />
		</label>
	</fieldset>
 
	<div id="jf_status" class="hide">
		<p>
			<a href="#" id="jf_browse"><?php echo JText::_('BROWSEFILES');?></a> |
			<input type="checkbox" id="jf_select-images" /> <?php echo JText::_('IMAGESONLY');?> |
			<a href="#" id="jf_clear"><?php echo JText::_('CLEARLIST');?></a> |
			<a href="#" id="jf_upload"><?php echo JText::_('UPLOAD');?></a>
		</p>
		<div>
			<strong class="overall-title"><?php echo JText::_('OVERALLPROGRESS');?></strong><br />
			<img src="modules/mod_jfancy/assets/progress-bar/bar.gif" class="progress overall-progress" />
		</div>
		<div>
			<strong class="current-title"><?php echo JText::_('FILEPROGRESS');?></strong><br />
			<img src="modules/mod_jfancy/assets/progress-bar/bar.gif" class="progress current-progress" />
		</div>
		<div class="current-text"></div>
	</div>

	<ul id="jf_list"></ul>
	
</form>
