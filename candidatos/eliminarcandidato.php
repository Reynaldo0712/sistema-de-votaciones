<?php 

require_once 'candidato.php';
require_once '../database/servicio.php';
require_once '../database/Iserviciobase.php';
require_once '../database/FileHandler.php';
require_once '../database/JsonFileHandler.php';
require_once '../database/Context.php';
require_once 'candidatoservice.php';

  $service = new candidatoservice("database");

  $id=isset($_GET['id']);
  
  if($id){
  
      $candidatoid=$_GET['id'];
      $service->eliminar($candidatoid);
  }
  
  header("location: listarcandidato.php");
  exist();
  
  ?>