<div class="app-sidebar p-3 border-end ">
    <a class="d-flex text-decoration-none mb-4 " href="../categorias">
        <h4 class="fs-4 fw-bold text-primary">D' Sami Store</h4>
    </a>
    <div class="nav nav-pills flex-column mb-auto">
        <li class='nav-item'>
            <?php
            $req = $_SERVER["REQUEST_URI"];
            if($req==='/DSamiStore/src/views/categorias/'){
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
            if($req==='/DSamiStore/src/views/productos/'){
                $res= "active";
            }else{
                $res= "";
            }
            echo '<a href="../productos" class="nav-link link-dark ' . $res . '" >';
            echo "Productos";
            echo "</a>";
            ?>
        </li>
        <li>
            <?php
            $req = $_SERVER["REQUEST_URI"];
            if($req==='/DSamiStore/src/views/productos/#'){
                $res= "active";
            }else{
                $res= "";
            }
            echo '<a href="../productos/#" class="nav-link link-dark disabled ' . $res . '" >';
            echo "Pedidos";
            echo "</a>";
            ?>
        </li>

        <?php
        if($_SESSION['username'] === "administrador"){
            print $_SESSION['idRol'];
            $req = $_SERVER["REQUEST_URI"];
            if($req==='/DSamiStore/src/views/proveedores/'){
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
            print $_SESSION['idRol'];
            $req = $_SERVER["REQUEST_URI"];
            if($req==='/DSamiStore/src/views/usuarios/'){
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
            print $_SESSION['idRol'];
            $req = $_SERVER["REQUEST_URI"];
            if($req==='/DSamiStore/src/views/roles/'){
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
            print $_SESSION['idRol'];
            $req = $_SERVER["REQUEST_URI"];
            if($req==='/DSamiStore/src/views/empleados/'){
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