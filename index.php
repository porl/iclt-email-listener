<?php

require_once("inc/twig.php");
require_once("inc/data.php");

$twigVars["root"] = rtrim("http://".$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF']), '/') . DIRECTORY_SEPARATOR;


//validate form if data present



//send data if form valid




//render form
$twigVars["data"] = $data;


echo $twig->render("index.html.twig", $twigVars);
