<?php



$method = $_SERVER['REQUEST_METHOD'];

switch ($method) {
	case 'POST':
		rest_post();
		break;
	case 'GET':
		rest_get();
		break;
}

function rest_get() {
	//redirect to home
	header( 'Location: http://'.$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF']) ) ;
}

function rest_post() {
	require_once("inc/twig.php");
	require_once("inc/data.php");
	
$twigVars["root"] = rtrim("http://".$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF']), '/') . DIRECTORY_SEPARATOR;	
	$twigVars["post"] = $_POST;
	echo $twig->render("confirm.html.twig", $twigVars);
}