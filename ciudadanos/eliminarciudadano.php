<?php 

require_once 'ciudadano.php';
require_once '../database/servicio.php';
require_once '../database/Iserviciobase.php';
require_once '../database/FileHandler.php';
require_once '../database/JsonFileHandler.php';
require_once '../database/Context.php';
require_once 'ciudadanoservice.php';

  $service = new ciudadanoservice("database");

  $id=isset($_GET['id']);
  
  if($id){
  
      $ciudadanoid=$_GET['id'];
      $service->eliminar($ciudadanoid);
  }
  
  header("location: listarciudadano.php");
  exist();
  
  ?>