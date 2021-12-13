<?php
    include('../config/conexion.php');
    $consultaParticipantes = $conn->query("SELECT * FROM `participantes`");
    

    //put all of the resulting names into a PHP array
    $nombre_array = Array();
    $id_array = Array();
    while ($row = $consultaParticipantes->fetch(PDO::FETCH_ASSOC)) {
        $nombre_array[] =$row['nombre'];
        $id_array[] =$row['part_id'];
    }
    $json_arrayNom = json_encode($nombre_array);
    $json_arrayId = json_encode($id_array);
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

    <script>
        window.onload = function() {
            inicio()
        };
        function inicio() {
            var msg=document.getElementById("error");
            msg.style.display="none";
        }
        function comprobarParticipante(){
            var nomblist = <?php echo $json_arrayNom; ?>, idList =<?php echo $json_arrayId; ?>,
            nombC = document.formularioC.Nombre.value, idC = document.formularioC.CODI.value, msg=document.getElementById("error");
            
            for (let i = 0; i < nomblist.length; i++){
                if (nombC==nomblist[i] && idC== idList[i]){
                    msg.style.display="none";
                    return true;
                }
            }
            msg.style.display="block";
            return false;
        }
    </script>
</head>
<body>
    <div class="modal-dialog text-center">
        <div class="modal-content">
            <form name="formularioC" class="col-sm-8 main-section" method="GET" action="../php/procesarAsistencia.php" onSubmit="return comprobarParticipante()">
                <br>
                    <div class="form-group" id="user-group">
                        <input type="text" class="form-control" placeholder="COD Inscripcion" name="CODI"/>
                    </div>
                    <div class="form-group" id="user-group">
                        <input type="text" class="form-control" placeholder="Nombre " name="Nombre"/>
                    </div>
                    <div class="form-group" id="user-group">
                        <br>
                        <?php
                            $consultaConferencia = $conn->query("SELECT * FROM `conferencias`");
                            echo '<select class="form-control" id="confList" name="confList">'; // Open your drop down box
                            echo '<option value="-1">--Selecciones Conferencia--</option>';
                            while ($row = $consultaConferencia->fetch(PDO::FETCH_ASSOC)) {
                                echo '<option value="'.$row['conf_id'].'">'.$row['tema'].'</option>';
                            }
                            echo '</select>';
                        ?>
                    </div>
                    <div class="form-group" id="user-group">
                        <p id = "error" name="error" style= none>Error en los datos insertados.</p>
                        <input type="hidden" class="form-control" id = "aux" placeholder="aux" name="aux"/>
                    </div>
                    <br>
                    <button type="submit" class="btn btn-lg btn-primary btn-block" onClick="comprobarClave()" ><i class="fas fa-sign-in-alt"></i> Ingresar Asistencia</button>
                </form>
        </div>
    </div>
</body>
</html>