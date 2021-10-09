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
        header("location: ../views/dashboard.php");
    }else{
        echo "Falló algo, vuelve a intentarlo";
        echo "<a href ='../index.php'> Volver</a>";
    }

?>