<div class="app-sidebar p-3 border-end ">
    <a class="d-flex text-decoration-none mb-4 " href="../categorias">
        <h4 class="fs-4 fw-bold text-primary">D' Sami Store</h4>
    </a>
    <div class="nav nav-pills flex-column mb-auto">
        <li class='nav-item'>
            <?php
            $req = $_SERVER["REQUEST_URI"];
            if($req==='/DSamiStore/src/controllers/categorias/'){
                $res= "active";
            }else{
                $res= "";
            }
            echo '<a href="../categorias" class="nav-link link-dark ' . $res . '" >';
            echo "Categorías";
            echo "</a>";
            ?>
        </li>
        <li class='nav-item' >
            <?php
            $req = $_SERVER["REQUEST_URI"];
            if($req==='/DSamiStore/src/controllers/productos/'){
                $res= "active";
            }else{
                $res= "";
            }
            echo '<a href="../productos" class="nav-link link-dark ' . $res . '" >';
            echo "Productos";
            echo "</a>";
            ?>
        </li>
        <?php
        if($_SESSION['username'] === "administrador"){
            $req = $_SERVER["REQUEST_URI"];
            if($req==='/DSamiStore/src/controllers/proveedores/'){
                $res= "active";
            }else{
                $res= "";
            }
            echo '<a href="../proveedores" class="nav-link link-dark ' . $res . '" >';
            echo "Proveedores";
            echo "</a>";
            }else {
                echo "";
            };
        ?>
        <?php
        if($_SESSION['username'] === "administrador"){
            $req = $_SERVER["REQUEST_URI"];
            if($req==='/DSamiStore/src/controllers/usuarios/'){
                $res= "active";
            }else{
                $res= "";
            }
            echo '<a href="../usuarios" class="nav-link link-dark ' . $res . '" >';
            echo "Usuarios";
            echo "</a>";
        }else {
            echo "";
        };
        ?>
        <?php
        if($_SESSION['username'] === "administrador"){
            $req = $_SERVER["REQUEST_URI"];
            if($req==='/DSamiStore/src/controllers/roles/'){
                $res= "active";
            }else{
                $res= "";
            }
            echo '<a href="../roles" class="nav-link link-dark ' . $res . '" >';
            echo "Roles";
            echo "</a>";
        }else {
            echo "";
        };
        ?>
        <?php
        if($_SESSION['username'] === "administrador"){
            $req = $_SERVER["REQUEST_URI"];
            if($req==='/DSamiStore/src/controllers/empleados/'){
                $res= "active";
            }else{
                $res= "";
            }
            echo '<a href="../empleados" class="nav-link link-dark ' . $res . '" >';
            echo "Empleados";
            echo "</a>";
        }else {
            echo "";
        };
        ?>
    </div>
</div>