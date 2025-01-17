<?php

// define("MYAPP", true);

require "funcs.php";



$title = "My blog :: About";

$post = "<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia suscipit aliquid facilis dicta a perferendis maxime doloribus fugiat, veritatis, ab eum. At dolore earum neque fugiat consequuntur voluptatibus, excepturi pariatur.</p>
                        <p>Assumenda dolorum nobis at? Accusantium ea dolor, velit nemo quia dignissimos possimus illum debitis non cupiditate, tempora, suscipit amet natus quaerat. Deserunt non consectetur temporibus soluta adipisci quidem illo nam.</p>
                        <p>Provident perferendis porro dolorem nemo asperiores ipsam distinctio doloribus fugiat, adipisci eum, officia veritatis. Excepturi repellendus iste cupiditate eveniet in, expedita assumenda, quibusdam veniam quidem quod natus. Enim, id accusantium.</p>
";

$recent_posts = [
    1 => [
        "title" => "An item",
        "slug" => "an-item",
    ],
    2 => [
        "title" => "A second item",
        "slug" => "a-second-item",
    ],
    3 => [
        "title" => "A third item",
        "slug" => "a-third-item",
    ],
    4 => [
        "title" => "A fourth item",
        "slug" => "a-fourth-item",
    ],
    5 => [
        "title" => "And a fifth one",
        "slug" => "and-a-fifth-one",
    ],
];

require_once "app/views/about.tpl.php";
