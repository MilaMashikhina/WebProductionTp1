<!-- El trait PuedoRecolectar va a
implementar el método recolectar de la interfaz Recolectar. -->
<?php

trait PuedoRecolectar
{

    private int $velocidadRecoleccion;
    public function recolectar(Recolectable $recolectable)
    {
        $tiempo = ceil($recolectable->getAlimento() / $this->velocidadRecoleccion);

        echo 'Recolecté todo el alimento en ' . $tiempo . ' minutos<br>';
    }
}
