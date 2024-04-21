<!-- el trait
TengoComida va a implementar el método getAlimento de la interfaz Recolectable. -->

<?php

trait TengoComida
{
    private int $cantidadAlimento;

    public function getAlimento(): int
    {
        return $this->cantidadAlimento;
    }
}
