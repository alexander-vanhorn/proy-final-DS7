<?php
if(!isset($_GET['id'])){
  header('Location: lista.php');
}
include("../config/conexion.php");
$id=$_GET['id'];
$consultaRol = $conn->query("SELECT * FROM rol_usuario");

$sentencia=$conn->prepare("SELECT * FROM usuario where id = ?;");
$sentencia->execute([$id]);
$persona=$sentencia->fetch(PDO::FETCH_OBJ);
//print_r($persona);

?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    
    <title>Acceder al Sistema - UTP</title>

    
    <link rel="stylesheet" href="../css/signin.css" >
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/styles.css">
    
    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem   ;
        }
      }
    </style>

    <script>
        function comprobarClave(){
            clave1 = document.formulario.password3.value
            clave2 = document.formulario.password4.value

            if (clave1 != clave2){
                alert("Las dos claves no son iguales...");
                return false;}
        }

    </script>

    

  </head>


  <body class="text-center">
    


  <form name="formulario" class="form-signin" method="POST" action="../php/editar.php" onSubmit="return comprobarClave()">
    <img class="mb-4" src="../imagenes/logo_utp.png" alt="" width="100" height="100">
    <h1 class="h3 mb-3 fw-normal">Editar Usuario</h1>

    <p class="text-danger"> <?php if (isset($_GET['msg'])) echo $_GET['msg'];?>  </p>


    <div class="form-group mb-3">
      
      <input type="text" class="form-control item" id="nombre" placeholder="Nombre" name="nombre2" value="<?php echo $persona->nombre;?>" required>

    </div>

    <div class="form-group mb-3">
      
      <input type="text" class="form-control item" id="apellido" placeholder="Apellido" name="apellido2" value="<?php echo $persona->apellido;?>" required>

    </div>

    <div class="form-group mb-3">
      
      <input type="text" class="form-control item" id="email" placeholder="Email" name="email2" value="<?php echo $persona->email;?>" required autofocus>

    </div>


    <div class="form-group mb-3">
                    <label for="id_rol">Rol de Usuario:</label><br>
                    <select name="id_rol" id="id_rol">
                        <?php while($id_rol = $consultaRol->fetch(PDO::FETCH_OBJ)){ ?>
                        <option value=<?php echo $id_rol->id_rol; ?>>
                            <?php echo $id_rol->nombre_rol; ?>
                        </option>
                        <?php } ?>
                    </select>
                </div>
    </div>



    <div class="form-group mb-3">


      
      <input type="password" class="form-control item" id="password" placeholder="Password" name="password3" required>

    </div>

    <div class="form-group mb-3">
      
      <input type="password" class="form-control item" id="repassword" placeholder="Password Nuevamente" name="password4" required>

    </div>

    <input type="hidden" name="id2" value="<?php echo $persona->id;?>">


    
    
    <button class="btn btn-lg btn-light btn-block border border-primary" type="submit" onClick="comprobarClave()">Guardar Cambios</button>
    
    <div class="mt-4">
      <div class="d-flex justify-content-center links">
            <a href="lista.php" class="ml-2">Volver al Sistema</a>
        
        </div>
      


    </div>

    <p class="mt-5 mb-3 text-muted">&copy;Grupo 3 1LS-132</p>
    


    
  </body>
</html>
