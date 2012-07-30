<?php



$method = $_SERVER['REQUEST_METHOD'];

switch ($method) {
	case 'PUT':
		rest_put();
		break;
	case 'POST':
		rest_post();
		break;
	case 'GET':
		rest_get();
		break;
	case 'HEAD':
		rest_head();
		break;
	case 'DELETE':
		rest_delete();
		break;
	case 'OPTIONS':
		rest_options();
		break;
	default:
		rest_error();
		break;
}

function rest_get() {
	require_once("inc/twig.php");
	require_once("inc/data.php");
	
	$twigVars["url"] = $_SERVER["REQUEST_URI"];
	
	
	//validate form if data present
	
	
	
	//send data if form valid
	
	
	
	
	//render form
	$twigVars["data"] = $data;
	
	
	echo $twig->render("index.html.twig", $twigVars);
}

function rest_post() {
	require_once("inc/twig.php");
	require_once("inc/data.php");
	
	$twigVars["url"] = $_SERVER["REQUEST_URI"];
	
	$twigVars["post"] = $_POST;
	echo $twig->render("submit.html.twig", $twigVars);
}