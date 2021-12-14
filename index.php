<!DOCTYPE html>
<html lang="en">
    
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
    <!--CSS Externo para modificaciones-->
    <link rel="stylesheet" href="css\style.css">
    <link rel="stylesheet" href="css\areas_de_interes.css">
    
    <!-- JavaScript Externo -->
    <script src="js\style.js"></script>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


    <title>VIII Congreso IESTEC UTP</title>

    <!--Imagen de la barra de título-->
    <link rel="shortcut icon" href="imagenes\logo_utp_color.png" type="image/x-icon">
</head>

<body>

    <div class="prueba">
        <?php
        // You can also use comments to leave out parts of a code line
        $x = 5 + 5;
        ?>
       <!-- navbar-->
       <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            
            <a class="navbar-brand" href="index.php"> <img height="50px" width="auto" src="imagenes/logo_utp_blanco.png"> Congreso UTP</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
              <ul class="navbar-nav">
                <li class="nav-item active">
                  <a class="nav-link" href="index.php">Inicio <span class="sr-only"></span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="secciones\inscripcion.php">Inscripcion</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="secciones/giras_tecnicas.php">Giras tecnicas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="secciones/areas_de_interes.php">Areas de interes</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="secciones/expositores.php">Expositores</a>
                  </li>
               
              </ul>
            </div>
          </nav>

        <h1 class="titulo-1">VII Congreso Internacional de Ingeniería, Ciencias y Tecnología</h1>
        <h3 class="subtitulo-1">Ciencias, Tecnología, Sostenibilidad e Inovación: Pilares para la recuperación económica.</h3>
        <center>
        <br><br><br><br>
        <a href="secciones/certificado.html">
    <button type="button" class="btn btn-success" data-toggle="modal">
  <b>Solicitar certificado</b>
    </button> 
        </a>
    </center>
        <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
        <footer>
          <br><br>
          @2021 Universidad Tecnologica de Panama | All rights reserved | Powered by UTP
          <br><br><br>
      </footer> 
    </div>
       
  
</body>
</html>