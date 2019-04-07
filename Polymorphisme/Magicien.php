<?php
/**
 * Created by PhpStorm.
 * User: mater
 * Date: 06/04/2019
 * Time: 15:11
 */
require_once "Personnage.php";
class Magicien extends Personnage
{
   private $nbreBaguette;

    /**
     * Magicien constructor.
     * @param $nbreBaguette
     */
    public function __construct($nom,$nbreBaguette)
    {
        parent::__construct($nom);
        $this->nbreBaguette = $nbreBaguette;
    }

    /**
     * @return mixed
     */
    public function getNbreBaguette()
    {
        return $this->nbreBaguette;
    }

    /**
     * @param mixed $nbreBaguette
     */
    public function setNbreBaguette($nbreBaguette)
    {
        $this->nbreBaguette = $nbreBaguette;
    }


}