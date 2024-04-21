<!-- Crear las clases AldeanoChino y AldeanoFranco. 
En el constructor de AldeanoFranco setear en 25 el valor del atributo bonus. El valor del
bonus es un valor entero que indica un porcentaje. En este caso 25%.-->

<?php

class AldeanoFranco extends Aldeano
{

    use PuedoRecolectar;
    public function __construct()
    {
        parent::__construct();
        $this->bonus = 25;
    }
}
