<?php
/**
 * Created by PhpStorm.
 * User: mater
 * Date: 06/04/2019
 * Time: 15:12
 */
require_once "Personnage.php";
class Voleur extends Personnage
{
   private $nbreVols;

    public function __construct( $nom, $nbreVols)
    {
        parent::__construct($nom);
        $this->nbreVols = $nbreVols;
    }
    /**
     * @return mixed
     */
    public function getNbreVols()
    {
        return $this->nbreVols;
    }

    /**
     * @param mixed $nbreVols
     */
    public function setNbreVols($nbreVols)
    {
        $this->nbreVols = $nbreVols;
    }

    public function __toString()
    {
        return 'le voleur '.$this->nbreVols;
    }

    public function saluer(){
        echo "voler"."<br>";
    }



}