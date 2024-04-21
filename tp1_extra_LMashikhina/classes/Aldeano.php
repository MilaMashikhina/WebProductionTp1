<!-- Convertir Aldeano en una clase abstracta.
2- Agregar en la clase abstracta Aldeano un atributo llamado bonus y un método llamado
getBonus que devuelva el valor de dicho atributo. -->

<?php


abstract class Aldeano implements Recolectar
{
    use PuedoRecolectar;

    protected int $velocidadRecoleccion;
    protected int $bonus;


    public function __construct()
    {
        $this->velocidadRecoleccion = 18;
    }


    public function getBonus()
    {
        return $this->bonus;
    }
}
