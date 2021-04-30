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
if(isset($_GET['id']  )){

    $candidatoid = $_GET['id'];
    $elemento = $service->GetByid($candidatoid);

    if(isset($_POST['nombre']) && isset($_POST['apellido']) && isset($_POST['partido_pertenece']) && isset($_POST['puesto_aspira']) && isset($_POST['estado'])){
        
        $actualizar = new candidato();
    
        $actualizar->enviardatos($candidatoid,$_POST['nombre'],$_POST['apellido'],$_POST['partido_pertenece'],$_POST['puesto_aspira'],$_POST['estado'],0);
        
        var_dump($actualizar);
        $service->editar($candidatoid,$actualizar);

        echo '<script>alert("Ciudadano actualizado")</script>'; 
        header("location: ../admin/admin.php");
        exit();
    }
}
?>

<?php printHeader(true); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>

<div class="card text-white bg-dark mb-3">
    <h5 class="card-header">Crear Candidato</h5>
    <div class="card-body">
        <form enctype="multipart/form-data" action="editarcandidato.php?id=<?php echo  $elemento->id; ?>" method="POST">

            <div class="form-group ">
                <input type="text" class="form-control" id="nombre" value="<?php echo $elemento->nombre;?>"
                    name="nombre" placeholder="nombre">
            </div>

            <div class="form-group">
                <input type="text" class="form-control" id="apellido" value="<?php echo $elemento->apellido;?>"
                    name="apellido" placeholder="Apellido">
            </div>

            <div class="form-group">
                <input type="text" class="form-control" id="partido_pertenece" value="<?php echo $elemento->partido_pertenece;?>"
                    name="partido_pertenece" placeholder="Partido">
            </div>

            <div class="form-group">
                <input type="text" class="form-control" id="puesto_aspira" value="<?php echo $elemento->puesto_aspira;?>"
                    name="puesto_aspira" placeholder="Puesto">
            </div>
            <img class="bd-placeholder-img card-img-top" src="<?php echo "imagenes/candidato/" . $elemento->foto_perfil ?>"
                width="100%" style=" width: 15rem" height="200" aria-label="Placeholder: Thumbnail">
            <div class="form-group">
                <input type="file" class="form-control" id="foto" name="foto_perfil">
            </div>

            <div class="form-group  estado">
            
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <input type="checkbox" style="width: 1rem" id="read" name="estado"  value="1" placeholder="estado"> <label >Activo</label> 
                <input type="checkbox" style="width: 1rem" id="read"  name="estado"  value="0" placeholder="estado"> <label >Inactivo</label> 
            </div>

            <a href=" listarcandidato.php" class="btn btn-outline-secondary">Volver</a>&nbsp;&nbsp;
            <button type="submit" class="btn btn-primary">Editar</button>

    
</body>
</html>

            <?php printFooter(true); ?>