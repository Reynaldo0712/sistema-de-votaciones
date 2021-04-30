<?php 

  require_once 'partido.php';
      require_once '../database/servicio.php';
  require_once '../database/Iserviciobase.php';
  require_once '../database/FileHandler.php';
  require_once '../database/JsonFileHandler.php';
  require_once '../database/Context.php';
  require_once 'partidoservice.php';


  $service = new partidoservice("database");


  $id=isset($_GET['id']);
  
  if($id){
  
      $partidoid=$_GET['id'];
      $service->eliminar($partidoid);
  
  }
  
  header("location: listarpartido.php");
  exist();
  
  ?>