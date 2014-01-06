<?php
/**
 * Joomla! 1.5 component ids_import
 *
 * @version $Id: controller.php 2013-05-27 15:01:45 svn $
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

jimport('joomla.application.component.controller');

/**
 * ids_import Component Controller
 */
class Ids_importController extends JController {
	function display() {
        // Make sure we have a default view
        if( !JRequest::getVar( 'view' )) {
		    JRequest::setVar('view', 'ids_import' );
        }
		parent::display();
	}
}
?>