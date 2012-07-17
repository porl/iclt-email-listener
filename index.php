<?php


require_once 'Twig/Autoloader.php';
Twig_Autoloader::register();

$loader = new Twig_Loader_Filesystem('views');
$twig = new Twig_Environment($loader, array(
    'cache' => 'twig_cache',
    'auto_reload' => true,
));

$twigVars = array();

//validate form if data present



//send data if form valid




//render form



echo $twig->render("layout.html", $twigVars);
