<?php

class ciudadanoservice implements Iserviciobase{
 
    private $servicio;
     private $context;
    
    public function __construct($directory){
        
         $this->servicio = new Servicio();
        $this->context = new Context($directory);
    }
    public function Getlista(){

        $listarciudadano = array();
    
        $stmt = $this->context->db->prepare("select * from ciudadanos");
        $stmt->execute();
        $result= $stmt->get_result();
    
        if($result->num_rows === 0){
            
            return $listarciudadano;

        }else{
            
            while($row = $result->fetch_object()){
                
              $ciudadano = new ciudadano();

                $ciudadano->documento_dentidad = $row->documento_dentidad;
                $ciudadano->nombre = $row->nombre;
                $ciudadano->apellido = $row->apellido;
                $ciudadano->email = $row->email;
                $ciudadano->estado = $row->estado;

                array_push($listarciudadano,$ciudadano);
            }
        }
        return $listarciudadano;
        $stmt->close();
    }

    public function GetlistaD(){

        $listarcandidato = array();
    
        $stmt = $this->context->db->prepare("select * from candidatos where puesto_aspira = 2");
        $stmt->execute();
        $result= $stmt->get_result();
    
        if($result->num_rows === 0){
            
            return $listarcandidato;

        }else{
            
            while($row = $result->fetch_object()){
                
                $candidato = new candidato();

                $candidato->id = $row->id;
                $candidato->nombre = $row->nombre;
                $candidato->apellido = $row->apellido;
                $candidato->partido_pertenece = $row->partido_pertenece;
                $candidato->puesto_aspira = $row->puesto_aspira;
                $candidato->foto_perfil = $row->foto_perfil;
                $candidato->estado = $row->estado;

                array_push($listarcandidato,$candidato); 
            }
        }
        return $listarcandidato;
        $stmt->close();
    }

    public function GetlistaS(){

        $listarcandidato = array();
    
        $stmt = $this->context->db->prepare("select * from candidatos where puesto_aspira = 3");
        $stmt->execute();
        $result= $stmt->get_result();
    
        if($result->num_rows === 0){
            
            return $listarcandidato;

        }else{
            
            while($row = $result->fetch_object()){
                
                $candidato = new candidato();

                $candidato->id = $row->id;
                $candidato->nombre = $row->nombre;
                $candidato->apellido = $row->apellido;
                $candidato->partido_pertenece = $row->partido_pertenece;
                $candidato->puesto_aspira = $row->puesto_aspira;
                $candidato->foto_perfil = $row->foto_perfil;
                $candidato->estado = $row->estado;

                array_push($listarcandidato,$candidato); 
            }
        }
        return $listarcandidato;
        $stmt->close();    
    }

    public function GetlistaA(){

        $listarcandidato = array();
    
        $stmt = $this->context->db->prepare("select * from candidatos where puesto_aspira = 4");
        $stmt->execute();
        $result= $stmt->get_result();
    
        if($result->num_rows === 0){
            
            return $listarcandidato;

        }else{
            
            while($row = $result->fetch_object()){
                
                $candidato = new candidato();

                $candidato->id = $row->id;
                $candidato->nombre = $row->nombre;
                $candidato->apellido = $row->apellido;
                $candidato->partido_pertenece = $row->partido_pertenece;
                $candidato->puesto_aspira = $row->puesto_aspira;
                $candidato->foto_perfil = $row->foto_perfil;
                $candidato->estado = $row->estado;

                array_push($listarcandidato,$candidato); 
            }
        }
        return $listarcandidato;
        $stmt->close();    
    }

    public function GetlistaP(){

        $listarcandidato = array();
    
        $stmt = $this->context->db->prepare("select * from candidatos where puesto_aspira = 1");
        $stmt->execute();
        $result= $stmt->get_result();
    
        if($result->num_rows === 0){
            
            return $listarcandidato;

        }else{
            
            while($row = $result->fetch_object()){
                
                $candidato = new candidato();

                $candidato->id = $row->id;
                $candidato->nombre = $row->nombre;
                $candidato->apellido = $row->apellido;
                $candidato->partido_pertenece = $row->partido_pertenece;
                $candidato->puesto_aspira = $row->puesto_aspira;
                $candidato->foto_perfil = $row->foto_perfil;
                $candidato->estado = $row->estado;

                array_push($listarcandidato,$candidato); 
            }
        }
        return $listarcandidato;
        $stmt->close();
    }

    public function añadir($entidad){

        $stmt = $this->context->db->prepare("insert into ciudadanos (documento_dentidad,nombre,apellido,email,estado) Values(?,?,?,?,?)");

        $stmt->bind_param("ssssi",$entidad->documento_dentidad,$entidad->nombre,$entidad->apellido,$entidad->email,$entidad->estado);
        $stmt->execute();
        $stmt->close();

        $ciudadanoid = $this->context->db->insert_id;
    }

    public function eliminar($id){

        $stmt = $this->context->db->prepare("delete from ciudadanos where documento_dentidad = ? ");
        $stmt->bind_param("s",$id);
        $stmt->execute();
        $stmt->close();
    }

    public function GetByid($id){

        $ciudadano = new ciudadano();

        $stmt = $this->context->db->prepare("select * from ciudadanos where documento_dentidad = ?");
        $stmt->bind_param("i",$id);
        $stmt->execute();
        $result= $stmt->get_result();

        if($result->num_rows === 0){
            
            return null;
            
        }else{
            
            while($row = $result->fetch_object()){
                
            $ciudadano->documento_dentidad = $row->documento_dentidad;
            $ciudadano->nombre = $row->nombre;
            $ciudadano->apellido = $row->apellido;
            $ciudadano->email = $row->email;
            $ciudadano->estado = $row->estado;
            }
        }
        return $ciudadano; 
        $stmt->close();
    }

    public function editar($id,$entidad){
    
        $elemento= $this->GetByid($id);
            
        $stmt = $this->context->db->prepare("update ciudadanos set documento_dentidad = ?, nombre = ?,apellido = ?,email= ?,estado= ? where documento_dentidad = ?");
        $stmt->bind_param("isssii",$entidad->documento_dentidad,$entidad->nombre,$entidad->apellido,$entidad->email,$entidad->estado,$id);
        $stmt->execute();
        $stmt->close();
    }
}