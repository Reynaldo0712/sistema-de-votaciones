<?php

class candidato{

    public $id;
    public $nombre;
    public $apellido;
    public $partido_pertenece;    
    public $puesto_aspira;
    public $estado;
    public $foto_perfil;
    public $votos;
    private $servicio;
    
    public function __construct(){
        
        $this->servicio= new Servicio();
    }

    public function enviardatos($id,$nombre,$apellido,$partido_pertenece,$puesto_aspira,$estado,$votos){
    
        $this->id = $id;
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->partido_pertenece = $partido_pertenece;
        $this->puesto_aspira = $puesto_aspira;        
        $this->estado = $estado;
        $this->votos = $votos;
    }
}

?>