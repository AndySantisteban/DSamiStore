<?php
require __DIR__ . '../../../vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(dirname(__DIR__, 2));
$dotenv->load();

$link  = mysqli_connect($_ENV['SERVIDOR'], $_ENV['USER'], $_ENV['PASSWORD'])
    or die("Error: No se pudo conectar con el servidor");

$db = mysqli_select_db($link, $_ENV['DB'])
    or die("Error: No se pudo conectar a la Base de datos");
