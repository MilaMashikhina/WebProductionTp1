<!-- Crear la clase Arbusto que tenga un único método llamado getAlimento que devuelva un
entero con la cantidad total de comida que posee dicho arbusto. Para eso, arbusto va a
devolver el valor seteado en un atributo privado llamado cantidadAlimento. El atributo debe
estar seteado al momento que se crea una instancia de arbusto. Para todas las instancias el
valor es el mismo: 125. -->


<?php
//the version before refactoring
// class Arbusto
// {

//     private $cantidadAlimento;

//     public function __construct()
//     {
//         $this->cantidadAlimento = 125;
//     }


//     public function getAlimento()
//     {
//         return $this->cantidadAlimento;
//     }
// }

class Arbusto implements Recolectable
{
    use TengoComida;

    public function __construct()
    {
        $this->cantidadAlimento = 125;
    }
}
