<?php
    require 'config.php';
    session_start();

    $username =$_POST['username'];
    $password = $_POST['password'];
    $idRol = $_POST['idRol'];
    $q = "SELECT COUNT(*) as todos from usuario where userName = '$username' and  password = '$password'";

    $consulta = mysqli_query($link,$q);
    $array = mysqli_fetch_array($consulta);

    if ($array['todos']>0){
        $_SESSION['username']= $username;
        $_SESSION['idRol']= $idRol;

        header("location: ../views/categorias");

    }else{
            ?>
        <script languaje="javascript">
            location.href = "../index.php";
            alert("El nombre de usuario o la contraseña es incorrecta!");
        </script>
        <?php


    }
/* echo "<div style = 'display:flex;flex-direction:column; justify-content: center; align-items:center; height:100vh'>
                <p style='font-family: roboto'>Parece que algo salió mal, vuelve a intentarlo 😓</p>
                <a style='font-family: roboto' href ='../index.php'>Volver al Inicio</a>
              </div>";
        session_abort();*/
?>