<?php

class puestoservice implements Iserviciobase{
 
    private $servicio;
    private $context;

    public function __construct($directory){
        
        $this->servicio = new Servicio();
        $this->context = new Context($directory);
    }

    public function Getlista(){

        $listarpuesto = array();

        $stmt = $this->context->db->prepare("select * from puesto_electivo");
        $stmt->execute();

        $result= $stmt->get_result();
    
        if($result->num_rows === 0){
            
            return $listarpuesto;

        }else{
            
            while($row = $result->fetch_object()){
                
              $puesto = new puestoelectivo();

                $puesto->id = $row->id;
                $puesto->nombre = $row->nombre;
                $puesto->descripcion = $row->descripcion;
                $puesto->estado = $row->estado;

                array_push($listarpuesto,$puesto);
            }
        }
        
        return $listarpuesto;
        $stmt->close();
    }

    public function GetlistaD(){

        $listarcandidato = array();
    
        $stmt = $this->context->db->prepare("select * from candidatos where puesto = 2");
        $stmt->execute();
        $result= $stmt->get_result();
    
        if($result->num_rows === 0){
            
            return $listarcandidato;

        }else{
            
            while($row = $result->fetch_object()){
                
              $candidato = new candidato();

                $candidato->id = $row->id;
                $candidato->nombre = $row->aombre;
                $candidato->apellido = $row->Apellido;
                $candidato->partido_pertenece = $row->partido_pertenece;
                $candidato->puesto_aspira = $row->puesto_aspira;
                $candidato->foto = $row->foto_perfil;
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
                $candidato->nombre = $row->aombre;
                $candidato->apellido = $row->Apellido;
                $candidato->partido_pertenece = $row->partido_pertenece;
                $candidato->puesto_aspira = $row->puesto_aspira;
                $candidato->foto = $row->foto_perfil;
                $candidato->estado = $row->estado;

                array_push($listarcandidato,$candidato); 
            }
        }
        
        return $listarcandidato;
        $stmt->close();
    }

    public function GetlistaA(){

        $listarcandidato = array();
    
        $stmt = $this->context->db->prepare("select * from candidatos where puesto = 4");
        $stmt->execute();
        $result= $stmt->get_result();
    
        if($result->num_rows === 0){
            
            return $listarcandidato;

        }else{
            
            while($row = $result->fetch_object()){
                
                $candidato = new candidato();

                $candidato->id = $row->id;
                $candidato->nombre = $row->aombre;
                $candidato->apellido = $row->Apellido;
                $candidato->partido_pertenece = $row->partido_pertenece;
                $candidato->puesto_aspira = $row->puesto_aspira;
                $candidato->foto = $row->foto_perfil;
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
                $candidato->nombre = $row->aombre;
                $candidato->apellido = $row->Apellido;
                $candidato->partido_pertenece = $row->partido_pertenece;
                $candidato->puesto_aspira = $row->puesto_aspira;
                $candidato->foto = $row->foto_perfil;
                $candidato->estado = $row->estado;

                array_push($listarcandidato,$candidato); 
            }
        }
        
        return $listarcandidato;
        $stmt->close();
    }

    public function GetByid($id){

        $puesto = new puestoelectivo();
    
        $stmt = $this->context->db->prepare("select * from puesto_electivo where id = ?");
        $stmt->bind_param("i",$id);
        $stmt->execute();
    
        $result= $stmt->get_result();
    
        if($result->num_rows === 0){
            
            return null;

        }else{
            
            while($row = $result->fetch_object()){
    
                $puesto->id = $row->id;
                $puesto->nombre = $row->nombre;
                $puesto->descripcion = $row->descripcion;
                $puesto->estado = $row->estado;
             
            }
        }
        return $puesto; 
        $stmt->close();
    }
    
    public function añadir($entidad){

     $stmt = $this->context->db->prepare("insert into puesto_electivo (nombre,descripcion,estado) Values(?,?,?)");
     $stmt->bind_param("sss",$entidad->nombre,$entidad->descripcion,$entidad->estado);
     $stmt->execute();
     $stmt->close();

     $puestoid = $this->context->db->insert_id;

    }

    public function eliminar($id){

        $stmt = $this->context->db->prepare("delete from puesto_electivo where id = ? ");
        $stmt->bind_param("i",$id);
        $stmt->execute();
        $stmt->close();
    }

    public function editar($id,$entidad){

        $elemento= $this->GetByid($id);

        $stmt = $this->context->db->prepare("update puesto_electivo set nombre = ?,descripcion = ?,estado= ? where id = ?");
        $stmt->bind_param("sssi",$entidad->nombre,$entidad->descripcion,$entidad->estado,$id);
        $stmt->execute();
        $stmt->close();
    }
    
}