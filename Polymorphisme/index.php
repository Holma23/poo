<?php
//require_once "Personnage.php";
require_once "Voleur.php";
require_once "Magicien.php";
require_once "Guerrier.php";
$voleur=new Voleur("voleeur",10);
$guerrier=new Guerrier("gerier","10","100");
$mag=new Magicien("magicien","200");
///echo $voleur;

$mesPersonnages=[
    $voleur,
    new Voleur("vol","voleur2"),
    new Magicien("magi",5),
    new Guerrier("dix guerres",60,"rtttt")
];

function salutation($mesPersonnages)
{
    foreach ($mesPersonnages as $person) {
        echo $person->getNom()." ";
        //echo $person->getNbreGuerre();
        $person->saluer();
    }
}
 salutation($mesPersonnages);
