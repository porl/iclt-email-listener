<?php

require_once("inc/twig.php");
require_once("inc/data.php");

$twigVars["data"] = $data["serviceFailures"];

echo $twig->render("data.json", $twigVars);