<?php

class usuario{

    public $id;
    public $usuario;
    public $contrasena;
    
    public function __construct(){
        
        $this->servicio= new Servicio();
    }

    public function enviardatos($id,$usuario,$contrasena){
    
        $this->id = $id;
        $this->usuario = $usuario;
        $this->contrasena = $contrasena;
    }
}

?>