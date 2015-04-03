<?php
/**
 * index
 *
 * request landing path redirected by .htaccess
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
 * including App class
 */
require_once 'app.php';

/**
 * controller name from the URL
 * @var string
 */
$controller = $_GET['controller'];

/**
 * action name from the URL
 * @var string
 */
$action = $_GET['action'];

/**
 * application object
 * @var object
 */
$app = new App();
/**
 * setting up headers to application/json for json reponse
 */
header('Content-Type: application/json');

/**
 * parsing JSON post/put request data
 * @var json
 */
$postData = json_decode(file_get_contents("php://input"), TRUE);

/**
 * bootstraping application to its URL with controller, action and if any post data
 * echo the response
 */
echo $app->dispatch($controller, $action, $postData)->toJSON();
?>

