<?php

class loginService{
 
    private $context;

    public function __construct($directory){
        
        $this->servicio = new Servicio();
        $this->context = new Context($directory);
    }

    public function login($usuario,$contrasena){

        $stmt = $this->context->db->prepare("select * from usuario where usuario = ? and contrasena = ?");

        $stmt->bind_param("ss",$usuario,$contrasena);
        $stmt->execute();
        $result = $stmt->get_result();

        if($result->num_rows === 0){

            return null;

        }else{

            $arr = array();

            // while($row = $result->fetch_object()){

                $entity = $result->fetch_object();
                $usuario = new usuario();

                $usuario->id = $entity->id;
                $usuario->usuario = $entity->usuario;
                $usuario->contrasena = $entity->contrasena;
                
                return $usuario;
        }
    }
}

