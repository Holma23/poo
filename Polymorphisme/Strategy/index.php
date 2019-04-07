<?php
/**
 * Created by PhpStorm.
 * User: mater
 * Date: 07/04/2019
 * Time: 14:22
 */
require_once "Personne.php";
require_once "Contexte.php";
require_once "Enerve.php";
require_once "Geek.php";
require_once  "Jovial.php";
$personne = new Personne();
$humeurs = [new Enerve(), new Geek(), new Jovial()];

foreach ($humeurs as $humeur) {
    echo $humeur->reagir($personne);
    echo"<hr>";
    $contexte = new Contexte($humeur);
    echo $contexte->exprimeReaction($personne)."<br>";
}