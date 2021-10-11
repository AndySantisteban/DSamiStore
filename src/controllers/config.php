<?php

    require __DIR__ . '../../../vendor/autoload.php';

    $dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
    $dotenv->load();

    $link  = mysqli_connect($_ENV['SERVIDOR'] , $_ENV['USER']  , $_ENV['PASSWORD'])
    or die("Error: No se pudo conectar con el servidor");

    $db = mysqli_select_db( $link, $_ENV['DB'] )
    or die ( "Error: No se pudo conectar a la Base de datos" );

    function getQuery($consulta){
        return mysqli_query($link, $consulta)
        or die ( "Error: No se pudo realizar la consulta");
    }
?>