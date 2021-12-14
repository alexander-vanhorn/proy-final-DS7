<?php
include("../config/conexion.php");
include("../clases/usuario.php");

if(isset($_REQUEST['email'])&& isset($_REQUEST['password1']) )
{

    $nombre=$_REQUEST['nombre'];
    $apellido=$_REQUEST['apellido'];
    $email=$_REQUEST['email'];
    $pass= md5($_REQUEST['password1']);

    $foto="user.png";
    $id_rol=$_REQUEST['id_rol'];

    echo ($nombre."<br>".$apellido."<br>".$email."<br>".$pass);

    $datos= new Usuario($nombre,$apellido,$email,$pass,$foto,$id_rol);

    $insercion=$conn->prepare("INSERT INTO usuario (nombre,apellido,email,password,foto,id_rol) value (:nombre,:apellido,:email,:password,:foto,:id_rol)");

    try{
        $insercion->execute((array)$datos);
        $msg="Su registro se ha guardado existosamente!";

    } catch(PDOException $e){
        if($e->errorInfo[1] == 1062) {
            $msg="Correo electronico ya esta registrado en el sistema";

        }else{
            echo("otro errror");
            $msg="Error al guardar los datos";
        }
    }

    echo'<meta http-equiv="refresh" content="3; url=../secciones/crearUsuario.php?msg='.$msg.'">';


}

else{
    echo "NO ESTA DEFINIDO";
    echo '<meta http-equiv="refresh" content="0; url=../secciones/login.php">';
}

?>