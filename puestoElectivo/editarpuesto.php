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

if(isset($_GET['id'])){

  $puestoid = $_GET['id'];
  $elemento = $service->GetByid($puestoid);
  
  

  if (isset($_POST['nombre']) && isset($_POST['descripcion']) && isset($_POST['estado'])) {
    
    $actualizar = new puestoelectivo();

    $actualizar->enviardatos($puestoid,$_POST['nombre'],$_POST['descripcion'],$_POST['estado']);

    echo '<script>alert("Partido actualizado")</script>'; 
    
    $service->editar($puestoid,$actualizar);

    // var_dump($service);
    
    header("location: listarpuesto.php");
    exit();
  }
}
?>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<?php printHeader(true); ?>

<div class="card text-white bg-dark mb-3">
    <h5 class="card-header">Editar Partido</h5>
    <div class="card-body">
        <form enctype="multipart/form-data" action="editarpuesto.php?id=<?php echo  $elemento->id;?>" method="POST">
            <div class="form-group">
                <input type="text" class="form-control" id="nombre" name="nombre"
                    value="<?php echo $elemento->nombre;?>" placeholder="nombre">
            </div>

            <div class="form-group">
                <input type="text" class="form-control" id="descripcion" value="<?php echo $elemento->descripcion;?>"
                    name="descripcion" placeholder="descripcion">
            </div>
            <div class="form-group ">
            <input type="checkbox" style="width: 1rem" id="read" name="estado"  value="1" 
                             placeholder="estado" value="<?php echo $elemento->estado;?>"> <label >Activo</label> 
                             <input type="checkbox" style="width: 1rem" id="read"  name="estado"  value="0"
                             placeholder="estado"> <label >Inactivo</label> 
            </div>
            <div></div>

            <a href=" listarpuesto.php" class="btn btn-outline-secondary">Volver</a>&nbsp;&nbsp;
            <button type="submit" class="btn btn-primary">Guardar</button>

            <?php printFooter(true); ?>