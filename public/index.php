<?php

define("ROOT", dirname(__DIR__));
define("PUBLIC", ROOT . "/public");
define("APP", ROOT . "/app");
define("CORE", ROOT . "/core");
define("CONTROLLERS", APP . "/controllers");
define("VIEWS", APP . "/views");

define("PATH", "http://localhost/mysite/web");

require CORE . "/funcs.php";

// $uri = trim($_SERVER["REQUEST_URI"], "/mysite/web/");

$uri = $_SERVER["REQUEST_URI"];

// dd($uri);

if ($uri === "") {
    require CONTROLLERS . "/index.php";
} elseif ($uri === "about.php") {
    require CONTROLLERS . "/about.php";
} else {
    echo "Error 404";
}


// added constant as path to controller +++++++++++++++

// require "../app/controllers/index.php";

// require CONTROLLERS . "/index.php";
