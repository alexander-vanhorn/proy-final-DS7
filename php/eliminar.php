<?php
$codigo=$_GET['id'];

include("../config/conexion.php");

$sentencia=$conn->prepare("DELETE FROM usuario where id = ?;");
$resultado=$sentencia->execute([$codigo]);



?>