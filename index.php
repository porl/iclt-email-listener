<?php


require_once("inc/twig.php");

$twigVars["fieldTechs"] = array(
	array(
		"id" => "paul.sheean",
		"name" => "Paul Sheean",
	),
	array(
		"id" => "aaron.toomey",
		"name" => "Aaron Toomey",
	),
);

//validate form if data present



//send data if form valid




//render form



echo $twig->render("layout.html", $twigVars);
