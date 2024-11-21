<?php

// permet de lier les fichiers entre eux
spl_autoload_register(function ($class_name) {
    include 'Classes/' . $class_name . '.php';
});

// ! pour savoir dans quel ordre créer les instances, il faut voir l'ordre dans lequel elles sont demandées
// ! il faut créer Pays pour l'intégrer dans Equipe et Joueur sinon erreur
// ! il faut mettre Equipe puis Joueur car dans contrat on a équipe puis joueur
// ! et enfin Contrats

// pays
$france = new Pays("France");
$espagne = new Pays("Espagne");
$urugay =new Pays("Urugay");
$angleterre =new Pays("Angleterre");
$italie =new Pays("Italie");
$coteIvoire = new Pays("Côte d'Ivoire");
$argentine =new Pays("Argentine");

// equipes nom, pays, contrat
$lens = new Equipe("RC Lens", $france);
$strasbourg = new Equipe("RC Strasbourg", $france);
$lyon = new Equipe("Olympique Lyon", $france);
$barcelone = new Equipe("FC Barcelona", $espagne);
$madrid = new Equipe("Real Madrid", $espagne);
$liverpool = new Equipe("FC Liverpool", $angleterre);
$bristol = new Equipe("Bristol Rovers", $angleterre);
$monopoli = new Equipe("SSC Monopoli", $italie);
$francavilla = new Equipe("Virtus Francavilla", $italie);

// joueurs  nom, prenom, date de naissance, pays
$vairelles = new Joueur("Vairelles", "Tony", "1973", $france);
$boli = new Joueur("Boli", "Roger", "1965", $france);
$aruna = new Joueur("Aruna", "Dindane", "1980", $coteIvoire);
$pajis = new Joueur("Pajis", "Mickael", "1973", $france);
$keller = new Joueur("Keller", "Marc", "1968", $france);
$lacazette = new Joueur("Lacazette", "Alexandre", "1991", $france);
$messi = new Joueur("Messi", "Lionel", "1987", $argentine);
$beckham = new Joueur("Beckham", "David", "1975", $angleterre);
$gerard = new Joueur("Gerard", "Steven", "1980", $angleterre);
$suarez = new Joueur("Suarez", "Luis", "1987", $urugay);
$sinclair = new Joueur("Sinclair", "Scott", "1989", $angleterre);
$vasquez = new Joueur("Vasquez", "Federico", "1993", $argentine);
$maakee = new Joueur("Maakee", "Lino", "2005", $italie);


// contrats  année, équipe, joueur
// ! c'est à la date du jour, pas l'année demandée... à voir avec Mickael
$contrat1 = new Contrat("2005", $lens, $vairelles);
$contrat2 = new Contrat("2012", $lens, $boli);
$contrat3 = new Contrat("2013", $lens, $aruna);
$contrat4 = new Contrat("2014", $strasbourg, $vairelles);
$contrat5 = new Contrat("2011", $strasbourg, $boli);
$contrat6 = new Contrat("2011", $lens, $aruna);
// $contrat7 = new Contrat("2011", $lens, $aruna);
// $contrat8 = new Contrat("2011", $strasbourg, $boli);
// $contrat9 = new Contrat("2011", $strasbourg, $boli);
// $contrat10 = new Contrat("2011", $strasbourg, $boli);
// $contrat11 = new Contrat("2011", $strasbourg, $boli);
// $contrat12 = new Contrat("2011", $strasbourg, $boli);
// $contrat13 = new Contrat("2011", $strasbourg, $boli);



// tests

// var_dump($france);
// var_dump($espagne);
// var_dump($urugay);
// var_dump($angleterre);
// var_dump($italie);
// var_dump($coteIvoire);
// var_dump($argentine);

// var_dump($lens);
// var_dump($strasbourg);
// var_dump($lyon);
// var_dump($barcelone);
// var_dump($madrid);
// var_dump($liverpool);
// var_dump($bristol);
// var_dump($monopoli);
// var_dump($francavilla);

// var_dump($vairelles);
// var_dump($boli);
// var_dump($aruna);
// var_dump($pajis);
// var_dump($keller);
// var_dump($lacazette);
// var_dump($messi);
// var_dump($beckham);
// var_dump($gerard);
// var_dump($suarez);
// var_dump($sinclair);
// var_dump($vasquez);
// var_dump($maakee);


var_dump($contrat1);
var_dump($contrat2);
var_dump($contrat3);
var_dump($contrat4);
var_dump($contrat5);