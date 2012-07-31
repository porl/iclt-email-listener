<?php

require_once("inc/twig.php");
require_once("inc/data.php");

$twigVars["root"] = "http://".$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF']);


//validate form if data present



//send data if form valid




//render form
$twigVars["data"] = $data;


echo $twig->render("index.html.twig", $twigVars);
