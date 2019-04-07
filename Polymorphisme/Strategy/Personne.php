<?php
/**
 * Created by PhpStorm.
 * User: mater
 * Date: 07/04/2019
 * Time: 14:17
 */
include_once "PersonneInterface.php";
class Personne implements PersonneInterface
{

    public function donnerPhrase(): string
    {
        return 'bonjour test Design Pattern Strategy oooops!';
    }


}