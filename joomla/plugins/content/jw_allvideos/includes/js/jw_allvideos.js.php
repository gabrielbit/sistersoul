<?php
/**
 * @version		4.1
 * @package		AllVideos (plugin)
 * @author    JoomlaWorks - http://www.joomlaworks.gr
 * @copyright	Copyright (c) 2006 - 2011 JoomlaWorks Ltd. All rights reserved.
 * @license		GNU/GPL license: http://www.gnu.org/copyleft/gpl.html
 */

if(!defined('DS')) define('DS', DIRECTORY_SEPARATOR);

header("Content-type: text/javascript; charset: UTF-8");
header("Cache-Control: must-revalidate");
header("Expires: ".gmdate("D, d M Y H:i:s", time() + 60 * 60)." GMT");

ob_start("ob_gzhandler");

// Includes
echo "/* jwplayer.js */\n";
include(dirname( __FILE__ ).DS."mediaplayer".DS."jwplayer.js");
echo "\n\n";
echo "/* silverlight.js */\n";
include(dirname( __FILE__ ).DS."wmvplayer".DS."silverlight.js");
echo "\n\n";
echo "/* wmvplayer.js */\n";
include(dirname( __FILE__ ).DS."wmvplayer".DS."wmvplayer.js");
echo "\n\n";
echo "/* AC_QuickTime.js */\n";
include(dirname( __FILE__ ).DS."quicktimeplayer".DS."AC_QuickTime.js");
echo "\n\n";

ob_end_flush();
