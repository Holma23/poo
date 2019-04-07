<?php
/**
 * Created by PhpStorm.
 * User: mater
 * Date: 07/04/2019
 * Time: 14:13
 */
include_once "StrategieInterface.php";
include_once "Personne.php";
class Enerve  implements StrategieInterface
{
    public function reagir(PersonneInterface $personne): string
    {
        return strtoupper($personne->donnerPhrase().' !!!').PHP_EOL;
    }
}