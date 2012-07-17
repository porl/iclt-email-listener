<?php

require_once 'Twig/Autoloader.php';
Twig_Autoloader::register();

$loader = new Twig_Loader_Filesystem('views');
$twig = new Twig_Environment($loader, array(
    'cache' => 'twig_cache',
));

$vars = array("foo" => "bar");



echo $twig->render("layout.html", $vars);
