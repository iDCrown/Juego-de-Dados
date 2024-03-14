<?php
$conex = mysqli_connect("localhost", "root", "","Juego-de-Dados");

if (!$conex) {
    die("Error de conexión: " . mysqli_connect_error());
}else {
    echo "Conexión exitosa";
}
?>