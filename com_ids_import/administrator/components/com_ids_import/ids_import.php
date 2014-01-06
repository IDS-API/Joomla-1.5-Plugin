<?php
/**
 * Joomla! 1.5 component ids_import
 *
 * @version $Id: ids_import.php 2013-05-27 15:01:45 svn $
 * @author @iLabAfrica
 * @package Joomla
 * @subpackage ids_import
 * @license GNU/GPL
 *
 * IDS Import plugin for Joomla enables a Joomla website to periodically import content made available by the IDS KS Open API.

You will need to specify a valid API Key in the API Key field to the right. If you don't have one, you can register for one at http://api.ids.ac.uk/accounts/register/
 *
 * This component file was created using the Joomla Component Creator by Not Web Design
 * http://www.notwebdesign.com/joomla_component_creator/
 *
 */

// no direct access
defined('_JEXEC') or die('Restricted access');

/*
 * Define constants for all pages
 */
define( 'COM_IDS_IMPORT_DIR', 'images'.DS.'ids_import'.DS );
define( 'COM_IDS_IMPORT_BASE', JPATH_ROOT.DS.COM_IDS_IMPORT_DIR );
define( 'COM_IDS_IMPORT_BASEURL', JURI::root().str_replace( DS, '/', COM_IDS_IMPORT_DIR ));

// Require the base controller
require_once JPATH_COMPONENT.DS.'controller.php';

// Require the base controller
require_once JPATH_COMPONENT.DS.'helpers'.DS.'helper.php';

// Initialize the controller
$controller = new Ids_importController( );

// Perform the Request task
$controller->execute( JRequest::getCmd('task'));
$controller->redirect();
?>