<?php

class Poule
{
    public string $cotcot = "Cot cot cot cot";
    public int $NbPattes = 2;

    public function getNbPattes(): int
    {
        return $this->NbPattes;
    }

    public function Caquette()
    {
        echo $this->cotcot;
    }
}