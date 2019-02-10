<?php
class portafolio
{
   var $idPortafolio;
   var $tipo;
   var $titulo;
   var $pathImgPortada;
   var $pathSitio;
   var $descripcion;

    public function __construct($idPortafolio,$tipo,$titulo,$pathImgPortada,$pathSitio,$descripcion)
    {
        $this->idPortafolio = $idPortafolio;
        $this->tipo = $tipo;
        $this->titulo = $titulo;
        $this->pathImgPortada = $pathImgPortada;
        $this->pathSitio = $pathSitio;
        $this->descripcion = $descripcion;
    }
};


?>