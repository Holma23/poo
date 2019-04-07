<?php
/**
 * Created by PhpStorm.
 * User: mater
 * Date: 07/04/2019
 * Time: 14:20
 */

class Contexte
{
    private $strategie;

    public function __construct(StrategieInterface $strategie)
    {
        $this->strategie = $strategie;
    }

    public function exprimeReaction(PersonneInterface $personne): string
    {
        return $this->strategie->reagir($personne);
    }
}