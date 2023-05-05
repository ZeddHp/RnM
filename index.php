<?php

use Twig\Environment;
use Twig\Loader\FilesystemLoader;

require "vendor/autoload.php";

$loader = new FilesystemLoader( __DIR__ . '/app/Views');
$twig = new Environment($loader);

require "router.php";

if (!empty($collection)) {
    echo $twig->render('search.html.twig', [
        'characters' => $collection,
    ]);
} else {
    echo "No characters found.";
}
