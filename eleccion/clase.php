<?php

class eleccion{

    public $id; 
    public $nombre;
    public $Fecha_de_Realizacion;
    public $estado;
    


    private $servicio;



public function enviardatos($id,$nombre,$Fecha_de_Realizacion,$estado){
    
    $this->id=$id;
    $this->nombre=$nombre;
    $this->Fecha_de_Realizacion=$Fecha_de_Realizacion;
     $this->estado=$estado;
     
     
}




}




?>