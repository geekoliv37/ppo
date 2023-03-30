<?php
require_once  'Evenement.php';
require_once  'Clients.php';

$evenement = new Evenement('AFUP Day 2023 Lille','Lille', 150, -85,'2023-05-23' );
$evenement2 = new Evenement('AFUP Day 2024 Lille','Tours', 100, 55,'2024-06-23' );

/* $evenement ->nom = 'AFUP Day 2023 Lille';
$evenement ->lieu = 'Lille';
$evenement ->places = 150;
$evenement ->prix = 85;
$evenement ->date = '2023-05-23'; */

//var_dump($evenement2);


//echo $evenement ->calculCoutRevient();


//echo $evenement->__toString();
//echo '<br>';

//$evenement ->setPrix(200);

//echo $evenement->getPrix();
//echo '<br>';
//var_dump($evenement);

$clients = new Clients ('martin', 'bruno', 'bm@orange.fr');
$clients ->setNom('dupont')->setPrenom('bruno')->setEmail('bd.orange.fr');
var_dump($clients);
