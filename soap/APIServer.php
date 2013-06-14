<?php

/**
 * Extends SoapServer with wsdl
 */
class APIServer extends SoapServer {

	/**
	 * use reflection api to print supported methods
	 */
	public function wsdl() {
		$url = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'];

		$className = 'APIService';
		$messageMethods = '';
		$portTypeOperations = '';
		$bindingOperations = '';
		$class = new ReflectionClass($className);

		$methods = $class->getMethods();
		foreach($methods as $methodKey => $methodValue) {
			if(!$methodValue->isPublic()) continue;
			$messageMethodParts = '';
			$params = $methodValue->getParameters();
			foreach($params as $paramKey => $paramValue) {
				$messageMethodParts .= '    <part name="'.$paramValue->name.'" type="xsd:anyType"/>';
			}
			$messageMethods .= '  <message name="'.$methodValue->name.'Request">
					'.$messageMethodParts.'
				</message>
				<message name="'.$methodValue->name.'Response">
					<part name="Result" type="xsd:anyType"/>
				</message>';
			$portTypeOperations .= '    <operation name="'.$methodValue->name.'">
					<input message="tns:'.$methodValue->name.'Request"/>
					<output message="tns:'.$methodValue->name.'Response"/>
				</operation>';
			$bindingOperations .= '    <operation name="'.$methodValue->name.'">
				<soap:operation soapAction="urn:xmethods-delayed-quotes#'.$methodValue->name.'"/>
				<input>
					<soap:body use="encoded" namespace="urn:xmethods-delayed-quotes" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/>
				</input>
				<output>
					<soap:body use="encoded" namespace="urn:xmethods-delayed-quotes" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/>
				</output>
				</operation>';
		}

		$s = '<?xml version ='."'".'1.0'."'".' encoding='."'".'UTF-8'."'".' ?>
		<definitions name="'.$className.'"
			targetNamespace="'.$url.'"
			xmlns:tns="'.$url.'"
			xmlns:soap="http://schemas.xmlsoap.org/wsdl/soap/"
			xmlns:xsd="http://www.w3.org/2001/XMLSchema"
			xmlns:soapenc="http://schemas.xmlsoap.org/soap/encoding/"
			xmlns:wsdl="http://schemas.xmlsoap.org/wsdl/"
			xmlns="http://schemas.xmlsoap.org/wsdl/">

		'.$messageMethods.'
		<portType name="'.$className.'PortType">
			'.$portTypeOperations.'
		</portType>
		<binding name="'.$className.'Binding" type="tns:'.$className.'PortType">
			<soap:binding style="rpc" transport="http://schemas.xmlsoap.org/soap/http"/>
			'.$bindingOperations.'
		</binding>
		<service name="'.$className.'Service">
			<port name="'.$className.'Port" binding="tns:'.$className.'Binding">
				<soap:address location="'.$url.'"/>
			</port>
		</service>
		</definitions>';
		
		header("Content-Type: text/xml");
		header(sprintf("Content-Length: %d", strlen($s)));
		echo $s;
	}
}
