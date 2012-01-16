<?php

class DHCPServer {
	private $enabled;
	private $data;

	public function __construct($config = array()) {
		$this->enabled = false;
		$this->data = array();

		$this->setConfig($config);
	}

	public function setConfig($config = array()) {
		$this->enabled = (isset($config['enabled'])?$config['enabled']:$this->enabled);
		$this->data = (isset($config['data'])?$config['data']:$this->data);
	}

	public function getEnabled() {
		return $this->enabled;
	}
	public function setEnabled($enabled) {
		$this->enabled = $enabled;
		return $this;
	}

	public function getInterface() {
		return $this->data['interface'];
	}
	public function setInterface($interface) {
		$this->data['interface'] = $interface;
		return $this;
	}

	public function getExpandHosts() {
		return $this->data['expand-hosts'];
	}
	public function setExpandHosts($expandHosts) {
		$this->data['expand-hosts'] = $expandHosts;
		return $this;
	}

	public function getDomain() {
		return $this->data['domain'];
	}
	public function setDomain($domain) {
		$this->data['domain'] = $domain;
		return $this;
	}

	public function getDHCPRange() {
		return $this->data['dhcp-range'];
	}
	public function setDHCPRange($dhcpRange) {
		$this->data['dhcp-range'] = $dhcpRange;
		return $this;
	}

	public function getDHCPHosts() {
		return $this->data['dhcp-host'];
	}
	public function setDHCPHosts($dhcpHosts) {
		$this->data['dhcp-host'] = $dhcpHosts;
		return $this;
	}

	public function getDHCPOptions() {
		return $this->data['dhcp-option'];
	}
	public function setDHCPOptions($options) {
		$this->data['dhcp-option'] = $options;
		return $this;
	}

	public function getLogQueries() {
		return $this->data['log-queries'];
	}
	public function setLogQueries($logQueries) {
		$this->data['log-queries'] = $logQueries;
		return $this;
	}

	public function getLogDHCP() {
		return $this->data['log-dhcp'];
	}
	public function setLogDHCP($logDHCP) {
		$this->data['log-dhcp'] = $logDHCP;
		return $this;
	}
}
