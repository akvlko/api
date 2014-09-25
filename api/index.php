<?php
/**
 * index
 *
 * Request and response handler from .htaccess
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
 * Including app.php
 */
require_once 'app.php';

/**
 * Controller from URL
 */
$controller = $_GET['controller'];

/**
 * Action from URL
 */
$action = $_GET['action'];

/**
 * New Application (App)
 */
$app = new App();
/*
 * setting header for JSON
 *
 */
header('Content-Type: application/json');

/**
 * Post Params
 */
$postData = array();

/**
 * If $_POST
 */
if(!empty($_POST)){
	$postData = $_POST;
}else{
	// AngularJs service post
	$postData = json_decode(file_get_contents("php://input"), TRUE);
}

/**
 * Dispatching the application for its controller and action
 */
echo $app->dispatch($controller, $action, $postData)->toJSON();
?>