<?php

class ciudadano{

    public $documento_dentidad; 
    public $nombre;
    public $Apellido;
    public $estado;
    public $Email;

    private $servicio;

    public function __construct(){
        
        $this->servicio= new Servicio();
    }

    public function enviardatos($documento_dentidad,$nombre,$apellido,$email,$estado){
        
        $this->documento_dentidad = $documento_dentidad;
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->email= $email;
        $this->estado = $estado;
    }
}
    
?>