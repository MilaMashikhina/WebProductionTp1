<!-- Crear la clase Aldeano con el método recolectar. El método debe recibir como parámetro
un objeto del tipo Arbusto. El método debe tener un echo que indique cuánto tiempo le lleva
al Aldeano recolectar todo el alimento del Arbusto (Ej: “Recolecté todo el alimento en 7
minutos)”. Los valores decimales se deben redondear usando la función ceil de php.
Para realizar el cálculo el aldeano se va a valer de un atributo llamado
velocidadRecoleccion. Este atributo debe ser un atributo privado y va a indicar la cantidad
de alimento que un aldeano recoge por minuto. Para todos los aldeanos este valor debe ser
entero y estar seteado en 18 (18 unidades de alimento por minuto). Cuando el aldeano es
instanciado este valor ya debe estar seteado. -->
<?php

//the version before refactoring
// class Aldeano
// {

//     private int $velocidadRecoleccion;


//     public function __construct()
//     {
//         $this->velocidadRecoleccion = 18;
//     }

//  
//     public function recolectar(Arbusto $arbusto)
//     {
//         $tiempo = ceil($arbusto->getAlimento() / $this->velocidadRecoleccion);

//         echo 'Recolecté todo el alimento en ' . $tiempo . ' minutos';
//     }
// }


class Aldeano implements Recolectar
{
    use PuedoRecolectar;

    public function __construct()
    {
        $this->velocidadRecoleccion = 18;
    }
}
