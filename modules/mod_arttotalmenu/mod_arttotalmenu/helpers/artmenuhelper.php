<?php
/*
 * ArtMenuHelper class is used to work with Joomla! menu
 *
 * @version		1.0.0
 * @author		Artetics
 * @copyright	Copyright (c) 2009 www.artetics.com. All rights reserved
 * @license		GNU/GPL (http://www.gnu.org/copyleft/gpl.html)
 */

defined('_JEXEC') or die('Restricted access');

require_once(JPATH_SITE . DS . 'modules' . DS . 'mod_arttotalmenu' . DS . 'mod_arttotalmenu' . DS . 'library' . DS . 'json' . DS . 'json.php');

class ArtMenuHelper {

	function getModuleParams($defaultParams, $params) {
    if ($params && $params->_registry) {
      $params = $params->_registry;
      if ($params && $params["_default"]) {
        $params = $params["_default"];
        if ($params && $params["data"]) {
          $params = $params["data"];
        }
      }
    }
    //echo var_dump($params->backLinkText);exit(0);
		if (!empty ($params)) {
			foreach($params as $key => $value) {
				$pValue = $params->$key;
				if (isset ($pValue) && !empty($pValue)) {
					$defaultParams[$key] = $params->$key;
				}
			}
		}
		return $defaultParams;
	}

	function renderMenu($displayType, $params) {
		switch ($displayType) {
			case 'ipod':
				ArtMenuHelper::renderTemplate(JPATH_SITE . DS . 'modules' . DS . 'mod_arttotalmenu' . DS . 'mod_arttotalmenu' . DS . 'templates' . DS . 'ipod.html.php', $params);
			break;
			
			case 'simple':
				ArtMenuHelper::renderTemplate(JPATH_SITE . DS . 'modules' . DS . 'mod_arttotalmenu' . DS . 'mod_arttotalmenu' . DS . 'templates' . DS . 'simple.html.php', $params);
			break;
			
			case 'stylish':
				ArtMenuHelper::renderTemplate(JPATH_SITE . DS . 'modules' . DS . 'mod_arttotalmenu' . DS . 'mod_arttotalmenu' . DS . 'templates' . DS . 'stylish.html.php', $params);
			break;
			
			case 'CSS3':
				ArtMenuHelper::renderTemplate(JPATH_SITE . DS . 'modules' . DS . 'mod_arttotalmenu' . DS . 'mod_arttotalmenu' . DS . 'templates' . DS . 'css3.html.php', $params);
			break;
			
			default:
			break;
		}
	}
	
	function renderTemplate($template, $params = array()) {
		include $template;
	}

	function getMenu($menuType, $showHiddenMenuItems) {
		$db = & JFactory::getDBO();

		$query = sprintf('SELECT * FROM #__menu WHERE menutype = %s AND published = 1 AND access < %d ORDER BY parent, ordering',
			$db->Quote($menuType),
			$showHiddenMenuItems ? 3 : 1);

		$db->setQuery($query);
		$menu = $db->loadObjectList('id');
		
		if ($db->getErrorNum() || !is_array($menu) || count($menu) < 1) {
			return null;
		}
		
		foreach ($menu as $id => $menuItem) {
			$parentId = $menuItem->parent; 
			if ($parentId && isset($menu[$parentId])) {
				$parent =& $menu[$parentId];
				if (!isset($parent->children)) {
					$parent->children = array();
				}
				
				$parent->children[] =& $menu[$id];
			}
		}

		return $menu;
	}
	
	function getParentMenuItemId($menu, $childId) {
		if (!is_array($menu) || empty($childId) || !isset($menu[$childId])) return 0;

		$menuItem = $menu[$childId];
		while ($menuItem->parent) {
			if (!isset($menu[$menuItem->parent])) return 0;
			$menuItem = $menu[$menuItem->parent];
		}

		return $menuItem->id;
	}
	
	function getMenuItemIndex($menu, $menuId) {
		$index = -1;
		if (!is_array($menu) || empty($menuId) || !isset($menu[$menuId])) return $index;
		
		$parentId = $menu[$menuId]->parent;
		
		$i = 0;
		foreach ($menu as $id => $menuItem) {
			if ($id == $menuId) {
				$index = $i;
				break;
			}
			if ($menuItem->parent == $parentId) ++$i;
		}
	
		return $index;
	}
}
?>