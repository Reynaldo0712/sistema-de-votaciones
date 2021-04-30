<link rel="stylesheet" href="..assents/css/stlye.css">

<?php 

include "../layout/layout.php";
 require_once '../database/servicio.php';
require_once "../database/Iserviciobase.php";
require_once "ciudadanoservice.php";
require_once "../database/Context.php";
require_once "../database/FileHandler.php";
require_once "../database/JsonFileHandler.php";
require_once "ciudadano.php";

$service = new ciudadanoservice("database");

if (isset($_POST['id']) && isset($_POST['nombre']) && isset($_POST['apellido']) && isset($_POST['email'])) {

    $newciudadano = new ciudadano();

    $newciudadano->enviardatos($_POST['id'],$_POST['nombre'],$_POST['apellido'],$_POST['email'],$_POST['estado']);

    echo '<script>alert("Ciudadano añadido")</script>'; 

    $service->añadir($newciudadano);

    header("location: listarciudadano.php");
    exit();
  
}
?>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<body class="text-center">
    <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
        <header class="masthead mb-10%">
            <div class="inner">
                <nav class="nav nav-masthead justify-content-center">
                    <a class="nav-link active" href="../admin/admin.php">Atras</a>
                </nav>
            </div>
            <?php printHeader(true); ?>
            <div class="card text-white bg-dark mb-3">
                <h5 class="card-header">Crear Ciudadano</h5>
                <div class="card-body">
                    <form enctype="multipart/form-data" method="POST">

                        <div class="form-group">

                            <div class="form-group">
                                <input type="text" class="form-control" id="id" name="id"
                                    placeholder="Documento de documento_dentidad">
                            </div>

                            <input type="text" class="form-control" id="nombre" name="nombre" placeholder="nombre">
                        </div>

                        <div class="form-group">
                            <input type="text" class="form-control" id="apellido" name="apellido"
                                placeholder="Apellido">
                        </div>

                        <div class="form-group">
                            <input type="text" class="form-control" id="email" name="email" placeholder="Email">
                        </div>

                        <div class="estado">
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <input type="checkbox" style="width: 1rem" id="read" name="estado"  value="1" checked
                             placeholder="estado"> <label >Activo</label> 
                             <input type="checkbox" style="width: 1rem" id="read" disabled name="estado"  value="0"
                             placeholder="estado"> <label >Inactivo</label> 
                        </div>

                        <br>

                        <a href=" listarciudadano.php" class="btn btn-outline-secondary">Volver</a>&nbsp;&nbsp;
                        <button type="submit" class="btn btn-primary">Agregar</button>

                    </form>


                    <?php printFooter(true); ?>

                    
