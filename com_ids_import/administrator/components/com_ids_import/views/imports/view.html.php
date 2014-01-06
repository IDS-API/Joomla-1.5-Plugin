<?php
/**
 * @version     1.0.0
 * @package     com_ids_import
 * @copyright   Copyright (C) 2013. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 * @author      @iLabAfrica <ilabafrica@strathmore.edu> - ilabafrica.ac.ke
 */

// No direct access
defined('_JEXEC') or die;

jimport('joomla.application.component.view');

/**
 * View class for a list of Ids_import.
 */
class Ids_importViewImports extends JView
{
	
	/**
	 * Display the view
	 */
	// function display($tpl = null) {
 //        parent::display($tpl);
 //    }
	public function display($tpl = null)
	{
        
		$this->addToolbar();
        
        
		parent::display($tpl);
	}

	/**
	 * Add the page title and toolbar.
	 *
	 * @since	1.6
	 */
	protected function addToolbar()
	{

		JToolBarHelper::title('IDS: Global Knowledge for Global Change', 'components/com_ids_import/assets/images/l_imports.png');

        JToolBarHelper::addNew('importNew','Import data from IDS');


	}
}
