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

$listarciudadano = $service->Getlista();

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

            <h3 class="font-weight-bold">Ciudadanos</h3>
            <br>
            <div class="row">

                <?php foreach ($listarciudadano as $ciudadano) : ?>
             
                <div class="card text-white bg-dark cover-container" style=" width: 15rem" ;>
                    <div class="card-body">
                        <h5 class="card-title">Cedula: <?php echo $ciudadano->documento_dentidad?></h5>
                        <h5 class="card-subtitle mb-2"><?php echo $ciudadano->nombre?></h5>
                        <h6 class="card-text"><?php echo $ciudadano->apellido?></h6>
                        <h6 class="card-text"><?php echo $ciudadano->email?></h6>
                        <h6 class="card-text" id="estado">estado:<?php if ($ciudadano->estado == 1): ?>

                        <td>Activo</td>
                        <?php else: ?>

                            <td>Inactivo</td>

                        <?php endif ?>
                                </h6>  <a href="editarciudadano.php?id=<?php echo $ciudadano->documento_dentidad; ?>" class="card-link btn btn-outline-primary">Editar</a>
                                <a href="eliminarciudadano.php?id=<?php echo $ciudadano->documento_dentidad; ?>" class="card-link btn btn-outline-danger" onclick="return confirmar()">Eliminar</a>

                    </div>
                </div>
    &nbsp; &nbsp;
    <?php endforeach; ?>
</div>
<?php printFooter(true); ?>

<script type="text/javascript">
function confirmar() {
var respuesta = confirm("Seguro de eliminar a este Ciudadano??");
if (respuesta == true) {
    return true;
} else {
    return false;
}
}


</script>
