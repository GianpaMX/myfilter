<?php
// No direct access to this file
defined('_JEXEC') or die('Restricted access');
 
// import Joomla view library
jimport('joomla.application.component.view');
 
class MyFilterViewDhcp extends JView {
	function display($tpl = null) {
		JHtml::_('behavior.tooltip');
		JToolBarHelper::title( JText::_( 'MyFilter::DHCP' ), 'generic.png' );
		
		parent::display($tpl);
	}
}
