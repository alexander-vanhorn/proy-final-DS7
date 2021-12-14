<?php
    include("config.php");

    //MYSQL -PDO
    try{
        $conn = new PDO("mysql:host=".HOST_NAME.";dbname=".DATABASE, USER_NAME, PASS);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
    catch(PDOexception $e){
        echo "Problema de conexion : ".$e->getMessage();
    }
?>