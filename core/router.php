<?php

require CONFIG . "/routes.php";  // require config file for routes map

$uri = $_SERVER["REQUEST_URI"];
$uri = parse_url($uri)["path"];

// dump($_GET);

// if ($uri === "/mysite/web/" || $uri === "/mysite/web/index.php") {
//     require CONTROLLERS . "/index.php";
// } elseif ($uri === "/mysite/web/about") {
//     require CONTROLLERS . "/about.php";
// } else {
//     abort();
// }

if (array_key_exists($uri, $routes)) {
    if (file_exists(CONTROLLERS . "/{$routes[$uri]}")) {
        require CONTROLLERS . "/{$routes[$uri]}";
    } else abort();
} else {
    abort();
}
