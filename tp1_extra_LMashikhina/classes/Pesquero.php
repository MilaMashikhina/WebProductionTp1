<!-- Crear la clase Pesquero. Al igual que aldeano, pesquero va a tener un único método
llamado recolectar que se va a comportar igual que el método recolectar de la clase
aldeano. La diferencia principal radica en que el método recolectar de la clase pesquero
recibe como parámetro un objeto de la clase BancoDePesca. -->

<?php

class Pesquero implements Recolectar
{
    use PuedoRecolectar;

    private int $velocidadRecoleccion;


    public function __construct()
    {
        $this->velocidadRecoleccion = 18;
    }
}
