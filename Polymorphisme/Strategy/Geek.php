<?php
/**
 * Created by PhpStorm.
 * User: mater
 * Date: 07/04/2019
 * Time: 14:13
 */
include_once "StrategieInterface.php";
class Geek  implements StrategieInterface
{
    public function reagir(PersonneInterface $personne): string
    {
        return str_replace('o', '0', $personne->donnerPhrase()).PHP_EOL;
    }
}