<?php

session_start();

if(isset($_SESSION['documento_dentidad'])){

if($_SESSION['documento_dentidad']== null){

    $_SESSION['messageAuth']="debes ingresar la cedula para votar";
    header("Location: index.php");
    exit();
} 
}else{
    $_SESSION['messageAuth']="debes ingresar la cedula para votar";
    header("Location:  index.php");
    exit();

}
?>