<?php
require_once '../vendor/autoload.php';

$products = ['Perceuse', 'Clé à molette', 'Disqueuse', 'Compresseur', 'Poste à souder'];

$loader = new Twig\Loader\FilesystemLoader(__DIR__.'/../View');
$twig = new Twig\Environment($loader, [
    'cache' => false,
    'debug' => true,
]);
echo $twig->render('myView.html.twig', [
    'products' => $products,
]);

?>

