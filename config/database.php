<?php
    $server = 'localhost';
    $username = 'root';
    $password ='';
    $database = 'congreso';

    try{
        $conn = new PDO("mysql:host=$server;dbname=$database;",$username,$password);

    }
    catch(PDOexception $e){
        echo "Problema de conexion : ".$e->getMessage();
    }





?>