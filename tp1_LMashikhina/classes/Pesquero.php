<!-- Crear la clase Pesquero. Al igual que aldeano, pesquero va a tener un único método
llamado recolectar que se va a comportar igual que el método recolectar de la clase
aldeano. La diferencia principal radica en que el método recolectar de la clase pesquero
recibe como parámetro un objeto de la clase BancoDePesca. -->

<?php

class Pesquero implements Recolectar
{
    //the version before refactoring
    //     class Pesquero
    // {
    //     private int $velocidadRecoleccion;


    //     public function __construct()
    //     {
    //         $this->velocidadRecoleccion = 18;
    //     }

    //    
    //     public function recolectar(BancoDePesca  $bancoDePesca)
    //     {
    //         $tiempo = ceil($bancoDePesca->getAlimento() / $this->velocidadRecoleccion);

    //         echo 'Recolecté todo el alimento en ' . $tiempo . ' minutos';
    //     }
    // }
    use PuedoRecolectar;

    public function __construct()
    {
        $this->velocidadRecoleccion = 18;
    }
}
