<?php
    include("../config/conexion.php");
    include("../classes/Participacion.php");

            $parId = $_REQUEST['CODI'];
            $conId = $_REQUEST['confList'];

            if ($parId==0 || $conId==-1) {
                $error = true;
            }

        if ($error) {
            //echo "All fields are required.";
            echo '<meta http-equiv="refresh" content="0; url=../admin/registro_asistencia.php?msg=2">';
        } else {
            $parId = $_REQUEST['CODI'];
            $conId = $_REQUEST['confList'];

            $datos = new Participacion($parId,$conId);

            $insercion = $conn->prepare("INSERT INTO participantes_conferencias (part_id, conf_id) value(:parId, :conId)");
            
            try{
                $insercion->execute((array)$datos);
                //$msg="Asistencia registrada exitosamente.";
                echo '<meta http-equiv="refresh" content="0; url=../admin/registro_asistencia.php?msg=1">';
            }catch (PDOexception $e){
                echo "Error: ".$e->getMessage();
            }
        }
        
        
?>