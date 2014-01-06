<?php
/**
 * @version     1.0.0
 * @package     com_ids_import
 * @copyright   Copyright (C) 2013. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 * @author      @iLabAfrica <ilabafrica@strathmore.edu> - ilabafrica.ac.ke
 */

defined('_JEXEC') or die;

jimport('joomla.application.component.model');

/**
 * Methods supporting a list of Ids_import records.
 */
class Ids_importModelimports extends JModel
{

    function __construct() {
		parent::__construct();
    }
}