<?php

session_start();

session_unset();

header('Location: ../secciones/login.php');

?>