<?php

class puestoelectivo{

    public $id; 
    public $nombre;
    public $descripcion;
    public $estado;
    private $servicio;
    
    public function __construct(){
        
        $this->servicio = new Servicio();
    }

    public function enviardatos($id,$nombre,$descripcion,$estado){
        
        $this->id = $id;
        $this->nombre = $nombre;
        $this->descripcion = $descripcion;
        $this->estado = $estado;
            
    }
}

?>