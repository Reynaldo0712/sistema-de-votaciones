<?php 

include "../layout/layout.php";
require_once "../database/Servicio.php";
require_once "../database/Iserviciobase.php";
require_once "candidatoservice.php";
require_once "../database/Context.php";
require_once "../database/FileHandler.php";
require_once "../database/JsonFileHandler.php";
require_once "candidato.php";

$service = new candidatoservice("database");

$listarcandidato = $service->Getlista();

?>
<body class="text-center">
    <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
  <header class="masthead mb-10%">
  
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
<div class="inner">
      <nav class="nav nav-masthead justify-content-center">
        <a class="nav-link active" href="../admin/admin.php">Atras</a>
      </nav>
    </div>
<?php printHeader(true); ?>

<h3 class="font-weight-bold">Candidatos</h3>
<br>

<div class="row">

<?php foreach ($listarcandidato as $candidato) : ?>
  <div class="card text-white bg-dark cover-container" style=" width: 14rem";>
  <img class="bd-placeholder-img card-img-top" src="<?php echo "imagenes/candidato/" .  $candidato->foto_perfil ?>" width="100%" height="150" role="img" aria-label="Placeholder: Thumbnail">

  <div class="card-body">
    <h5 class="card-title"> <?php echo $candidato->nombre?></h5>
    <h5 class="card-subtitle mb-2"><?php echo $candidato->apellido?></h5>
    <h6 class="card-text">Partido: <?php if($candidato->partido_pertenece == 1): ?></h6>
    
      <td>PRD</td>
    <?php elseif($candidato->partido_pertenece == 2): ?>
      <td>PLD</td>
      <?php elseif($candidato->partido_pertenece == 4): ?>
        <td>Alianza Pais</td>
    <?php else: ?>
      <td>Ninguno</td>
    <?php endif ?></h6> 
                          <h6 class="card-text">Puesto: <?php if ($candidato->puesto_aspira == 1): ?>
    <td>Presidente</td>    
    <?php elseif($candidato->puesto_aspira == 2): ?>
      <td>Diputado</td>
    <?php elseif($candidato->puesto_aspira == 3): ?>
      <td>Senador</td>    
    <?php elseif($candidato->puesto_aspira == 4): ?>
      <td>Alcalde</td>
    <?php else: ?></h6>
      <td>Ninguno</td>
    <?php endif ?></h6>
                          <h6 class="card-text">estado: <?php if ($candidato->estado == 1): ?>

    <td>Activo</td>
    <?php else: ?>
    <td>Inactivo</td>
    <?php endif ?></h6>
      <a href="editarcandidato.php?id=<?php echo $candidato->id; ?>" class="card-link btn btn-outline-primary">Editar</a>
      <a href="eliminarcandidato.php?id=<?php echo $candidato->id; ?>" class="card-link btn btn-outline-danger" onclick="return confirmar()">Eliminar</a>
      </div>

              </div>
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

  <?php endforeach; ?>
</div>
  
</body>
</html>
  
