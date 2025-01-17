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
$uri = parse_url($uri)["path"];

// dump($_GET);

if ($uri === "/mysite/web/" || $uri === "/mysite/web/index.php") {
    require CONTROLLERS . "/index.php";
} elseif ($uri === "/mysite/web/about") {
    require CONTROLLERS . "/about.php";
} else {
    abort();
}


// added constant as path to controller +++++++++++++++

// require "../app/controllers/index.php";

// require CONTROLLERS . "/index.php";
