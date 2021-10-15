<?php

//validamos si se ha hecho o no el inicio de sesion correctamente
//si no se ha hecho la sesion nos regresará a login.php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location:../../index.php");
    exit();
}

