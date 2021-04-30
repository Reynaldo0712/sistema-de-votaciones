<link rel="stylesheet" href="..assents/css/stlye.css">

<?php 

include "../layout/layout.php";
require_once '../database/servicio.php';
require_once "../database/Iserviciobase.php";
require_once "puestoservice.php";
require_once "../database/Context.php";
require_once "../database/FileHandler.php";
require_once "../database/JsonFileHandler.php";
require_once "puestoelectivo.php";

$service = new puestoservice("database");

if (isset($_POST['nombre']) && isset($_POST['desc'])

&& isset($_POST['estado'])) {

  $newpuesto = new puestoelectivo();
  
   $newpuesto->enviardatos(0,$_POST['nombre'],$_POST['desc'],$_POST['estado']);

   echo '<script>alert("Puesto añadido")</script>'; 
  
  $service->añadir($newpuesto);
  
   
      header("location: listarpuesto.php");
      exit();
  
  
    }

?>

<?php printHeader(true); ?>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<div class="card text-white bg-dark mb-3">
    <h5 class="card-header">Crear Puesto</h5>
    <div class="card-body">
        <form enctype="multipart/form-data" method="POST">

            <div class="form-group">
                <input type="text" class="form-control" id="nombre" name="nombre" placeholder="nombre">
            </div>

            <div class="form-group">
                <input type="text" class="form-control" id="desc" name="desc" placeholder="descripcion">
            </div>

            <div class="estado">
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="checkbox" style="width: 1rem" id="read" name="estado"  value="1" checked
                    placeholder="estado"> <label >Activo</label> 
                    <input type="checkbox" style="width: 1rem" id="read" disabled name="estado"  value="0"
                    placeholder="estado"> <label >Inactivo</label> 
            </div>
            

            <a href=" listarpuesto.php" class="btn btn-outline-secondary">Volver</a>&nbsp;&nbsp;
            <button type="submit" class="btn btn-primary">Agregar</button>
        
    </div>
</div>

            <?php printFooter(true); ?>