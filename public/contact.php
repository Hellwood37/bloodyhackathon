<?php
require __DIR__.'/../vendor/autoload.php';
$loader = new Twig\Loader\FilesystemLoader(__DIR__.'/../src/view');
$twig = new Twig\Environment($loader);

echo $twig->render('contact.html.twig', array 
    (
        'products' => array('banane', 'fraise', 'citron', 'abricot', 'framboise', 'fenouil')
    )
);

if (isset($_POST['message'])) {
    $position_arobase = strpos($_POST['email'], '@');
    if ($position_arobase === false)
        echo '<p>Votre email doit comporter un arobase.</p>';
    else {
        $retour = mail('mikael.mp@icloud.com', 'Envoi depuis la page Contact', $_POST['message'], 'From: ' . $_POST['email']);
        if($retour)
            echo '<p class="reponse">Merci, votre message a été envoyé !</p>';
        else
            echo '<p>Erreur.</p>';
    }
}
?>