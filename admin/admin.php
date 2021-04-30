<?php 

include "../layout/layout.php";

?>

<body class="text-center">
    <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
  <header class="masthead mb-10%">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <div class="inner">
      <nav class="nav nav-masthead justify-content-center">
        <a class="nav-link active" href="../index.php">Cerrar sesion</a>
      </nav>
    </div>
 </header>
<?php printHeader(true); ?>

<div class="row">
  <div class="col-md-4">
    <div class="card mb-2 shadow-sm">
      <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice"
      focusable="false" role="img" aria-label="Placeholder: Thumbnail"><title>Candidatos</title><rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%" fill="#eceeef" dy=".3em">Candidatos</text></svg>
      <div class="card-body bg-dark">
        <div class="d-flex justify-content-center align-items-center">
          <div class="btn-group">
            <a href="../candidatos/listarcandidato.php" type="button" class="btn btn-primary btn-sm">Ver</a>
            <a href="../candidatos/crearcandidato.php" type="button" class="btn btn-primary btn-sm">Crear</a>
          </div>
          </div>
      </div>
    </div>
  </div>

  <div class="row">
  <div class="col-md-4">
    <div class="card mb-2 shadow-sm">
      <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice"
      focusable="false" role="img" aria-label="Placeholder: Thumbnail"><title>Resultado de votacion</title><rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%" fill="#eceeef" dy=".3em">Resultado de votacion</text></svg>
      <div class="card-body bg-dark">
        <div class="d-flex justify-content-center align-items-center">
          <div class="btn-group">
            <a href="../eleccion/resultadoEleccion.php" type="button" class="btn btn-primary btn-sm">Ver</a>
            
          </div>
          </div>
      </div>
    </div>
  </div>

  <div class="col-md-4">
    <div class="card mb-2 shadow-sm">
      <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg"
      preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail"><title>Partidos</title><rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%" fill="#eceeef" dy=".3em">Partidos</text></svg>
      <div class="card-body bg-dark">
        <div class="d-flex justify-content-center align-items-center">
          <div class="btn-group">
            <a href="../partidos/listarpartido.php" type="button" class="btn btn-primary btn-sm">Ver</a>
            <a href="../partidos/crearpartido.php" type="button" class="btn btn-primary btn-sm">Crear</a>
          </div>
          </div>
      </div>
    </div>
  </div>

  <div class="col-md-4">
    <div class="card mb-2 shadow-sm">
      <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg"
      preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail"><title>Puesto Electivo</title><rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%" fill="#eceeef" dy=".3em">Puesto Electivo</text></svg>
      <div class="card-body bg-dark">
        <div class="d-flex justify-content-center align-items-center">
          <div class="btn-group">
            <a href="../puestoElectivo/listarpuesto.php" type="button" class="btn btn-primary btn-sm">Ver</a>
            <a href="../puestoElectivo/crearpuesto.php" type="button" class="btn btn-primary btn-sm">Crear</a>
          </div>
          </div>
      </div>
    </div>
  </div>

  <div class="col-md-4">
    <div class="card mb-2 shadow-sm">
      <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg"
      preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail"><title>Ciudadanos</title><rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%" fill="#eceeef" dy=".3em">Ciudadanos</text></svg>
      <div class="card-body bg-dark">
        <div class="d-flex justify-content-center align-items-center">
          <div class="btn-group">
            <a href="../ciudadanos/listarciudadano.php" type="button" class="btn btn-primary btn-sm">Ver</a>
            <a href="../ciudadanos/crearciudadano.php" type="button" class="btn btn-primary btn-sm">Crear</a>
          </div>
          </div>
      </div>
    </div>
  </div>

  <div class="col-md-4">
    <div class="card mb- shadow-sm">
      <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg"
      preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail"><title>Elecciones</title><rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%" fill="#eceeef" dy=".3em">Elecciones</text></svg>
      <div class="card-body bg-dark">
        <div class="d-flex justify-content-center align-items-center">
          <div class="btn-group">
            <a href="../elecciones/listarelecciones.php" type="button" class="btn btn-primary btn-sm">Ver</a>
            <a href="../elecciones/crearelecciones.php" type="button" class="btn btn-primary btn-sm">Crear</a>
          </div>
      </div>
    </div>
  </div>
</div>
</div>

<?php printFooter(true); ?>