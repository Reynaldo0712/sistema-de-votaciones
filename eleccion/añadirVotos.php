<?php

include "../layout/layout.php";
require_once "../auth.php";
require_once "../database/Servicio.php";
require_once "../database/Iserviciobase.php";
require_once "../candidatos/candidatoservice.php";
require_once "../database/Context.php";
require_once "../database/FileHandler.php";
require_once "../database/JsonFileHandler.php";
require_once "../candidatos/candidato.php";

//require_once "../PHPMailer/Exception.php";
//require_once "../PHPMailer/PHPMailer.php";
//require_once "../PHPMailer/SMTP.php";
//require_once "../email/emailHandler/emailHandler.php";

//$emailHandler = new emailHandler("../email/emailHandler");

//$emailHandler->sendEmail("hardawaym13@gmail.com","prueba prueba","prueba todo bien");

// $mail = "Prueba de mensaje";
// //Titulo
// $titulo = "PRUEBA DE TITULO";
// //cabecera
// $headers = "MIME-Version: 1.0\r\n"; 
// $headers .= "Content-type: text/html; charset=iso-8859-1\r\n"; 
// //dirección del remitente 
// $headers .= "From: Geeky Theory <hardawaym13@gmail.com>\r\n";
// //Enviamos el mensaje a tu_dirección_email 
// $bool = mail("hardawaym13@gmail.com",$titulo,$mail,$headers);
// if($bool){
//     echo "Mensaje enviado";
// }else{
//     echo "Mensaje no enviado";
// }


$service = new candidatoservice("../database");
$servicio = new Servicio();

$islogged = false;

if(isset($_GET['VPresidente']) || $_GET['VDiputado'] || $_GET['VSenador'] || $_GET['VAlcalde']){

    $VPresidente = $_GET['VPresidente'];
    $VDiputado = $_GET['VDiputado'];
    $VSenador = $_GET['VSenador'];
    $VAlcalde = $_GET['VAlcalde'];

    $service->agregarVotosP($VPresidente);
    $service->agregarVotosD($VDiputado);
    $service->agregarVotosS($VSenador);
    $service->agregarVotosA($VAlcalde);

    var_dump($_GET['VDiputado']);
    var_dump($_GET['VSenador']);
    header('location: ../index.php');
    echo "<script>alert('Se guardaron los votos correctamente');</script>";
    exit();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="col-md-12">

        <?php
            if(isset($_REQUEST['enviar'])){

                $email = $_REQUEST['email']??''; //o correo por defecto
                $asunto = $_REQUEST['asunto']??'';
                $mensaje = $_REQUEST['mensaje']??'';
                $cabecera = "MIME-Version: 1.0\r\n";
                $cabecera.="Content-type: text/html; chartset:iso-8859-1\r\n";
                $cabecera.="From: Junta Central <hardawaym13@gmail.com>\r\n";
                //$res=mail($email,$asunto,$mensaje,$cabecera);

                if($res == true){

                    var_dump("Se envio el correo exitosamente");

                }else{
                    var_dump("Error al enviar el correo");
                }
            }

        ?>
        <form action="añadirVotos.php" method="GET">
            <div class="form-group">
            <label for="Email"></label>
                <input type="email" class="form-control" name="email" id="email">
            </div>        
            <div class="form-group">
            <label for="asunto"></label>
                <input type="asunto" class="form-control" name="asunto" id="asunto">
            </div>        
            <div class="form-group">
            <label for="mensaje"></label>
                <input type="mensaje" class="form-control" name="mensaje" id="emaimensajel">
            </div>        
              
            <div>
                <button type="submit" name="enviar" class="btn btn-primary">Enviar</button>
            </div>
        </form>

        </div>
    </div>
</body>
</html>