<?php


require_once 'Twig/Autoloader.php';
Twig_Autoloader::register();

$loader = new Twig_Loader_Filesystem('views');
$twig = new Twig_Environment($loader, array(
    'cache' => 'twig_cache',
));









//render default form
$twigVars = array();



echo $twig->render("layout.html", $twigVars);
