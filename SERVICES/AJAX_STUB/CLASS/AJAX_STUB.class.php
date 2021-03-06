<?php
/**
 * AJAX_STUB is a stub for creating an AJAX service
 * A description of the object should be included here for the service introspection 
 * provided by SOA_BASE
 * service introspection is designed to produce something similar to a WSDL in SOAP
 * 
 * @author	Jason Medland<jason.medland@gmail.com>
 * @package	JCORE\SERVICE\EXAMPLE\AJAX_STUB
 * 
 */
 

namespace JCORE\SERVICE\EXAMPLE\AJAX_STUB;
use JCORE\LOAD\TRANSPORT\SOA\SOA_BASE as SOA_BASE;
/**
 * Class AJAX_STUB
 *
 * @package JCORE\SERVICE\EXAMPLE\AJAX_STUB
*/
class AJAX_STUB extends SOA_BASE{ 
	/** 
	* 
	*/
	protected $serviceRequest = null;
	/** 
	* 
	*/
	public $serviceResponse = null;
	/** 
	* 
	*/
	public $error = null;
	
	/**
	* DESCRIPTOR: an empty constructor, the service MUST be called with 
	* the service name and the service method name specified in the 
	* in the method property of the JSONRPC request in this format
	* 		""method":"AJAX_STUB.aServiceMethod"
	* 
	* @param param 
	* @return return  
	*/
	public function __construct(){
		return;
	}
	
	/**
	* DESCRIPTOR: an example namespace call 
	* @param param 
	* @return return  
	*/
	public function aServiceMethod($args){
		#echo __METHOD__.__LINE__.'<br>';
		#echo __METHOD__.__LINE__.'$args<pre>['.var_export($args, true).']</pre>'.'<br>'; 
		if(!isset($args["action"])){
			$this->error = new StdClass();
			$this->error->code = "FAILED_CALL";
			$this->error->message = ' NO SERVICE ACTION DEFINED';
			$this->error->data = 'no service call made';
			return false;
		}

		$this->serviceResponse = array();
		$this->serviceResponse["title"] = 'Block Eight';
		$this->serviceResponse["type"] = 'page';
		return true;
	}
	
}



?>