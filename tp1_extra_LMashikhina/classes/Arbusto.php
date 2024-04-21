<?php

class Arbusto implements Recolectable
{
    use TengoComida; //which has the methos of getAlimento 

    public function __construct()
    {
        $this->cantidadAlimento = 125;
    }
}
