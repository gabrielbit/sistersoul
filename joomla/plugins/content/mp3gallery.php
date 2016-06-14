<?php
/**
 * Simple Audio Gallery 
 * @package		MP3Browser
 * @author      Parvez Akther
 * @copyright	Copyright (C) 2010 ThemeXpert ,
 * @license		GNU/GPL. http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
 */
// Check to ensure this file is included in Joomla!
defined( '_JEXEC' ) or die( 'Restricted access' );
define('PLUGIN_PATH','plugins/content/mp3gallery/');

$mainframe->addCustomHeadTag('<link rel="stylesheet" href="'. JURI::base().PLUGIN_PATH.'sag_style.css" type="text/css" />');
$mainframe->addCustomHeadTag('<script src="'. JURI::base().PLUGIN_PATH.'sag_player.js" type="text/javascript"></script>');
$mainframe->addCustomHeadTag('<script src="'. JURI::base().PLUGIN_PATH.'swfobject.js" type="text/javascript"></script>');

$mainframe->registerEvent( 'onPrepareContent', 'pluginMp3gallery' ); 

function pluginMp3gallery( &$row, &$params )
{	
    //Featch all {music} tags in content items
	if (preg_match_all("#{mp3_gallery}(.*?){/mp3_gallery}#s", $row->text, $matches, PREG_PATTERN_ORDER) > 0) {
	
	    $josConfig_absolute_path = JPATH_SITE;
	    $josConfig_live_site = JURI :: base();
	    if(substr($josConfig_live_site, -1)=="/") $josConfig_live_site = substr($josConfig_live_site, 0, -1);
	    $browserpath = $josConfig_live_site.PLUGIN_PATH;
        
	    //get instance of helper plugin
	    $plugin =& JPluginHelper::getPlugin('content', 'mp3gallery');
	    $params = new JParameter( $plugin->params );
        
        //Fetch All plugin params
	    $sortByAsc        = $params->get('sortBy', '0');
	    $nameHeaderText   = $params->get('nameHeaderText', 'Name');
	    $playHeaderText   = $params->get('playHeaderText', 'Play');	
        $playerWidth      = $params->get('playerWidth', '300');
        $playerHeight     = $params->get('playerHeight', '40');
        $player           = $params->get('player','sap');
        
        $mp3Info = array();

	    foreach ($matches[0] as $match) {
            
            //temp file path
            $_temp = preg_replace("/{.+?}/", "", $match);
            
            //Set a error message
            $error= "No mp3 file found on this directory:<strong>$josConfig_live_site/$_temp</strong>";    
            
            //Fetch All mp3 filename and and insert into an array
            if ($handle = opendir(JPATH_SITE.DS.$_temp)) {
                $musicDir=$josConfig_live_site."/".$_temp;
                $count=0;
                $mp3Array='';
                while ((false !== ($file = readdir($handle)))) {
                    $fileType =substr($file, strrpos($file, '.'));
                    if($file!="." && $file!=".." && ($fileType=='.mp3' || $fileType=='.MP3')){
                        $mp3Array[$count]=$file;
                        $count++;
                    }
                }
            }
            
            if($count>1){
                if($sortByAsc)sort($mp3Array,SORT_STRING);
                else rsort($mp3Array,SORT_STRING);
                
                for($count=0;$count<sizeof($mp3Array);$count++){
                    $file=$mp3Array[$count];
                    //$autoStart = ($playFirst && $count==0)? 'yes':'no';
                    
                    //Fetch Mp3 title from file name
                    $title=  substr($file,0,-4);
                    $rowStyleClass = ($count%2)? 'odd': 'even';                    
                    
                    $mp3Info [$count] = array(
                                'title'             => $title,
                                'pluginPath'        => JURI::base().PLUGIN_PATH,
                                'id'                => $count,
                                'height'            => $playerHeight,
                                'width'             => $playerWidth,
                                'leftBg'            => $params->get('leftBg', '565656'),
                                'leftIcon'          => $params->get('leftIcon', 'ffffff'),
                                'rightBg'           => $params->get('rightBg', '434343'),
                                'rightBgHover'      => $params->get('rightBgHover', '74afe6'),
                                'rightIcon'         => $params->get('rightIcon', '666666'),
                                'rightIconHver'     => $params->get('rightIconHover', 'ffffff'),
                                'text'              => $params->get('text', '2565a1'),
                                'track'             => $params->get('track', 'ffffff'), 
                                'border'            => $params->get('border', '8a8a8a'),
                                'loader'            => $params->get('loader', '2565a1'),
                                'autoStart'         => ($playFirst && $count==0)? 'yes':'no',
                                'filePath'          => $musicDir.'/'.$file,
                                'shuffle'           => ($shuffle)? $shuffle='yes':$shuffle='no'
                    );        
                } //end for loop
                
                switch($player){
                    case 'sap': 
                        displaySAP(&$row, $mp3Info, $_temp);
                    break;
                            
                    case 'gap':
                        displayGAP(&$row, $mp3Info, $_temp);
                    break;
                }   
            }
            
            else $row->text = preg_replace( "#{mp3_gallery}".$_temp."{/mp3_gallery}#s", $error , $row->text );                   
        }
        closedir($handle);
	        
	}
}

function displaySAP(&$row, $mp3Info, $_temp){
    $html ='<table class="mp3gallery">
            <tr>
                <th>Name</th>
                <th>Mp3</th>
            </tr>';
            
    foreach($mp3Info as $mp3){
        $html .= '<tr class="test">';    
        $html .= '<td>'.$mp3['title'].'</td>';
        
        $html .= '<td>
        <object type="application/x-shockwave-flash" data="'. $mp3['pluginPath'] .'sag_player.swf" id="'.$mp3['id'].'" height="'.$mp3['height'].'" width="'.$mp3['width'].'">
        <param name="movie" value="'. $mp3['pluginPath'].'sag_player.swf" />
        <param name="FlashVars" value="playerId='.$mp3['id'].'bg=0xec1313&leftbg=0x'.$mp3['leftBg'].'&lefticon=0x'.$mp3['leftIcon'].'&rightbg=0x'.$mp3['rightBg'].'&rightbghover=0x'.$mp3['rightBgHover'].'&righticon=0x'.$mp3['rightIcon'].'&righticonhover=0x'.$mp3['rightIconHover'].'&text=0x'.$mp3['text'].'&track=0x'.$mp3['track'].'&border=0x'.$mp3['border'].'&loader=0x'.$mp3['loader'].'&loop='.$mp3['shuffle'].'&autostart='.$mp3['autoStart'].'&soundFile='.$mp3['filePath'].'" />                
        <param name="quality" value="high" />
        <param name="menu" value="false" />
        <param name="wmode" value="opaque" />
        </object>
        </td>';  
        $html .='</tr>';
    }
    
    $html .= '</table>';
    $row->text = preg_replace( "#{mp3_gallery}".$_temp."{/mp3_gallery}#s", $html , $row->text );  
    
}

function displayGAP(&$row, $mp3Info, $_temp){
    $html ='<table class="mp3gallery">
            <tr>  
                <th>Name</th>
                <th>Mp3</th>
            </tr>';
    foreach($mp3Info as $mp3){
        $html .= '<tr class="test">';    
        $html .= '<td>'.$mp3['title'].'</td>';
        
        $html .= '<td><embed src="http://www.google.com/reader/ui/3247397568-audio-player.swf" flashvars="audioUrl='.$mp3['filePath'].'"width="'.$mp3['width'].'" height="'.$mp3['height'].'" pluginspage="http://www.macromedia.com/go/getflashplayer"></embed>
    </td>';
    $html .='</tr>';
    }
    
    $html .= '</table>';
    $row->text = preg_replace( "#{mp3_gallery}".$_temp."{/mp3_gallery}#s", $html , $row->text );  
}

?>