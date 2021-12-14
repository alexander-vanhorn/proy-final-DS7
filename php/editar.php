<?php
//print_r($_POST);
include("../config/conexion.php");
$id2= $_POST['id2'];
$nombre2=$_POST['nombre2'];
$apellido2=$_POST['apellido2'];
$email2=$_POST['email2'];
$id_rol=$_POST['id_rol'];
$password3=md5($_POST['password3']);

$sentencia=$conn->prepare("UPDATE usuario SET nombre=?, apellido=?, email=?, password=?, id_rol=? where id = ?;");
$resultado=$sentencia->execute([$nombre2,$apellido2,$email2,$password3,$id_rol,$id2]);


    ?>
