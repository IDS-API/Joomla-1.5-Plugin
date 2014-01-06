<?php
/**
 * @version     1.0.0
 * @package     com_ids_import
 * @copyright   Copyright (C) 2013. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 * @author      @iLabAfrica <ilabafrica@strathmore.edu> - ilabafrica.ac.ke
 */

// No direct access.
defined('_JEXEC') or die;

jimport('joomla.application.component.model');

/**
 * Ids_import model.
 */
class Ids_importModelimport extends JModel
{
	function __construct() {
		parent::__construct();
    }
	 
	function getJoomlaArticleCategories(){
		$db =& JFactory::getDBO();
		$db->setQuery("SELECT `id`,`title` FROM `#__categories` ORDER BY `title` ASC");
		$categories = $db->LoadObjectList();
		return $categories;
	}

	//get the saved api key from idsplugin params
	function getAPIKey()
	{
		$db =& JFactory::getDBO();
		$db->setQuery("SELECT `params` FROM `#__plugins` WHERE `element` = 'idsplugin'");
        $params = $db->LoadResult(); 
       
        $api_key = str_replace('api_key=', '', $params);
        $api_key = preg_replace('/\s+/', '', $api_key); //strips all whitespace including normal spaces,tabs etc

        return $api_key;
	}

	function getIDSImportParams(){
		
		$api_key = $this->getAPIKey();

		$db =& JFactory::getDBO();
		$db->setQuery("SELECT * FROM `#__ids_import_config` WHERE `api_key`='$api_key'");
		$params = $db->LoadObject();

		return $params;
	}

}