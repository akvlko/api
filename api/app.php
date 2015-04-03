<?php
/**
 * App
 *
 * application setup
 *
 * PHP versions 5.x
 *
 * Ashok Vishwakarma
 * Copyright 2014 Ashok Vishwakarma (http://ashokvishwakarma.in )
 *
 * Redistributions of files is strictly prohibited.
 *
 * @copyright     Copyright 2014 Ashok Vishwakarma
 * @link          http://ashokvishwakarma.in
 * @since         v 1.0
 * @license       Copyright 2014 Ashok Vishwakarma (http://ashokvishwakarma.in )
 */
/**
 * require config.php from config directory
 */
require_once 'config/config.php';

/**
 * autoload class
 */
require_once 'autoload.php';

class App{
	/**
	 * reponse variable declaration
	 */
	public $response;
	/**
	 * dispatch
	 * @param string $class
	 * @param string $method
	 * @param array $postData
	 * @throws Exception
	 */
	public function dispatch($class, $method, $postData){
		$response = array();
		try{
			if(class_exists($class)){
				$this->$class = new $class();
				if(method_exists($this->$class, $method)){
					$responseData = $this->$class->$method($postData);
					$this->response = $responseData;
					return $this;
				}else{
					throw new Exception("Invalid Action " . $method . " for Controller " . $class);
				}
			}else{
				throw new Exception("Invalid Controller " . $class);
			}
		} catch (Exception $e){
			$this->response['type'] = 'error';
			$this->response['message'] = $e->getMessage();
			return $this;
		}
	}
	/**
	 * toJSON
	 * 
	 * @uses convert response to JSON format
	 * @return JSON
	 */
	function toJSON(){
		return json_encode($this->response);
	}
}
?>