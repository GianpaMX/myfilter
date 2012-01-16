<?php
defined('_JEXEC') or die('Restricted access');

jimport('joomla.application.component.controller');
JLoader::import("models.beans.DHCPServer", JPATH_COMPONENT, 'myfilter.');
JLoader::import("models.catalogs.DHCPServerCatalog", JPATH_COMPONENT, 'myfilter.');

class MyFilterControllerDhcp extends JController {
	protected $view;
	
	public function __construct($config = array() ) {
		parent::__construct($config);
		JRequest::setVar('view', 'dhcp');
		$this->view =& $this->getView('dhcp', 'html');
	}
	
	function display($cachable = false) {
		$dhcpServerCatalog = DHCPServerCatalog::getInstance();
		
		$this->view->dhcpServer = $dhcpServerCatalog->open('/home/juan/dnsmasq.conf');
		
		parent::display();
	}
}
