<?php

include("../classes/clase_inscripcion.php");
include("../classes/clase_participante.php");
include("../config/conexion.php");


            $nombre = $_REQUEST['nombre'];
            $apellido = $_REQUEST['apellido'];
            $email = $_REQUEST['email'];
            $cedula = $_REQUEST['cedula'];
            $institucion = $_REQUEST['institucion'];
            $rol_participante = $_REQUEST['rol_participante'];

            $parId  = 1;
            $monto  =200;
            $descuento  = 0;

            $datos = new Participante($nombre,$apellido,$email,$cedula,$institucion,$rol_participante);
           $nuevo_dato = new Inscripcion($parId,$monto,$descuento);

            $insercion = $conn->prepare("INSERT INTO participantes (nombre, apellido, correo, tipo_doc, institucion, rol) values (:nombre, :apellido, :email, :cedula, :institucion, :rol_participante)");
            $insercion2 = $conn->prepare("INSERT INTO inscripciones (part_id, monto, descuento) values (:parId, :monto, :descuento)");

            try{
                $insercion->execute((array)$datos);
                $insercion2->execute((array)$nuevo_dato);
                echo '<meta http-equiv="refresh" content="0; url=../secciones/confirmacion.php">';  
                }
                //$msg="Asistencia registrada exitosamente.";
               
            catch (PDOexception $e){
                echo "Error: ".$e->getMessage();
            }    
?> 