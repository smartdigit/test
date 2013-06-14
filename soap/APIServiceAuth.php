<?php

class APIServiceAuth {
	private $auth = false;

	public function __construct() {
		$this->apiservice = new APIService();
	}
	
	public function APIToken($apikey) {
		$this->apikey = is_object($apikey) ? $apikey->apikey : $apikey;

		if($this->apikey == '00-25-90-3C-66-6C') {
			$this->auth = true;
		} else {
			$this->auth = false;
		}
	}

	public function __call($function, $arguments) {
		
		// authenticated
		if(!$this->auth) {
			$this->mismatchlog($function, $arguments);
			throw new SoapFault("Server", "Authentication error.");
		}
		
		// function exists
		if (method_exists($this->apiservice, $function)) {
	       		return call_user_func_array(array($this->apiservice, $function), $arguments);
		}
		else {
			throw new SoapFault("Server", "Call to undefined Method.");
		}
	}
}
