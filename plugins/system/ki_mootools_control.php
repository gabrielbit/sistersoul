<?php
/*
// Kinesphère "Mootools Control" Plugin for Joomla! 1.5.x - Version 0.1
// License: http://www.gnu.org/copyleft/gpl.html
// Copyright (c) 2009 Kinesphère
// More info at http://www.kinesphere.fr
*/

// no direct access
defined( '_JEXEC' ) or die( 'Restricted access' );

class plgSystemki_mootools_control extends JPlugin
{
	//Constructeur
	function plgSystemki_mootools_control( &$subject )
	{
		parent::__construct( $subject );
		// load plugin parameters
		$this->_plugin = JPluginHelper::getPlugin( 'system', 'ki_mootools_control' );
		$this->_params = new JParameter( $this->_plugin->params );
	}


	function onPrepareContent(&$row, &$params, $limitstart) {
		// just startup
		global $mainframe;

		$plugin =& JPluginHelper::getPlugin('system', 'ki_mootools_control');
		$pluginParams = new JParameter( $plugin->params );

		// j!1.5 paths
		$mosConfig_absolute_path 	= JPATH_SITE;
		$mosConfig_live_site 		= $mainframe->isAdmin() ? $mainframe->getSiteURL() : JURI::base();
		if(substr($mosConfig_live_site, -1)=="/") $mosConfig_live_site = substr($mosConfig_live_site, 0, -1);

		// Paramètres
		$dossier 		= $pluginParams->get('ki_mootools_control_ch_mootools', 'media/mootools.js');
		$no_mootools	= $pluginParams->get('ki_mootools_control_mootools', '1');
		$no_caption 	= $pluginParams->get('ki_mootools_control_caption', '1');
		$new_mootools 	= $pluginParams->get('ki_mootools_control_remp', '1');

		// on vérifie un peu l'adresse du dossier
		if (!preg_match("#.js$#", $dossier)) $dossier_ok = 0;
		else $dossier_ok = 1;
		if (preg_match("#^/#", $dossier))  $dossier = preg_replace('#^/(.+)#i', '$1', $dossier);
	
		// Ajout du CSS & du JS _______________________________________________________________________

		$user = &JFactory::getUser ();
		if ($user->get( 'guest') == 1) {
			// on enlève le mootools de joomla !
			if ($no_mootools == 1 || $no_caption == 1) {
				$doc =& JFactory::getDocument();
				$headerstuff = $doc->getHeadData();

				foreach ($headerstuff['scripts'] as $adresse => $type) {
					if (preg_match("#mootools.js#s", $adresse)) $moo = $adresse;
					if (preg_match("#caption.js#s",  $adresse)) $cap = $adresse;
				}

				if ($no_caption == 1 && $no_mootools == 1) {
					unset($headerstuff['scripts'][$cap]);
					unset($headerstuff['scripts'][$moo]);					
				}
				elseif ($no_caption == 1) unset($headerstuff['scripts'][$cap]);
				else unset($headerstuff['scripts'][$moo]);

				$doc->setHeadData($headerstuff);
			}
		}

		// nouveaux mootools
		if ( $new_mootools == 1 && $dossier_ok == 1) {

			$doc =&JFactory::getDocument();
			$headerstuff = $doc->getHeadData();
			reset($headerstuff['scripts']);
			$moo = key($headerstuff['scripts']);
			unset($headerstuff['scripts'][$moo]);
			$headerstuff['scripts'][JURI::base( true )."/".$dossier] = "text/javascript";
			$doc->setHeadData($headerstuff);
		}
		
	} // fonction

} // class

?>
