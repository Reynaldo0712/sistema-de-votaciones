<?php 

include "../layout/layout.php";
require_once '../database/servicio.php';
require_once "../database/Iserviciobase.php";
require_once "eleccionservice.php";
require_once "../database/Context.php";
require_once "../database/FileHandler.php";
require_once "../database/JsonFileHandler.php";
require_once "../candidatos/candidato.php";
//require_once "eleccion.php";


$service = new eleccionservice("database");

$listarPresidente = $service->GetlistaResultadoVP();
$listarDiputado = $service->GetlistaResultadoVD();
$listarSenador = $service->GetlistaResultadoVS();
$listarAlcalde = $service->GetlistaResultadoVA();



?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
</head>
<body>
<div class="col-md 12 text-center">
  <h1>Resultados de los presidentes</h1>
</div>
<div class="row">

<?php foreach ($listarPresidente as $candidato) : ?>
  
  <div class="card text-white bg-dark cover-container" style=" width: 14rem";>
  <img class="bd-placeholder-img card-img-top" src="<?php echo "../candidatos/imagenes/candidato/" .  $candidato->foto_perfil ?>" width="100%" height="150" role="img" aria-label="Placeholder: Thumbnail">

  <div class="card-body">
    <h5 class="card-title"> <?php echo $candidato->nombre?></h5>
    <h5 class="card-subtitle mb-2"><?php echo $candidato->apellido?></h5>
    <td><strong>Votos:</strong>: <?php echo $candidato->votos ?></td>
    <td><?php $candidato->votos ?></td>
    <h6 class="card-text">Partido: <?php if($candidato->partido_pertenece == 1): ?></h6>
    
      <td>PLD</td>
    <?php elseif($candidato->partido_pertenece == 1): ?>
      <td>PRD</td>
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
                        <a href="eliminarcandidato.php?id=<?php echo $candidato->id; ?>" class="card-link btn btn-outline-danger"
                                      onclick="return confirmar()">Eliminar</a>
                                      </div>

              </div>
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

  <?php endforeach; ?>
</div>



<div class="col-md 12 text-center">
  <h1>Resultados de los Diputados</h1>
</div>
<div class="row">

<?php foreach ($listarDiputado as $candidato) : ?>
  
  <div class="card text-white bg-dark cover-container" style=" width: 14rem";>
  <img class="bd-placeholder-img card-img-top" src="<?php echo "../candidatos/imagenes/candidato/" .  $candidato->foto_perfil ?>" width="100%" height="150" role="img" aria-label="Placeholder: Thumbnail">

  <div class="card-body">
    <h5 class="card-title"> <?php echo $candidato->nombre?></h5>
    <h5 class="card-subtitle mb-2"><?php echo $candidato->apellido?></h5>
    <td><strong>Votos:</strong>: <?php echo $candidato->votos ?></td>
    <td><?php $candidato->votos ?></td>
    <h6 class="card-text">Partido: <?php if($candidato->partido_pertenece == 1): ?></h6>
    
      <td>PLD</td>
    <?php elseif($candidato->partido_pertenece == 1): ?>
      <td>PRD</td>
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
                        <a href="eliminarcandidato.php?id=<?php echo $candidato->id; ?>" class="card-link btn btn-outline-danger"
                                      onclick="return confirmar()">Eliminar</a>
                                      </div>

              </div>
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

  <?php endforeach; ?>
</div>

</body>
</html>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<div class="col-md 12 text-center">
  <h1>Resultados de los Senadores</h1>
</div>
<div class="row">

<?php foreach ($listarSenador as $candidato) : ?>
  
  <div class="card text-white bg-dark cover-container" style=" width: 14rem";>
  <img class="bd-placeholder-img card-img-top" src="<?php echo "../candidatos/imagenes/candidato/" .  $candidato->foto_perfil ?>" width="100%" height="150" role="img" aria-label="Placeholder: Thumbnail">

  <div class="card-body">
    <h5 class="card-title"> <?php echo $candidato->nombre?></h5>
    <h5 class="card-subtitle mb-2"><?php echo $candidato->apellido?></h5>
    <td><strong>Votos:</strong>: <?php echo $candidato->votos ?></td>
    <td><?php $candidato->votos ?></td>
    <h6 class="card-text">Partido: <?php if($candidato->partido_pertenece == 1): ?></h6>
    
      <td>PLD</td>
    <?php elseif($candidato->partido_pertenece == 1): ?>
      <td>PRD</td>
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
      <a href="eliminarcandidato.php?id=<?php echo $candidato->id; ?>" class="card-link btn btn-outline-danger"
                      onclick="return confirmar()">Eliminar</a>
                    </div>

              </div>
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

  <?php endforeach; ?>
</div>



<div class="col-md 12 text-center">
  <h1>Resultados de los Alcaldes</h1>
</div>
<div class="row">

<?php foreach ($listarAlcalde as $candidato) : ?>
  
  <div class="card text-white bg-dark cover-container" style=" width: 14rem";>
  <img class="bd-placeholder-img card-img-top" src="<?php echo "../candidatos/imagenes/candidato/" .  $candidato->foto_perfil ?>" width="100%" height="150" role="img" aria-label="Placeholder: Thumbnail">

  <div class="card-body">
    <h5 class="card-title"> <?php echo $candidato->nombre?></h5>
    <h5 class="card-subtitle mb-2"><?php echo $candidato->apellido?></h5>
    <td><strong>Votos:</strong>: <?php echo $candidato->votos ?></td>
    <td><?php $candidato->votos ?></td>
    <h6 class="card-text">Partido: <?php if($candidato->partido_pertenece == 1): ?></h6>
    
      <td>PLD</td>
    <?php elseif($candidato->partido_pertenece == 1): ?>
      <td>PRD</td>
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
                        <a href="eliminarcandidato.php?id=<?php echo $candidato->id; ?>" class="card-link btn btn-outline-danger"
                                      onclick="return confirmar()">Eliminar</a>
                                      </div>

              </div>
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

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