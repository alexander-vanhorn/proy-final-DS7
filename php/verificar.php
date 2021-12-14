<?php
session_start();
    if(!isset($_SESSION["sw"])){
        header("Location: ../index.php");
        header("Location: ../secciones/login.php");

    }
?>