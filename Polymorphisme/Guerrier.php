<?php
/**
 * Created by PhpStorm.
 * User: mater
 * Date: 06/04/2019
 * Time: 15:12
 */
require_once "Personnage.php";
class Guerrier extends Personnage
{
  private $nbreGuerre;
  private $puissance;

    /**
     * Guerrier constructor.
     * @param $nbreGuerre
     * @param $puissance
     */
    public function __construct($nom,$nbreGuerre, $puissance)
    {
        parent::__construct($nom);
        $this->nbreGuerre = $nbreGuerre;
        $this->puissance = $puissance;
    }

    /**
     * @return mixed
     */
    public function getNbreGuerre()
    {
        return $this->nbreGuerre;
    }

    /**
     * @param mixed $nbreGuerre
     */
    public function setNbreGuerre($nbreGuerre)
    {
        $this->nbreGuerre = $nbreGuerre;
    }

    /**
     * @return mixed
     */
    public function getPuissance()
    {
        return $this->puissance;
    }

    /**
     * @param mixed $puissance
     */
    public function setPuissance($puissance)
    {
        $this->puissance = $puissance;
    }
    public function saluer(){
        echo "Battre"."<br>";
    }


}