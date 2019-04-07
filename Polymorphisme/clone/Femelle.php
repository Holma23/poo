<?php
/**
 * Created by PhpStorm.
 * User: mater
 * Date: 07/04/2019
 * Time: 12:11
 */
include_once "HumainAbstract.php";
class Femelle extends HumainAbstract
{

    protected $sexe = 'F';

    public function __clone()
    {
    }
    public function __toString()
    {
        return "".$this->sexe." ".$this.$this->prenom;
    }


}