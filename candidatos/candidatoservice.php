<?php

class candidatoservice implements Iserviciobase{
 
    private $servicio;
    private $context;

    public function __construct($directory){
        
        $this->servicio = new Servicio();
        $this->context = new Context($directory);
    }

    // public function Getlista(){

    //     $listarcandidato = array();
    
    //     $stmt = $this->context->db->prepare("select * from candidatos");
    //     $stmt->execute();
    //     $result= $stmt->get_result();
    
    //     if($result->num_rows === 0){
            
    //         return $listarcandidato;

    //     }else{
            
    //         while($row = $result->fetch_object()){
                
    //             $candidato = new candidato();

    //             $candidato->id = $row->id;
    //             $candidato->nombre = $row->nombre;
    //             $candidato->apellido = $row->apellido;
    //             $candidato->partido_pertenece = $row->partido_pertenece;
    //             $candidato->puesto_aspira = $row->puesto_aspira;
    //             $candidato->foto_perfil = $row->foto_perfil;
    //             $candidato->estado = $row->estado;
                
    //             array_push($listarcandidato,$candidato); 
    //         }
    //     }
    //     return $listarcandidato;
    //     $stmt->close();
    // }

    public function Getlista(){

        $listarcandidato = array();
    
        $stmt = $this->context->db->prepare("select * from candidatos");
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
 
        $stmt = $this->context->db->prepare("select * from candidatos where puesto_aspira = 1 and estado = 1");
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

    public function GetlistaD(){

        $listarcandidato = array();

        $stmt = $this->context->db->prepare("select * from candidatos where puesto_aspira = 2 and estado = 1");
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
    
        $stmt = $this->context->db->prepare("select * from candidatos where puesto_aspira = 3 and estado = 1");
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
    
        $stmt = $this->context->db->prepare("select * from candidatos where puesto_aspira = 4 and estado = 1");
        $stmt->execute();
        $result = $stmt->get_result();
    
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

    public function GetByid($id){

        $candidato = new candidato();
    
        $stmt = $this->context->db->prepare("select * from candidatos where id = ?");
        $stmt->bind_param("i",$id);
        $stmt->execute();
    
        $result= $stmt->get_result();
    
        if($result->num_rows === 0){
            
            return null;
            
        }else{
            
            while($row = $result->fetch_object()){

                $candidato->id = $row->id;
                $candidato->nombre = $row->nombre;
                $candidato->apellido = $row->apellido;
                $candidato->partido_pertenece = $row->partido_pertenece;
                $candidato->puesto_aspira = $row->puesto_aspira;
                $candidato->foto_perfil = $row->foto_perfil;
                $candidato->estado = $row->estado;
            }
        }
        return $candidato; 
        $stmt->close();
    }
    
    public function añadir($entidad){

        $stmt = $this->context->db->prepare("insert into candidatos (nombre,apellido,partido_pertenece,puesto_aspira,estado,votos) Values(?,?,?,?,?,?)");
        $stmt->bind_param("ssiisi",$entidad->nombre,$entidad->apellido,$entidad->partido_pertenece,$entidad->puesto_aspira,$entidad->estado,$entidad->votos);
        $stmt->execute();
        $stmt->close();

        $candidatoid = $this->context->db->insert_id;

        if(isset($_FILES['foto_perfil'])){
        
            $photofile = $_FILES['foto_perfil'];
        
            if($photofile['foto_perfil'] == 4){
            
                $entidad->foto_perfil = "";
            
            }else{
        
                $typeReplace = str_replace("image/", "", $_FILES['foto_perfil']['type']);
                $type = $photofile['type'];
                $size = $photofile['size'];
                $name = $candidatoid . '.' . $typeReplace;
                $tmpname = $photofile['tmp_name'];

                $success = $this->servicio->uploadImage('imagenes/candidato/',$name,$tmpname,$type,$size);

                if($success){
                    
                    $stmt = $this->context->db->prepare("update candidatos set foto_perfil = ? where id = ? ");

                    $stmt->bind_param("si",$name,$candidatoid);
                    $stmt->execute();
                    $stmt->close();
                }
            }
        }
    }

    public function eliminar($id){

        $stmt = $this->context->db->prepare("delete from candidatos where id = ? ");
        $stmt->bind_param("i",$id);
        $stmt->execute();
        $stmt->close();
    }

    public function editar($id,$entidad){
    
        $elemento = $this->GetByid($id);
        
        $stmt = $this->context->db->prepare("update candidatos set nombre = ?,apellido = ?,partido_pertenece = ?,
        puesto_aspira = ?,estado = ? where id = ?");
        $stmt->bind_param("ssiisi",$entidad->nombre,$entidad->apellido,$entidad->partido_pertenece,$entidad->puesto_aspira,$entidad->estado,$id);
        $stmt->execute();
        $stmt->close();

        if(isset($_FILES['foto_perfil'])){
    
            $photofile = $_FILES['foto_perfil'];
            
            if($photofile['error'] == 4){
                
                $entidad->profilePhoto = $elemento->foto_perfil;
                
            }else{
                
                $typeReplace = str_replace("image/", "", $_FILES['foto_perfil']['type']);
                $type= $photofile['type'];
                $size=$photofile['size'];
                $name=$id . '.' . $typeReplace;
                $tmpname=$photofile['tmp_name'];
                
                $success=$this->servicio->uploadImage('imagenes/candidato/',$name,$tmpname,$type,$size);
                
                if($success){
                 
                    $stmt = $this->context->db->prepare("update candidatos set foto_perfil = ? where id =? ");
                    $stmt->bind_param("si",$name,$id);
                    $stmt->execute();
                    $stmt->close();
                }
            }
        }
    }

    public function votar($id,$entidad){
    
        $elemento= $this->GetByid($id);
        
        $stmt = $this->context->db->prepare("insert into voto (voto) values(?) where id = ?");
        $stmt->bind_param("ii",$entidad->voto,$id);
        $stmt->execute();
        $stmt->close();
    }

    public function GetVotos($id){

        $candidato = new candidato();
    
        $stmt = $this->context->db->prepare("select votos from candidatos where id = ?");
        $stmt->bind_param("i",$id);
        $stmt->execute();
    
        $result= $stmt->get_result();
    
        if($result->num_rows === 0){
            
            return null;
            
        }else{
            
            while($row = $result->fetch_object()){

                $candidato->votos = $row->votos;
            }
        }
        return $candidato; 
        $stmt->close();
    }

    public function agregarVotosP($id){
    
        $elemento= $this->GetByid($id);
        $stmt = $this->context->db->prepare("update candidatos set votos = votos + 1 where id = ?");
        $stmt->bind_param("i",$id);
        $stmt->execute();
        $stmt->close();
    }

    public function agregarVotosD($id){
    
        $elemento= $this->GetByid($id);
        $stmt = $this->context->db->prepare("update candidatos set votos = votos + 1 where id = ?");
        $stmt->bind_param("i",$id);
        $stmt->execute();
        $stmt->close();
    }

    public function agregarVotosS($id){
    
        $elemento= $this->GetByid($id);
        $stmt = $this->context->db->prepare("update candidatos set votos = votos + 1 where id = ?");
        $stmt->bind_param("i",$id);
        $stmt->execute();
        $stmt->close();
    }

    public function agregarVotosA($id){
    
        $elemento= $this->GetByid($id);
        $stmt = $this->context->db->prepare("update candidatos set votos = votos + 1 where id = ?");
        $stmt->bind_param("i",$id);
        $stmt->execute();
        $stmt->close();
    }
}