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
       <!--<img class ="logo-utp" src="imagenes\logo_utp_web.png">-->
       <nav class="navbar navbar-expand-lg navbar-dark bg-transparent">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    <img class="logo-utp" src="imagenes/logo_utp_web.png" alt="" width="50" height="50">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                    <a class="nav-link" href="#areas-interes">Áreas de interés</a>
                    <a class="nav-link" href="secciones/expositores.php">Expositores</a>
                    <a class="nav-link disabled">Disabled</a>

                    &emsp;&emsp;&emsp;&emsp;
                    &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                    &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                    &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                    &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;

                    <a class="btn btn-success" href="secciones/inscripcion.php" role="button">Registrarse</a>
                </div>
                </div>
            </div>
            </nav>

        <h1 class="titulo-1">VII Congreso Internacional de Ingeniería, Ciencias y Tecnología</h1>
        <h3 class="subtitulo-1">Ciencias, Tecnología, Sostenibilidad e Inovación: Pilares para la recuperación económica.</h3>
        <?php include 'secciones/certificado.html'; ?>
        <br><br><br>
    </div>
       
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<footer>
    <br><br>
    @2021 Universidad Tecnológica de Panamá | All rights reserved | Powered by UTP
    <br><br><br>
</footer>   

</body>
</html>