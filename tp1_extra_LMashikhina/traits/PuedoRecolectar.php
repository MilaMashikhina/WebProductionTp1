<!-- Modificar el trait PuedoRecolectar para que tenga en cuenta el valor del bonus para hacer
el cálculo en el método recolectar. Es decir, si un aldeano sin bonus (los aldeanos chinos)
recolectan alimento a 18 unidades por minuto, un aldeano con un bonus del 25% (aldeano
franco) va a recolectar esa cantidad un 25% más rápido: 23 unidades por minuto (recordar
que siempre vamos a usar ceil para redondear todos los valores). -->
<?php

trait PuedoRecolectar
{

    public function recolectar(Recolectable $recolectable)
    {
        $velocidadConBonus = $this->velocidadRecoleccion; //setting basic value

        //where negative bonus is possible, seeing it as penalty
        if (property_exists($this, 'bonus')) {

            $velocidadConBonus = ceil($this->velocidadRecoleccion * (1 + $this->bonus / 100));
            $tiempo = ceil($recolectable->getAlimento() / $velocidadConBonus);
        }
        echo 'Recolecté todo el alimento en ' . $tiempo . ' minutos<br>';
    }


    // OR where negative bonus should not be possible
    // public function recolectar(Recolectable $recolectable)
    // {
    //     if (property_exists($this, 'bonus')) {
    //         if ($this->bonus < 0) {
    //             $this->bonus = 0; // setting bonus to 0 to prevent penalty
    //         }
    //         $velocidadConBonus = ceil($this->velocidadRecoleccion * (1 + $this->bonus / 100)); //calculating positive or zero bonus
    //         $tiempo = ceil($recolectable->getAlimento() / $velocidadConBonus);
    //     }
    //     echo 'Recolecté todo el alimento en ' . $tiempo . ' minutos<br>';
    // }
}
