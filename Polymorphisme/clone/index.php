<?php
include_once "Femelle.php";
require_once "Male.php";
$prenoms = [
'René', 'Eric', 'Jean', 'Robert', 'Marius',
'Kevin', 'Léo', 'Jacques', 'Loïc', 'John',
'Alexis', 'Kenneth', 'Nathanaël', 'Christophe'
];

$male1 = new Male('Rrrnnngrrwggl','m');
//echo $male1;

$numeroClone = 0;
$clones = [];

foreach ($prenoms as $prenom) {
++$numeroClone;


$nomClone = 'clone'.$numeroClone;
echo $nomClone."<br>";
$$nomClone = clone $male1;
echo $$nomClone."<br>";
$$nomClone->changerPrenom($prenom);
    echo $$nomClone."<br>";
    echo "<hr>";
$clones[] = $$nomClone;

}
print_r($clones);
echo "<br>";
//echo $numeroClone;

$prenoms = [
'Lise', 'Marie', 'Ninon', 'Rachida', 'Ana',
'Martine', 'Svetlana', 'Eve', 'Carole',
'Sylvie', 'Laurie', 'Zhang', 'Fatoumata'
];

$femelle1 = new Femelle('Nyyyynyaaa');

foreach ($prenoms as $prenom) {
++$numeroClone;

$nomClone = 'clone'.$numeroClone;
$$nomClone = clone $femelle1;
$$nomClone->changerPrenom($prenom);
$clones[] = $$nomClone;
}
print_r($clones);

foreach ($clones as $clone) {
echo $clone->donnerSexe().'/'.$clone->donnerPrenom().PHP_EOL;
}
//PHP_EOL AFFICHAGE APRS LE TABLEAU MM LIGNE.