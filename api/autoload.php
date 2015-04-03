<?php
/**
 * autoload
 *
 * autloading all required classes from controllers and lib folders
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
function __autoload($class){
	if(file_exists('controllers/' . $class . ".php")){
		require_once 'controllers/' . $class . ".php";
	}else if(file_exists('lib/' . $class . ".php")){
		require_once 'lib/' . $class . ".php";
	}
}
?>