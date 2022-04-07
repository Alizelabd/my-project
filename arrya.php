<?php
$langs = array(
    "html"  =>"70",

    "css" => "55",

    "php"  =>"95",

    "laravel"  =>"30",

    "wp"  => null,

    "html5"  => "75",

);
echo "<ul>";
foreach($langs as $lang => $progress) {
    echo "<li>" . $lang . "=" .  $progress . "</li>";
}
echo "</ul>";

// multi-dimensional arrays

$blogs[] = ['title' => 'castel party', 'author'=>'peach', 'likes'=> 100];
print_r($blogs);
