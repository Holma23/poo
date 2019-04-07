<?php
/**
 * Created by PhpStorm.
 * User: mater
 * Date: 07/04/2019
 * Time: 12:06
 */

abstract class HumainAbstract
{
    protected $prenom;

    protected $sexe;

    public function __construct(string $prenom)
    {
        $this->prenom = $prenom;
    }

    public function donnerSexe(): string
    {
        return $this->sexe;
    }

    public function changerPrenom(string $prenom)
    {
        $this->prenom = $prenom;
    }

    public function donnerPrenom(): string
    {
        return $this->prenom;
    }

    abstract public function __clone();

}