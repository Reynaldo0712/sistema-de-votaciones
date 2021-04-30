<?php

class partidoservice implements Iserviciobase{
 
    private $servicio;
    private $context;

    public function __construct($directory){

        $this->servicio = new Servicio();
        $this->context = new Context($directory);
    }
    
    public function Getlista(){

        $listarpartido = array();

        $stmt = $this->context->db->prepare("select * from partidos");
        $stmt->execute();
        
        $result= $stmt->get_result();
    
        if($result->num_rows === 0){
            
            return $listarpartido;
        }else{
            
            while($row = $result->fetch_object()){
                
              $partido = new partido();

                $partido->id = $row->id;
                $partido->nombre = $row->nombre;
                $partido->descripcion = $row->descripcion;
                $partido->logo_partido = $row->logo_partido;
                $partido->estado = $row->estado;

                array_push($listarpartido,$partido);
            }
        }
        
        return $listarpartido;
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

                $candidato->id= $row->id;
                $candidato->nombre= $row->nombre;
                $candidato->Apellido= $row->Apellido;
                $candidato->Partido= $row->Partido;
                $candidato->Puesto= $row->Puesto;
                $candidato->Foto= $row->Foto;
                $candidato->estado= $row->estado;

                array_push($listarcandidato,$candidato); 
            }
        }
        
        return $listarcandidato;
        $stmt->close();
        
    }

    public function GetlistaS(){

        $listarcandidato = array();
    
        $stmt = $this->context->db->prepare("select * from candidatos where puesto = 3");
        $stmt->execute();
        $result= $stmt->get_result();
    
        if($result->num_rows === 0){
            
            return $listarcandidato;
        }else{
            
            while($row = $result->fetch_object()){
                
              $candidato = new candidato();

                $candidato->id= $row->id;
                $candidato->nombre= $row->nombre;
                $candidato->Apellido= $row->Apellido;
                $candidato->Partido= $row->Partido;
                $candidato->Puesto= $row->Puesto;
                $candidato->Foto= $row->Foto;
                $candidato->estado= $row->estado;

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

                $candidato->id= $row->id;
                $candidato->nombre= $row->nombre;
                $candidato->Apellido= $row->Apellido;
                $candidato->Partido= $row->Partido;
                $candidato->Puesto= $row->Puesto;
                $candidato->Foto= $row->Foto;
                $candidato->estado= $row->estado;

                array_push($listarcandidato,$candidato); 
            }
        }
        
        return $listarcandidato;
        $stmt->close();
        
    }

    public function GetlistaP(){

        $listarcandidato = array();
    
        $stmt = $this->context->db->prepare("select * from candidatos where Puesto = 1");
        $stmt->execute();
        $result= $stmt->get_result();
    
        if($result->num_rows === 0){
            
            return $listarcandidato;
        }else{
            
            while($row = $result->fetch_object()){
                
              $candidato = new candidato();

                $candidato->id= $row->id;
                $candidato->nombre= $row->nombre;
                $candidato->Apellido= $row->Apellido;
                $candidato->Partido= $row->Partido;
                $candidato->Puesto= $row->Puesto;
                $candidato->Foto= $row->Foto;
                $candidato->estado= $row->estado;

                array_push($listarcandidato,$candidato); 
            }
        }
        
        return $listarcandidato;
        $stmt->close();
        
    }
    
    
    public function GetByid($id){

        $partido = new partido();
    
        $stmt = $this->context->db->prepare("select * from partidos where id = ?");
        $stmt->bind_param("i",$id);
            
        $stmt->execute();
    
        $result= $stmt->get_result();
    
        if($result->num_rows === 0){
            
            return null;

        }else{
            
            while($row = $result->fetch_object()){
    
                $partido->id = $row->id;
                $partido->nombre = $row->nombre;
                $partido->descripcion = $row->descripcion;
                $partido->logo_partido = $row->logo_partido;
                $partido->estado = $row->estado;
             
            }
        }
        return $partido; 
        $stmt->close();
    }
    
    public function añadir($entidad){

        $stmt = $this->context->db->prepare("insert into partidos (nombre,descripcion,estado) Values(?,?,?)");

        $stmt->bind_param("ssi",$entidad->nombre,$entidad->descripcion,$entidad->estado); 
        $stmt->execute();
        $stmt->close();

        $partidoid = $this->context->db->insert_id;

        if(isset($_FILES['logo_partido'])){
        
            $photofile=$_FILES['logo_partido'];
            
            if($photofile['error']==4){
            
                $entidad->foto = "";
                
            }else{
                
                $typeReplace = str_replace("image/", "", $_FILES['logo_partido']['type']);
                $type= $photofile['type'];
                $size= $photofile['size'];
                $name= $partidoid . '.' . $typeReplace;
                $tmpname= $photofile['tmp_name'];
                
                $success=$this->servicio->uploadImage('imagenes/partido/',$name,$tmpname,$type,$size);
                
                if($success){
                    
                    $stmt = $this->context->db->prepare("update partidos set logo_partido = ? where id = ? ");
                    $stmt->bind_param("si",$name,$partidoid);
                    $stmt->execute();
                    $stmt->close();
                }
            }
        }
    }

    public function eliminar($id){

        $stmt = $this->context->db->prepare("delete from partidos where id = ? ");
    
        $stmt->bind_param("i",$id);
        $stmt->execute();
        $stmt->close();
    
    }

    public function editar($id,$entidad){
    
        $elemento= $this->GetByid($id);
        
         $stmt = $this->context->db->prepare("update partidos set nombre = ?,descripcion = ?,estado= ? where id = ?");
         $stmt->bind_param("sssi",$entidad->nombre,$entidad->descripcion,$entidad->estado,$id);
         $stmt->execute();
         $stmt->close();
    
        if(isset($_FILES['logo_partido'])){
    
            $photofile=$_FILES['logo_partido'];
            
            if($photofile['error'] == 4){
                
                $entidad->profilePhoto = $elemento->logo_partido;
                
            }else{
                
                $typeReplace = str_replace("image/", "", $_FILES['logo_partido']['type']);
                $type= $photofile['type'];
                $size=$photofile['size'];
                $name=$id . '.' . $typeReplace;
                $tmpname=$photofile['tmp_name'];
                
                $success=$this->servicio->uploadImage('imagenes/partido/',$name,$tmpname,$type,$size);
                
                if($success){
                
                    $stmt = $this->context->db->prepare("update partidos set logo_partido = ? where id =? ");
                    $stmt->bind_param("si",$name,$id);
                    $stmt->execute();
                    $stmt->close();
                }
                
            }   
        }
    }
}