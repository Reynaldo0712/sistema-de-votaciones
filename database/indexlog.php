<?php

class login{

public $documento_dentidad;
public $nombre;
public $apellido;
public $email;

public function __construct(){

}

public function initdata($documento_dentidad,$nombre,$apellido,$email){
    
    $this->documento_dentidad=$documento_dentidad;
    $this->nombre=$nombre;
    $this->apellido=$apellido;
    $this->email=$email;

} 

}
    
?>