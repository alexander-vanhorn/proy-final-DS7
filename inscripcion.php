<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Congreso - Inscripción</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!--Imagen de la barra de título-->
    <link rel="shortcut icon" href="imagenes\logo_utp_color.png" type="image/x-icon">

    <!--CSS Externo para modificaciones-->
    <link rel="stylesheet" href="css\estilos-inscripcion.css">
    
</head>

<body>
<?php
    // Código PHP de prueba, no tiene funcionalidad.
    $x = 5 + 5;
    echo $x;
    ?>

    

    <div class="encabezado">
        <img class="logo-utp-color" src="imagenes\logo_utp_color.png">  
        <br><br>
        <h3>VIII Congreso IESTEC UTP 2022</h3>
        <h5>Formulario de inscripción</h5>
        <small>Favor llena la información solicitada a continuación</small>
    </div>
    
    <form class="row g-2">
        <div class="row g-2">
            <div class="col">
                <input type="text" class="form-control" placeholder="Nombre" aria-label="Nombre">
            </div>
            <div class="col">
                <input type="text" class="form-control" placeholder="Apellido" aria-label="Apellido">
            </div>
        </div>

        <div class="col-md-5">
            <label for="inputEmail4" class="form-label">Email</label>
            <input type="email" class="form-control" id="inputEmail4">
        </div>

        <div class="col-md-4">
            <label for="inputTipoDocmento" class="form-label">Tipo de Documento</label>
            <select class="form-select" id="specificSizeSelect">
            <option selected>Escoja una opción...</option>
            <option value="1">Cédula</option>
            <option value="2">Pasaporte</option>
            </select>
        </div>

        <div class="col-md-3">
            <label for="inputPassword4" class="form-label">No. de Documento</label>
            <input type="text" class="form-control" id="inputPassword4">
        </div>

        <div class="col-12">
            <label for="inputAddress" class="form-label">Institución</label>
            <input type="text" class="form-control" id="inputAddress" placeholder="Ejm. Universidad Tecnológica de Panamá">
        </div>
      
        <div class="col-12">
            <label for="inputState" class="form-label">Tipo de participante</label>
            <select id="inputState" class="form-select">
            <option selected>Escoja una opción</option>
            <option value="1">Estudinate Pregrado</option>
            <option value="2">Estudiante Postgrado</option>
            <option value="3">Profesionales y otros nacionales</option>
            <option value="4">Estudinates Internacionales Pregrado y Postgrado</option>
            <option value="5">Profesionales y otros Internacionales</option>
            </select>
        </div>
        
        <div class="col-12">
            <br>
            <button type="submit" class="btn btn-primary">Registrarse</button>
        </div>
    </form>

    
</body>
</html>