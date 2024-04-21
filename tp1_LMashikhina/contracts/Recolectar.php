<!-- La interfaz Recolectar debe tener declarada la firma de un método llamado recolectar que espera como
único parámetro una instancia de Recolectable. -->


<?php

interface Recolectar
{

    public function recolectar(Recolectable $recolectable);
}
