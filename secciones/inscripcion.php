<?php


?>
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
    <link rel="shortcut icon" href="..\imagenes\logo_utp_color.png" type="image/x-icon">

    <!--CSS Externo para modificaciones-->
    <link rel="stylesheet" href="../css/estilos-inscripcion.css">
    
</head>

<body>

<?php include('navbar.html');?>

<br><br>

    <div class="encabezado">
        <img class="logo-utp-color" src="..\imagenes\logo_utp_color.png">  
        <br><br>
        <h3>VIII Congreso IESTEC UTP 2022</h3>
        <h5>Formulario de inscripción</h5>
        <small>Favor llena la información solicitada a continuación</small>
    </div>

    
    <form action='..\php\procesos_inscripcion.php' method='POST' class="row g-2" >
        <div class="row g-2">
            <div class="col">
                <input type="text" name="nombre" class="form-control" placeholder="Nombre" aria-label="Nombre" id="nombre">
            </div>
            <div class="col">
                <input type="text" name="apellido" class="form-control" placeholder="Apellido" aria-label="Apellido" id="nombre">
            </div>
        </div>

        <div class="col-md-5">
            <label for="inputEmail4" class="form-label">Email</label>
            <input type="email" name="email" class="form-control" id="email">
        </div>

        <div class="col-md-3">
            <label for="inputPassword4" class="form-label">Cédula</label>
            <input type="text" name="cedula" class="form-control" id="cedula">
        </div>

        <div class="col-md-3">
            <label for="inputPassword4" class="form-label">ID Participante</label>
            <input type="text" name="part_ID" class="form-control" id="part_ID">
        </div>

        <div class="col-12">
            <label for="inputAddress" class="form-label">Institución</label>
            <input type="text" name="institucion" class="form-control" id="institucion" placeholder="Ejm. Universidad Tecnológica de Panamá">
        </div>
      
        <div class="col-12">
            <label for="inputState" class="form-label">Tipo de participante</label>
            <select name="rol_participante" id="rol_participante" class="form-select">
            <option selected>Escoja una opción</option>
            <option value="Estudiante pregrado">Estudiante Pregrado</option>
            <option value="Estudiante postgrado">Estudiante Postgrado</option>
            <option value="Profesionales nacionales">Profesionales y otros nacionales</option>
            <option value="Estudiantes internacionales">Estudinates Internacionales Pregrado y Postgrado</option>
            <option value="Otros internacionales">Profesionales y otros Internacionales</option>
            </select>
        </div>
        
        <div class="col-12">
            <br>
            <button type="submit" class="btn btn-primary" href="..\secciones\confirmacion.php">Registrarse</button>
        </div>
    </form>

    
</body>
</html>