<?php
class generarDados{
    public $nombre;
    public $puntos;

    function __construct($nombre){
        $this->nombre = $nombre;
        $this->puntos = 0;
    }

    function lanzarDados(){
        $dados = [];
        for ($i = 0; $i < 3; $i++) {
            $dados[] = rand(1, 6); 
        }
        return $dados;
    }

    function sumarPuntos($total) {
        $this->puntos += $total;
    }
}