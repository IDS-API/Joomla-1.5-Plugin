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

// Import Joomla! libraries
jimport('joomla.application.component.model');

class Ids_importModelIds_import extends JModel {
    function __construct() {
		parent::__construct();
    }
}
?>