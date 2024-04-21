<?php

class AldeanoChino extends Aldeano
{

    use PuedoRecolectar; //which has recolectar
    public function __construct()
    {
        parent::__construct();
        $this->bonus = 0;
    }
}
