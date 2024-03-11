<?php

class jugador {
  public $nombre = "daniela";
}


// Crear una instancia de la clase Jugador
$jugador = new Jugador();

// Acceder a la propiedad "nombre" e imprimir su valor
echo "Nombre del jugador: " . $jugador->$nombre . "<br>";

?>