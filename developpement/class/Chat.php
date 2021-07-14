<?php

class Chat
{
    public string $gender;
    public string $appel = "Miaouuu";
    public int $NbPattes = 4;

    public function __construct($gender)
    {
        $this->gender = $gender;
    }

    public function getNbPattes(): int
    {
        return $this->NbPattes;
    }

    public function Miaule()
    {
        echo $this->appel;
    }
}