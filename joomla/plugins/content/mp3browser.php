<?php
/**
 * @version		$Id: mp3browser.php 1.5.18 28-07-2010 Jon Hollis
 * @package		MP3Browser
 * @copyright	Copyright (C) 2010 Dotcomdevelopment. http://www.dotcomdevelopment.com
 * @license		GNU/GPL. http://www.gnu.org/licenses/gpl.html
 */

// Check to ensure this file is included in Joomla!
defined( '_JEXEC' ) or die( 'Restricted access' );
$mainframe->registerEvent( 'onPrepareContent', 'pluginMp3browser' ); 

function pluginMp3browser( &$row, &$params ) {
     
    //Find all {music} tags in content items
	if ( preg_match_all("#{music}(.*?){/music}#s", $row->text, $matches, PREG_PATTERN_ORDER) > 0 ) {
	
	//If found load config
		// j!1.5 paths
	$mosConfig_absolute_path = JPATH_SITE;
	$mosConfig_live_site = JURI :: base();
	if(substr($mosConfig_live_site, -1)=="/") $mosConfig_live_site = substr($mosConfig_live_site, 0, -1);
	$browserpath = $mosConfig_live_site . "/plugins/content/mp3browser/";
	
	require_once("mp3browser".DS."getid3.php");

	//Load Plugin parameters and set defaults 
	$plugin =& JPluginHelper::getPlugin('content', 'mp3browser');
	$pluginParams = new JParameter( $plugin->params );
	$maxRows = $pluginParams->get('maxRows', '20');
	$showDownload = $pluginParams->get('showDownload', '1');
	$showSize = $pluginParams->get('showSize', '1');
	$showLength = $pluginParams->get('showLength', '1');
	
	$downloadText = $pluginParams->get('downloadText', 'Download');
	$nameText = $pluginParams->get('nameText', 'Name');
	$playText = $pluginParams->get('playText', 'Play');
	$sizeText = $pluginParams->get('sizeText', 'Size');
	$lengthText = $pluginParams->get('lengthText', 'Length');
	$sortByAsc = $pluginParams->get('sortBy', '0');
	
	$tableWidth = $pluginParams->get('tableWidth', 0);
	
	if ( $tableWidth==0 ) $tableWidth = '100%';
	else $tableWidth = $tableWidth . 'px';
	
	$headerHeight = $pluginParams->get('headerHeight', 35);
	$rowHeight = $pluginParams->get('rowHeight', 50);
	$bottomRowBorder = $pluginParams->get('bottomRowBorder', '#C0C0C0');
	$primaryRowColor = $pluginParams->get('primaryRowColor', '#ffffff');
	$headerColor = $pluginParams->get('headerColor', '#cccccc');
	$altRowColor = $pluginParams->get('altRowColor', '#D6E3EB');
	$downloadColWidth = $pluginParams->get('downloadColWidth', 90);
	$downloadImage = $pluginParams->get('downloadImage', 0);
	
	$backlink = $pluginParams->get('backlink', 1);
	
	if ( $downloadImage===0 ) {
	    $downloadImage='downloadtune.jpg';
	}
	
	$downloadImageAlt = $pluginParams->get('downloadImageAlt', 0);
	
	if ( $downloadImageAlt===0 ) {
	    $downloadImageAlt='downloadtune-blue.jpg';
	}
	
	foreach ($matches[0] as $match) {
		$_temp = preg_replace("/{.+?}/", "", $match);
			
		//print table styles
		$html = '
		
		
    		<!-- START: mp3 Browser --> 
    		<style type="text/css">
    			table.mp3browser td.center { text-align:center; }
    			table.mp3browser td { text-align:left; height:' . $rowHeight . 'px } 
    			.mp3browser tr.musictitles td { height:' . $headerHeight . 'px; } 
    			.mp3browser tr.musictitles { vertical-align:middle; background-color:'  . $headerColor . '; font-weight:bold; margin-bottom:15px; }
                .mp3browser td, .mp3browser th { padding:1px; vertical-align:middle; }
                .musictable { border-bottom:1px solid ' . $bottomRowBorder . '; text-align:left; height:' . $rowHeight . 'px; vertical-align:middle; }
                .mp3browser tr {background-color:' . $primaryRowColor . ' }
                .mp3browser a:link, .mp3browser a:visited { color:#1E87C8; text-decoration:none; }
                .mp3browser .colourblue { background-color:' . $altRowColor . '; border-bottom:1px solid #C0C0C0; text-align:left; }
            </style>
        ';
			
		//print table headers
		$html .= '
			<img src="templates/sister/images/temasTitle.png">
    		<div  style="width:' . $tableWidth . '"  class="mp3browser" style="text-align: left;">
    		   ';
		
		
		
		
		//print table rows for each mp3 in directory
		if ( $handle = opendir( JPATH_SITE.DS . $_temp )) {
		    
			$musicDir = $mosConfig_live_site . "/" . $_temp;
            
            // added for force download 
            // NOT USED DUE TO THE HUGE SECURITY WHOLE THAT THIS EXPOSES BY ENABLING USERS TO DOWNLOAD ALL SITE FILES
            $mp3dldir = $_temp;
            
			$dir_array = array();
			$i = 0;
			$count = 0;
			$narray = '';
			
			while (false !== ( $file = readdir($handle)) ) {
				$fileType = substr( $file, strrpos($file, '.') );
				
				if ( $file != "." && $file != ".." && $fileType == '.mp3' ) {
					$narray[$count] = $file;
        			$count++;
				}
			}
			
			if( $sortByAsc )
			    sort( $narray,SORT_STRING );
			else
			    rsort( $narray,SORT_STRING );
			
			$numRows = sizeof( $narray );
			if ( $numRows > $maxRows ) {
			  $numRows = $maxRows;
			}
			
        	for( $count=0; $count<$numRows; $count++ ) {
        	    
        		$file = $narray[$count];
        		$artist = '';
        		$filesize = '';
        		$filetoget = JPATH_SITE.DS.$_temp.DS.$file;
				
				$getID3 = new getID3;
				
				$getID3->encoding = 'UTF-8';
				$ThisFileInfo = $getID3->analyze($filetoget);
				getid3_lib::CopyTagsToComments($ThisFileInfo);
				
				//If title tag found use that else use file name -mp3
				if ( isset( $ThisFileInfo['comments']['title'][0] ) )
					$title = $ThisFileInfo['comments']['title'][0];
				else $title = substr($file,0,-4);
				
			    //Calculate filesize
			    $filesize = ( filesize(JPATH_SITE.DS.$_temp.DS.$file) * .0009765625 ) * .0009765625;
			    $filesize = round($filesize, 1);
			   
			    //print artist name if present
				if ( isset ( $ThisFileInfo['comments']['artist'][0] ) ){
					$artist = '' . $ThisFileInfo['comments']['artist'][0] . '';
				}
				
				$playtime = $ThisFileInfo [ 'playtime_string' ];
				
				
		        $html .= '
					<div class="filaTema">
					<div class="tema">
		            <div class="titulo"> ';
		        
			    
			    
		        $html .= '<strong class="tipo">'.$title.'</strong><br/>' . $artist . '</div>
		            <div class="audio">
		                ';
		        
				
				
				$html .= '


<object type="application/x-shockwave-flash" data="http://flash-mp3-player.net/medias/player_mp3_maxi.swf" width="360" height="20">
    <param name="movie" value="http://flash-mp3-player.net/medias/player_mp3_maxi.swf" />
    <param name="bgcolor" value="#ffffff" />
    <param name="FlashVars" value="mp3=' . $musicDir . '/' . $file . '&amp;width=360&amp;showvolume=1&amp;showloading=always&amp;buttonwidth=30&amp;bgcolor1=C3036D&amp;bgcolor2=580131&amp;loadingcolor=33001C&amp;buttoncolor=FFCCE8&amp;buttonovercolor=FFCCE8&amp;slidercolor1=FFCCE8&amp;slidercolor2=BB0067&amp;sliderovercolor=4A0029" />
	<param name="wmode" value="transparent">
</object>

</div>';


			
				$html .= '</div>
				</div>';
				
				
				
				
				
				/*-if ( $showSize ) {
				    $html .= '
				    <td>'.$filesize.' MB</td>';
				}
				
				if ( $showLength ) {
				    $html .= '
				    <td>'.$playtime.' min<br/></td>
				</tr>';
				}-*/

				$i = 1-$i;
			}
		}
		
		/*-if ( $backlink ) {
		    
		    $html .= '
    		    <tr style="height:30px !important;">
		            <td colspan="5" style="text-align:right; height:30px !important;"><a href="http://www.dotcomdevelopment.com" style="color:'  . $headerColor . ' !important; font-size:11px; font-weight:normal; margin-right:7px;" title="Joomla web design Birmingham">Joomla! web design...</a>&nbsp;</td>
		        </tr>
		    ';
		}-*/
		
		$html .= '
		    </div>
		    <!-- END: mp3 Browser -->
		    
		';

		$row->text = preg_replace( "#{music}".$_temp."{/music}#s", $html , $row->text ); 
		
		closedir($handle);
		}
	}
}

?>
