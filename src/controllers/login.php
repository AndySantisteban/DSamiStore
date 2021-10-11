<?php
    require 'config.php';
    session_start();

    $username =$_POST['username'];
    $password = $_POST['password'];

    $q = "SELECT COUNT(*) as todos from usuario where userName = '$username' and  password = '$password'";
    $consulta = mysqli_query($link,$q);
    $array = mysqli_fetch_array($consulta);

    if ($array['todos']>0){
        $_SESSION['username']= $username;
        header("location: ../views/panel.php");
    }else{

        echo    "<div style = 'display:flex;flex-direction:column; justify-content: center; align-items:center; height:100vh'>
                    <p style='font-family: roboto'>Parece que algo salió mal, vuelve a intentarlo 😓</p>
                    <a style='font-family: roboto' href ='../index.php'>Volver al Inicio</a>
                </div>";
        session_abort();
    }

?>