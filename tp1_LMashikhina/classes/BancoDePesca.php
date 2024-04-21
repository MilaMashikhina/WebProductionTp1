<!-- Crear la clase BancoDePesca que tenga un único método llamado getAlimento que
devuelva un entero con la cantidad total de comida que posee. Para eso, bancoDePesca va
a devolver el valor seteado en un atributo privado llamado cantidadAlimento. El atributo
debe estar seteado al momento que se crea una instancia de bancoDePesca. Para todas
las instancias el valor es el mismo: 225. -->

<?php
//the version before refactoring
// class BancoDePesca
// {
//     private $cantidadAlimento;

//     public function __construct()
//     {
//         $this->cantidadAlimento = 225;
//     }

//     public function getAlimento()
//     {
//         return $this->cantidadAlimento;
//     }
// }


class BancoDePesca implements Recolectable
{
    use TengoComida;


    public function __construct()
    {
        $this->cantidadAlimento = 225;
    }
}
