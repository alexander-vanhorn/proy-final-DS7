<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    
    <title>Acceder al Sistema - UTP</title>

    
    <link rel="stylesheet"href="../css/signin.css" >
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
          font-size: 3.5rem;
        }
      }
    </style>

    

  </head>


  <body class="text-center">
    


  <form class="form-signin" method="POST" action="../php/procesarLogin.php">
    <img class="mb-4" src="../imagenes/logo_utp.png" alt="" width="100" height="100">
    <h1 class="h3 mb-3 fw-normal">Acceder al Sistema</h1>

    <p class="text-danger"> <?php if (isset($_GET['msg'])) echo $_GET['msg'];?>  </p>


    
      <label for="inputEmail" class="sr-only">Correo Electronico</label>
      <input type="email" class="form-control" id="inputEmail" placeholder="nombre@ejemplo.com" name="email" required>
      
    

      <label for="inputPassword">Contraseña</label>
      <input type="password" class="form-control" id="inputPassword" placeholder="contraseña" name="password" required>
      
      
 

    
    
    <button class="btn btn-lg btn-light btn-block border border-primary" type="submit">Acceder</button>
    

    
    
    <p class="mt-5 mb-3 text-muted">&copy;Grupo 3 1LS-132</p>


  </form>

  <script src="../js/bootstrap.min.js"></script>



    
  </body>
</html>
