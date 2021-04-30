<link rel="stylesheet" href="..assents/css/stlye.css">

<?php 

include "../layout/layout.php";
require_once '../database/servicio.php';
require_once "../database/Iserviciobase.php";
require_once "candidatoservice.php";
require_once "../database/Context.php";
require_once "../database/FileHandler.php";
require_once "../database/JsonFileHandler.php";
require_once "candidato.php";

$service = new candidatoservice("database");

if(isset($_POST['nombre']) && isset($_POST['apellido']) && isset($_POST['partido_pertenece']) && isset($_POST['puesto_aspira']) && isset($_FILES['foto_perfil']) && isset($_POST['estado']) && isset($_POST['estado'])){

    $newcandidato = new candidato();

    $newcandidato->enviardatos(0,$_POST['nombre'],$_POST['apellido'],$_POST['partido_pertenece'],$_POST['puesto_aspira'],$_POST['foto_perfil'],$_POST['estado'],$_POST['votos']);

    $service->añadir($newcandidato);

    header("location: listarcandidato.php");
    exit();
}
?>

<?php printHeader(true); ?>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<div class="card text-white bg-dark mb-3">
    <h5 class="card-header">Crear Candidato</h5>
    <div class="card-body">
        <form enctype="multipart/form-data" method="POST">



            <div class="form-group ">
                <input type="text" class="form-control" id="nombre" name="nombre" placeholder="nombre">
            </div>

            <div class="form-group">
                <input type="text" class="form-control" id="apellido" name="apellido" placeholder="Apellido">
            </div>

            <div class="form-group">
                <input type="text" class="form-control" id="partido_pertenece" name="partido_pertenece" placeholder="Partido">
            </div>

            <div class="form-group">
                <input type="text" class="form-control" id="puesto_aspira" name="puesto_aspira" placeholder="Puesto">
            </div>

            <div class="form-group" hidden>
                <input type="text" class="form-control" value="" id="votos" name="votos">
            </div>

            <div class="form-group">
                <input type="file" class="form-control" id="foto_perfil" name="foto_perfil">
            </div>

            <div class="estado">
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="checkbox" style="width: 1rem" id="read" name="estado"  value="1" placeholder="estado"> <label >Activo</label> 
                    <input type="checkbox" style="width: 1rem" id="read" name="estado"  value="0" placeholder="estado"> <label >Inactivo</label> 
                </div>
            <div></div>

            <a href=" listarcandidato.php" class="btn btn-outline-secondary">Volver</a>&nbsp;&nbsp;
            <button type="submit" class="btn btn-primary">Agregar</button>


            <?php printFooter(true); ?>