<?php

require_once("inc/twig.php");
require_once("data.php");

$twigVars["data"] = $data["teams"];

echo $twig->render("data.json", $twigVars);