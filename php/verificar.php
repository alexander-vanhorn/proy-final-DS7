<?php
session_start();
    if(!isset($_SESSION["sw"])){
        
        header("Location: ../secciones/login.php");

    }
?>