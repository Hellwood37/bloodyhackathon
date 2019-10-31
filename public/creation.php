<?php
require __DIR__.'/../vendor/autoload.php';
$loader = new Twig\Loader\FilesystemLoader(__DIR__.'/../src/view');
$twig = new Twig\Environment($loader);

echo $twig->render('creation.html.twig', array 
    (
        'products' => array('banane', 'fraise', 'citron', 'abricot', 'framboise', 'fenouil')
    )
);