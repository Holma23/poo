<?php
/**
 * Created by PhpStorm.
 * User: mater
 * Date: 07/04/2019
 * Time: 12:10
 */
require_once  "HumainAbstract.php";

class Male extends HumainAbstract
{
    protected $sexe = 'M';

    /**
     * Male constructor.
     * @param string $sexe
     */
    public function __construct($prenom,$sexe)
    {
        parent::__construct($prenom);
        $this->sexe = $sexe;
    }


    public function __clone()
    {
    }

    public function __toString()
    {
        return "Prenon: ".$this->prenom;
        //"SEXE: ".$this->sexe."<br> ".
    }


}

