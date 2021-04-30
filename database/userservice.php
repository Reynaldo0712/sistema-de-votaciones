<?php

class userservice {
 
private $context;
    
    public function __construct($directory){
        
        $this->context = new Context($directory);
    }

    public function login($documento_dentidad){

        $stmt= $this->context->db->prepare("select * from ciudadanos where documento_dentidad = ? and estado = 1");
        $stmt->bind_param("s",$documento_dentidad);
        $result= $stmt->execute();
        $result= $stmt->get_result();

        if($result->num_rows === 0){

            return null; 
        
        }else{

            $row = $result->fetch_object();
            $login = new Login();

            $login->documento_dentidad = $row->documento_dentidad;
            $login->nombre = $row->nombre;
            $login->apellido = $row->apellido;
            $login->email = $row->email;

            return $login;
        }
    }

    public function GetlistaP(){

        $listarcandidato = array();

        $stmt = $this->context->db->prepare("select count(id) from candidatos where puesto_aspira = 1 and estado = 1");
        $stmt->execute();
        $result = $stmt->get_result();
    
        return $result->fetch_object();
        // if($result->num_rows === 0){
            
        //     return $listarcandidato;

        // }else{
            
        //     while($row = $result->fetch_object()){
                
        //         $candidato = new candidato();

        //         $candidato->id = $row->id;
        //         $candidato->nombre = $row->nombre;
        //         $candidato->apellido = $row->apellido;
        //         $candidato->partido_pertenece = $row->partido_pertenece;
        //         $candidato->puesto_aspira = $row->puesto_aspira;
        //         $candidato->foto_perfil = $row->foto_perfil;
        //         $candidato->estado = $row->estado;

        //         array_push($listarcandidato,$candidato); 
        //     }
        // }
        
        // return $listarcandidato;
        // $stmt->close();
    }
}

?>