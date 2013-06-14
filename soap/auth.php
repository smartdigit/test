<?php
include('conf.php');
/*
 * Login credentials to be supplied as a SOAP header
 * Class used to ensure Soap Head tags in correct format.
 */
class SoapHeaderAPIToken {
	public $apikey;
	public function __construct($apikey) {
		$this->apikey = $apikey;
	}
}

$uri = 'http://localhost/ivang/soap/';
$uri = 'http://localhost/ivang/soap/server.php?wsdl';
$location = 'http://localhost/ivang/soap/server.php';

// Set the login headers
$wsu = 'http://schemas.xmlsoap.org/ws/2002/07/utility';

$usernameToken = new SoapHeaderAPIToken($password);
//$usernameToken = new SoapHeaderAPIToken('00-25-90-3C-66-6C');
$soapHeaders[] = new SoapHeader($wsu, 'APIToken', $usernameToken);

$client = new SoapClient(@$wsdl, array( 
	"location" => $location,
	"uri" => $uri
));
$client->__setSoapHeaders($soapHeaders);

?>