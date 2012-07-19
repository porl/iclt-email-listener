<?php


require_once("inc/twig.php");
require_once("inc/data.php");

$twigVars["data"] = $data;

//validate form if data present



//send data if form valid




//render form



echo $twig->render("layout.html", $twigVars);
