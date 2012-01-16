<?php
// No direct access to this file
defined('_JEXEC') or die('Restricted access');

// import Joomla controller library
jimport('joomla.application.component.controller');

/**
 * My Filter Component Controller
 */
class MyFilterController extends JController {
	/**
	 * display task
	 *
	 * @return void
	 */
	function display($cachable = false) {
		$this->_DEFAULT();
		
		// set default view if not set
		JRequest::setVar('view', JRequest::getCmd('view', 'MyFilter'));

		// call parent behavior
		parent::display($cachable);
	}
	
	function _DEFAULT() {
		JToolBarHelper::title( JText::_( 'My Filter' ), 'generic.png' );
	}
}
