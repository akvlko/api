<?php
/**
 * Session
 *
 * Core session class used to manipulate SESSION variables
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

# Starting PHP session
session_start();

class Session{
	/**
	 * get
	 * 
	 * @uses read session from SESSION storage
	 * @param string $name
	 * @return session value
	 */
	public static function get($name){
		return $_SESSION[$name];
	}
	
	/**
	 * check
	 * 
	 * @uses check if SESSION variable has initialized 
	 * @param string $name
	 * @return boolean
	 */
	public static function check($name){
		return !empty($_SESSION[$name]);
	}
	
	/**
	 * set
	 * 
	 * @uses to set the SESSION variable
	 * @param string $name
	 * @param $value
	 * @return void
	 */
	public static function set($name, $value){
		$_SESSION[$name] = $value;
	}
	
	/**
	 * delete
	 * @uses unset the SESSION variable
	 * @param string $name
	 * @return void
	 */
	public static function delete($name){
		unset($_SESSION[$name]);
	}
}
?>