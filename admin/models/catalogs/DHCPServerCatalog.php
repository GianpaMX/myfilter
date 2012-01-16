<?php

class DHCPServerCatalog {
	/**
	 * @var DHCPServerCatalog
	 */
	protected static $instance;
	
	private function __construct($config = array()) {
		
	}
	
	/**
	 * @return DHCPServerCatalog
	 */
	public static function getInstance() {
		if(!self::$instance instanceof DHCPServerCatalog) {
			self::$instance = new DHCPServerCatalog();
		}
		return self::$instance;
	}
	
	/**
	 * 
	 * Enter description here ...
	 * @param String $filename
	 * @return DHCPServer
	 */
	public function open($filename = '/etc/dnsmasq.conf') {
		$data = array();
				
		$add_line = function($line) use (&$data) {
			if($line == '') return;
			if(strpos($line, '=')) {
				$tmp = explode('=', $line);
				
				$variable = trim($tmp[0]);
				$value = trim($tmp[1]);
				
				if(isset($data[$variable])) {
					if(is_array($data[$variable])) {
						$data[$variable][] = $value;
					} else {
						$data[$variable] = array($value);
					}
				} else {
					$data[$variable] = $value;
				}
			} else {
				$data[$line] = true;
			}
		};
		
		$file = fopen($filename, 'r');
		$line = ''; $i = 0;
		while(false !== $c = fgetc($file)) {
			if($c == '#') {
				do {
					if(false === $c = fgetc($file)) {
						$add_line(trim($line));
						break 2;
					}
				} while($c != "\n");
			}
			if($c == "\n") {
				$add_line(trim($line));
				$line = '';
				continue;
			}
			$line .= $c;
		}
		fclose($file);
		return new DHCPServer(array('data' => $data));
	}
}
