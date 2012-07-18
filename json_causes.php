<?php

require_once("inc/twig.php");
require_once("data.php");

$twigVars["data"] = $data["causes"];

echo $twig->render("data.json", $twigVars);