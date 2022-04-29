<?php

include("../../models/empleado.php");
include("../../models/proveedor.php");
include("../../models/usuario.php");
include("../../models/rol.php");

class AuthControlador {
    public static function login() {
        session_start();

        if (isset($_SESSION['username'])) {
            return header("location:../../controllers/categorias");
        }

        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            include("../../views/login/index.php");
        } else {
            $username = $_POST['username'];
            $password = $_POST['password'];
            
            $usuario = Usuario::encontrar($username); 
    
            if ($usuario->password == $password) {
                $_SESSION['username']= $username;
                header("location:../../controllers/categorias");
            } else {
                ?>
                    <script languaje="javascript">
                        location.href = "../../controllers/login";
                        alert("El nombre de usuario o la contraseña es incorrecta!");
                    </script>
                <?php
            }
        }
    }

    public static function logout() {
        session_start();
        session_destroy();
    
        header("location:../../controllers/login");
        
        exit();
    }
}

?>
