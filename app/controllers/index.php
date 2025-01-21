<?php

// define("MYAPP", true);  no need for this way of closing access because we now created front controller(one poin entry)

// require "funcs.php"; no more needed because it was added in front controller in public folder



$title = "My blog :: Home";

$posts = $db->query("SELECT * FROM posts ORDER BY id DESC")->fetchAll(); // now posts are coming from DB
$recent_posts = $db->query("SELECT * FROM posts ORDER BY id DESC LIMIT 3")->fetchAll();

// $posts = [
//     1 => [
//         "title" => "Title 1",
//         "desc" => "Some quick example text to build on the card title and make up the bulk of the card's content.",
//         "slug" => "title-1"
//     ],
//     2 => [
//         "title" => "Title 2",
//         "desc" => "Some quick example text to build on the card title and make up the bulk of the card's content.",
//         "slug" => "title-2"
//     ],
//     3 => [
//         "title" => "Title 3",
//         "desc" => "Some quick example text to build on the card title and make up the bulk of the card's content.",
//         "slug" => "title-3"
//     ],
//     4 => [
//         "title" => "Title 4",
//         "desc" => "Some quick example text to build on the card title and make up the bulk of the card's content.",
//         "slug" => "title-4"
//     ],
//     5 => [
//         "title" => "Title 5",
//         "desc" => "Some quick example text to build on the card title and make up the bulk of the card's content.",
//         "slug" => "title-5"
//     ],

// ];

// $recent_posts = [
//     1 => [
//         "title" => "An item",
//         "slug" => "an-item",
//     ],
//     2 => [
//         "title" => "A second item",
//         "slug" => "a-second-item",
//     ],
//     3 => [
//         "title" => "A third item",
//         "slug" => "a-third-item",
//     ],
//     4 => [
//         "title" => "A fourth item",
//         "slug" => "a-fourth-item",
//     ],
//     5 => [
//         "title" => "And a fifth one",
//         "slug" => "and-a-fifth-one",
//     ],
// ];

require_once VIEWS . "/index.tpl.php";
