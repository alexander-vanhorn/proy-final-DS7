<?php
include("verificar.php");
include("../config/conexion.php");

$nombreN=$_POST['nombre'];
$apellidoN=$_POST['apellido'];
$nuevoNombre=$_POST['fotopredefinida']; 

if (($_FILES['foto']['name'])!="" ){
     $temp=$_FILES['foto']['tmp_name'];
     $nuevoNombre=$_SESSION['id'].".png";

      move_uploaded_file($temp,'../secciones/fotos/'.$nuevoNombre);



    }

    $id=$_SESSION['id'];

    $sqlUpdate=$conn->exec("UPDATE usuario SET nombre='$nombreN',apellido='$apellidoN',foto='$nuevoNombre' WHERE id='$id'");

    echo '<meta http-equiv="refresh" content="0; url=../secciones/panel.php">';
    ?>
