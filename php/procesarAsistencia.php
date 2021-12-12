<?php
    include("../config/conexion.php");
    include("../classes/Participacion.php");

    
        $parId = $_REQUEST['participante'];
        $conId = $_REQUEST['conferencia'];

        $datos = new Participacion($parId,$conId);

        $insercion = $conn->prepare("INSERT INTO participantes_conferencias (part_id, conf_id) value(:parId, :conId)");
        
        try{
            $insercion->execute((array)$datos);
            header("Location: ../Index.php");
        }catch (PDOexception $e){
            echo "Error: ".$e->getMessage();
        }
        
?>