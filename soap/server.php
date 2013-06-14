<?php
require_once('APIServer.php');
require_once('APIService.php');
require_once('APIServiceAuth.php');

$server = new APIServer(null, array(
	'uri' => 'http://localhost/ivang/soap/')
);

// output wsdl specs
if(isset($_GET['wsdl'])) {
	$server->wsdl();
}

// real handler
else {
	$server->setClass('APIServiceAuth');
	$server->handle();
}
