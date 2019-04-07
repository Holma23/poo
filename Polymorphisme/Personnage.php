<?php
/**
 * Created by PhpStorm.
 * User: mater
 * Date: 06/04/2019
 * Time: 15:10
 */

class Personnage
{
 protected $nom;

    /**
     * Personnage constructor.
     * @param $nom
     */
    public function __construct($nom)
    {
        $this->nom = $nom;
    }

    /**
     * @return mixed
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * @param mixed $nom
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    public function __toString()
    {
        return $this.nom;
    }

    public function saluer(){
        echo "Bonjour"."<br>";
     }

}