<?php
    // Destruir todas las variables de sesión.
    require 'config.php';
    session_start();
    session_destroy();
    header("Location:../index.php");
    exit();
?>