<?php

define("ROOT", dirname(__DIR__));
define("PUBLIC", ROOT . "/public");
define("APP", ROOT . "/app");
define("CORE", ROOT . "/core");
define("CONTROLLERS", APP . "/controllers");
define("VIEWS", APP . "/views");

define("PATH", "http://localhost/mysite/web");

require CORE . "/funcs.php";


// var_dump(ROOT);
// die();


// added constant as path to controller

// require "../app/controllers/index.php";

require CONTROLLERS . "/index.php";
