<?php


//tutorial seguido https://youtu.be/M9oWxiocvjk

$id_ins=$_POST['idinscripcion'];
require('fpdf.php');//biblioteca para convertir la imagen en un pdf
$conn=new mysqli('localhost','root','','youtube');
if($conn->connect_error)
{
    die("Connection Failed".$conn->connect_error);
} 
 $sql="SELECT name from certificate where id=$id_ins"; //esto lo hace por id cambiar a futuro por el que deberia buscar
    $result=$conn->query($sql);
if($result->num_rows>0)
{
    $row=$result->fetch_assoc();//esto no entiendo bien que hace pero sirve
     
        $font="../certificado/arial.ttf";
        $image = imagecreatefromjpeg("../imagenes/certificate.jpg");
        $color=imagecolorallocate($image,19,21,21);
        $name=$row['name'];
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
     

} else
{ //pagina de error que se muestra si el usuario trató de meter una id de inscripcion que no existe

   
        ?>

        
            <br>
            <br>
           

            <center>
            <div > <img class="img_error" width="5%" height="auto" src="../imagenes/error.png"><h1>Error</h1></div>
            <h4>¡Vaya! Parece que has metido una id de inscripción erronea.
            <br>
            Cualquier reclamo por favor contactenos a correodeturno@gmail.com
            </h4>
            </center>


        <?php


}



if(extension_loaded('gd')&&function_exists('gd_info'))
{
    //echo "GD installed";
} else{ echo"Hola parece que tienes gd desactivado asi que entra aqui https://youtu.be/IuQMKMtMLuU?t=129";
}


  

?>
