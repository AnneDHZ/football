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
// ! c'est à la date du jour, pas l'année demandée... 
$contrat1 = new Contrat("2005", $lens, $vairelles);
$contrat2 = new Contrat("2012", $lens, $boli);
$contrat3 = new Contrat("2013", $lens, $aruna);
$contrat4 = new Contrat("2014", $strasbourg, $vairelles);
$contrat5 = new Contrat("2011", $strasbourg, $boli);
$contrat6 = new Contrat("2011", $lens, $aruna);
$contrat7 = new Contrat("2018", $lens, $boli);
$contrat8 = new Contrat("2015", $lyon, $lacazette);
$contrat9 = new Contrat("2020", $barcelone, $messi);
$contrat10 = new Contrat("2014", $madrid, $suarez);
$contrat11 = new Contrat("2007", $liverpool, $gerard);
$contrat12 = new Contrat("2010", $barcelone, $beckham);
$contrat13 = new Contrat("2021", $bristol, $sinclair);
$contrat14 = new Contrat("2019", $monopoli, $vasquez);
$contrat15 = new Contrat("2022", $francavilla, $maakee);
$contrat16 = new Contrat("2016", $strasbourg, $keller);
$contrat17 = new Contrat("2008", $liverpool, $pajis);
$contrat18 = new Contrat("2006", $madrid, $aruna);
$contrat19 = new Contrat("2023", $lens, $lacazette);
$contrat20 = new Contrat("2017", $lyon, $keller);
$contrat21 = new Contrat("2011", $lyon, $lacazette);
$contrat22 = new Contrat("2018", $strasbourg, $lacazette);
$contrat23 = new Contrat("2016", $barcelone, $messi);
$contrat24 = new Contrat("2019", $madrid, $messi);
$contrat25 = new Contrat("2012", $liverpool, $gerard);
$contrat26 = new Contrat("2015", $barcelone, $suarez);
$contrat27 = new Contrat("2020", $madrid, $suarez);
$contrat28 = new Contrat("2003", $liverpool, $beckham);
$contrat29 = new Contrat("2017", $bristol, $beckham);
$contrat30 = new Contrat("2022", $monopoli, $vasquez);
$contrat31 = new Contrat("2019", $lens, $vasquez);
$contrat32 = new Contrat("2021", $francavilla, $maakee);
$contrat33 = new Contrat("2023", $lyon, $maakee);
$contrat34 = new Contrat("2007", $strasbourg, $pajis);
$contrat35 = new Contrat("2009", $lens, $pajis);
$contrat36 = new Contrat("2004", $strasbourg, $keller);
$contrat37 = new Contrat("2014", $lyon, $keller);
$contrat38 = new Contrat("2022", $madrid, $aruna);
$contrat39 = new Contrat("2020", $lyon, $aruna);



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

// var_dump($contrat1);
// var_dump($contrat2);
// var_dump($contrat3);
// var_dump($contrat4);
// var_dump($contrat5);
// var_dump($contrat6);
// var_dump($contrat7);
// var_dump($contrat8);
// var_dump($contrat9);
// var_dump($contrat10);
// var_dump($contrat11);
// var_dump($contrat12);
// var_dump($contrat13);
// var_dump($contrat14);
// var_dump($contrat15);
// var_dump($contrat16);
// var_dump($contrat17);
// var_dump($contrat18);
// var_dump($contrat19);
// var_dump($contrat20);
// var_dump($contrat21);
// var_dump($contrat22);
// var_dump($contrat23);
// var_dump($contrat24);
// var_dump($contrat25);
// var_dump($contrat26);
// var_dump($contrat27);
// var_dump($contrat28);
// var_dump($contrat29);
// var_dump($contrat30);
// var_dump($contrat31);
// var_dump($contrat32);
// var_dump($contrat33);
// var_dump($contrat34);
// var_dump($contrat35);
// var_dump($contrat36);
// var_dump($contrat37);
// var_dump($contrat38);
// var_dump($contrat39);

$france= afficherEquipe($this);