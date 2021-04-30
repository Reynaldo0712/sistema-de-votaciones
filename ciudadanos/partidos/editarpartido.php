<link rel="stylesheet" href="..assents/css/stlye.css">
<?php 

include "../layout/layout.php";
require_once '../database/servicio.php';
require_once "../database/Iserviciobase.php";
require_once "partidoservice.php";
require_once "../database/Context.php";
require_once "../database/FileHandler.php";
require_once "../database/JsonFileHandler.php";
require_once "partido.php";

$service = new partidoservice("database");

if(isset($_GET['id'])){


  $partidoid = $_GET['id'];
  $elemento = $service->GetByid($partidoid);
  
  // if (isset($_POST['nombre']) && isset($_POST['desc'])
  // && isset($_FILES['Logo_Partido'])
  // && isset($_POST['estado'])) {

  if (isset($_POST['nombre']) && isset($_POST['descripcion']) && isset($_POST['estado'])) {

    $actualizar = new partido();
    
    $actualizar->enviardatos($partidoid,$_POST['nombre'],$_POST['descripcion'],$_POST['estado']);
    
    echo '<script>alert("Ciudadano actualizado")</script>'; 

    $service->editar($partidoid,$actualizar);
    
    header("location: ../admin/admin.php");
    exit();
  }
}
?>

<?php printHeader(true); ?>

<div class="card text-white bg-dark mb-3">
    <h5 class="card-header">Editar Partido</h5>
    <div class="card-body">
        <form enctype="multipart/form-data" action="editarpartido.php?id=<?php echo  $elemento->id;?>" method="POST">


            <div class="form-group">
                <input type="text" class="form-control" id="nombre" name="nombre"
                    value="<?php echo $elemento->nombre;?>" placeholder="nombre">
            </div>

            <div class="form-group">
                <input type="text" class="form-control" id="descripcion" value="<?php echo $elemento->descripcion;?>"
                    name="descripcion" placeholder="descripcion">
            </div>
            <img class="bd-placeholder-img card-img-top"
                src="<?php echo "imagenes/partido/" . $elemento->logo_partido ?>" width="100%" style=" width: 15rem"
                height="200" aria-label="Placeholder: Thumbnail">
            <div class="form-group">
                <input type="file" class="form-control" id="foto" name="logo_partido">

                <div class="form-group ">
                <input type="checkbox" style="width: 1rem" id="est" name="estado"  value="1" placeholder="estado" value="<?php echo $elemento->estado;?>"> <label >Activo</label> 
                <input type="checkbox" style="width: 1rem" id="est"  name="estado"  value="0" placeholder="estado"> <label >Inactivo</label> 
                </div>
                <div></div>

                <a href=" listarpartido.php" class="btn btn-outline-secondary">Volver</a>&nbsp;&nbsp;
                <button type="submit" class="btn btn-primary">Guardar</button>

                <?php printFooter(true); ?>