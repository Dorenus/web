<?php

// define("ROOT", dirname(__DIR__));
// define("PUBLIC", ROOT . "/public");
// define("APP", ROOT . "/app");
// define("CORE", ROOT . "/core");
// define("CONTROLLERS", APP . "/controllers");
// define("VIEWS", APP . "/views");

// define("CONFIG", ROOT . "/config");  // adding rout map-table array location

// define("PATH", "http://localhost/mysite/web");

require dirname(__DIR__) . "/config/config.php";
require CORE . "/funcs.php";

require CORE . "/classes/Db.php";
$db_config = require CONFIG . "/db.php";
$db = new Db($db_config);


// $posts = $db->query("SELECT * FROM posts")->fetchAll();

// dd($posts);

// dd($db);


// require CONFIG . "/routes.php";  // require config file for routes map
require CORE . "/router.php";   // now router will have routs map available


// +++++++++++++++ old way of routing moved it to core-router.php

// $uri = $_SERVER["REQUEST_URI"];
// $uri = parse_url($uri)["path"];

// // dump($_GET);

// if ($uri === "/mysite/web/" || $uri === "/mysite/web/index.php") {
//     require CONTROLLERS . "/index.php";
// } elseif ($uri === "/mysite/web/about") {
//     require CONTROLLERS . "/about.php";
// } else {
//     abort();
// }


// added constant as path to controller +++++++++++++++

// require "../app/controllers/index.php";

// require CONTROLLERS . "/index.php";
