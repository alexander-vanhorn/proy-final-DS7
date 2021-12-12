<?php
    include('config/conexion.php');
    /*
    include("../php/verificar.php");
    include("../php/consultaUser.php");

    /*if ($dataUser->nivel!=1){
        header("Location: panel.php");
    }*/
    
?>
<!DOCTYPE html>
<html lang="en" xmlns:th="http://www.thymeleaf.org">
<head>
    <!--JQUERY-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!-- FRAMEWORK BOOTSTRAP para el estilo de la pagina-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <!-- Los iconos tipo Solid de Fontawesome-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/solid.css">
    <script src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>
    <!-- Nuestro css-->
    <link rel="stylesheet" type="text/css" href="../css/index.css" th:href="@{/css/index.css}">
    <title>Registro de Asistencia</title>
</head>
<body>
    <div class="modal-dialog text-center">
        <div class="modal-content">
            <form name="formularioC" class="col-sm-8 main-section" method="GET" action="php/procesarAsistencia.php" >
                <br>
                    <div class="form-group" id="user-group">
                        <input type="text" class="form-control" placeholder="COD Inscripcion" name="CODI"/>
                    </div>
                    <div class="form-group" id="user-group">
                        <input type="text" class="form-control" placeholder="Cedula " name="Cedula"/>
                    </div>
                    <div class="form-group" id="user-group">
                        <select class="form-control">
                            <option value="0">Hola</option>
                            <option value="1">Hola2</option>
                        </select>
                        <br>
                        <?php
                            /*
                            $consultaNivel = $conn->query("SELECT * FROM `nivel`");
                            echo '<select class="form-control" id="nivelList" name="nivelList">'; // Open your drop down box
                            echo '<option value="-1">--Selecciones Nivel--</option>';
                            while ($row = $consultaNivel->fetch(PDO::FETCH_ASSOC)) {
                                echo '<option value="'.$row['id_nivel'].'">'.$row['nom_nivel'].'</option>';
                            }
                            echo '</select>';
                            */
                        ?>
                    <button type="submit" class="btn btn-lg btn-primary btn-block" ><i class="fas fa-sign-in-alt"></i> Ingresar Asistencia</button>
                </form>
        </div>
    </div>
</body>
</html>