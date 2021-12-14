<?php


    //tutorial seguido https://youtu.be/M9oWxiocvjk
    
    include('../config/conexion.php');

    $id_ins=$_POST['idinscripcion'];
    require('fpdf.php');//biblioteca para convertir la imagen en un pdf 
    $asistencia=0;
    $error=0;
    //consulta es un inner join que consulta la tabla participantes e incripciones en donde el id_inscripcion sea igual al idinscripcion del metodo post
    //$consultaCertificado =$conn->query("SELECT participantes.nombre, participantes.part_id, participantes.apellido, inscripciones.insc_id FROM participantes INNER JOIN inscripciones ON participantes.part_id=inscripciones.part_id WHERE inscripciones.insc_id=$id_ins");
    $consultaCertificado =$conn->query("SELECT nombre, part_id, apellido FROM participantes WHERE part_id=$id_ins");
    //$consultaParticipantes = $conn->query("SELECT * FROM `participantes`");
    
   
    try {
        //Se sacan los datos de la bd y se asignan a name para colocarlo en la imagen del certificado
    while ($row = $consultaCertificado->fetch(PDO::FETCH_ASSOC)) {
        $name =$row['nombre']." ".$row['apellido'];
        $parins_id=$row['part_id'];
        $consultaParticipantes_conf = $conn->query("SELECT * FROM participantes_conferencias WHERE part_id=$parins_id");
           
       
        while($row=$consultaParticipantes_conf  ->fetch(PDO::FETCH_OBJ)){ 
            $asistencia++;
              
           
           }
    } 

    } catch (PDOException $e) { 
        $error++;
             
    }


    
    
    
  


    //$result=$conn->query($sql);
   if((isset($name))&& ($asistencia>=3)) // si la variable existe y ha asistido la cantidad de veces necesaria
    {
        //$row=$result->fetch_assoc();//esto no entiendo bien que hace pero sirve
        
            $font="../certificado/arial.ttf";
            $image = imagecreatefromjpeg("../imagenes/certificate.jpg");//certificado en blanco para que sea rellenado
            $color=imagecolorallocate($image,19,21,21);
            //$name=$row['nombre']." ".$row['apellido'];
            imagettftext($image, 35, 0, 400, 350, $color, $font, $name);//35 tamaño de letra, 0 angulo,400 y 350 posicion
            imagejpeg($image,"../certificado/certificado.jpg");

            
            //convirtiendo imagen del certificado creado en pdf
            $pdf=new FPDF('L','in',[11.7,8.27]);
            $pdf->addpage();
            $pdf->image("../certificado/certificado.jpg",0,0,11.7,8.27);
            $pdf->Output("../certificado/certificado.pdf","F");
        


            //echo "Certificate Created";  
        // echo "id =",$id_ins;   
            //imagedestroy($image);

        // mostrando certificado
        header('content-type:application/pdf');
            readfile('../certificado/certificado.pdf');
        

    }elseif($asistencia<3&& $error=0){
        
        ?>

            
        <br>
        <br>
    

        <center>
        <div > <img class="img_error" width="10%" height="auto" src="../imagenes/nocumplir.png"><h1>Error</h1></div>
        <h4>¡Vaya! Parece que no cumples con la asistencia necesaria para reclamar el certificado.
        <br>
        Cualquier reclamo por favor contactenos a correodeturno@gmail.com
        </h4>
        </center>


    <?php

    }
    
    else 
    { //pagina de error que se muestra si el usuario trató de meter una id de inscripcion que no existe

    
            ?>

            
                <br>
                <br>
            

                <center>
                <div > <img class="img_error" width="5%" height="auto" src="../imagenes/error.png"><h1>Error</h1></div>
                <h4>¡Vaya! Parece que has metido una id de inscripción erronea o no cumples los requisitos.
                <br>
                Cualquier reclamo por favor contactenos a correodeturno@gmail.com
                </h4>
                </center>


            <?php


    }



    if(extension_loaded('gd')&&function_exists('gd_info'))
    {
        //echo "GD installed";
    } else{ echo"Hola parece que tienes gd desactivado asi que entra aqui https://youtu.be/IuQMKMtMLuU?t=129 sigue los pasos y reinicia el apache";
    }


    

?>
