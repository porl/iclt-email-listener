<?php

require_once("inc/twig.php");
require_once("inc/data.php");

$twigVars["data"] = $data["types"];

echo $twig->render("data.json", $twigVars);