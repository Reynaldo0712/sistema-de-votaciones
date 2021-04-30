<?php 

  require_once 'puestoelectivo.php';
  require_once '../database/servicio.php';
  require_once '../database/Iserviciobase.php';
  require_once '../database/FileHandler.php';
  require_once '../database/JsonFileHandler.php';
  require_once '../database/Context.php';
  require_once 'puestoservice.php';


  $service = new puestoservice("database");


  $id=isset($_GET['id']);
  
  if($id){
  
      $puestoid=$_GET['id'];
      $service->eliminar($puestoid);
  
  }
  
  header("location: listarpuesto.php");
  exist();
  
  ?>