<?php 

function printHeader($isPage = false){

  $directory = ($isPage) ? "../":"";

    $header = <<<EOF

  <html lang="en">
  <head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">

  <title>voto Automatizado</title>

  <!-- Bootstrap core CSS -->
  <link href="{$directory}assents/css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link href="{$directory}assents/css/style.css" rel="stylesheet" type="text/css">
  </head>

  <body class="text-center">
    <div class="cover-container d-flex w-100 h-100 mx-auto flex-column">
  <header class="masthead mb-10%">
    <div class="inner">
      <h3 class="masthead-brand">Sistema de votaciones</h3>
      <nav class="nav nav-masthead justify-content-center">
      </nav>
    </div>
  </header>

EOF;
echo $header;

}    

function printFooter($isPage = false){

  $directory = ($isPage) ? "../":"";

  $header = <<<EOF

  <footer class="mastfoot mt-auto"> </footer>
  </div>

  </body></html>

EOF;
echo $header;
}    


?>