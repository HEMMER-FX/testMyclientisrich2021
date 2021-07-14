<?php

class Dog
{
    public string $gender;
    public string $aboiement = "Wouf Wouf !";
    public int $NbPattes = 4;

    public function __construct($gender)
    {
        $this->gender = $gender;
    }

    public function getNbPattes(): int
    {
        return $this->NbPattes;
    }

    public function Aboie()
    {
        echo $this->aboiement;
    }
}