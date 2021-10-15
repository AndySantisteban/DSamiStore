<div class="app-sidebar p-3 border-end ">
    <a class="d-flex text-decoration-none mb-4">
        <h4 class="fs-4 fw-bold text-primary">D' Sami Store</h4>
    </a>
    <div class="nav nav-pills flex-column mb-auto">
        <li class="nav-item">
            <a href="../categorias" class="nav-link active">Categorías</a>
        </li>
        <li>
            <a href="#" class="nav-link link-dark">Productos</a>
        </li>
        <li>
            <a href="#" class="nav-link link-dark">Pedidos</a>
        </li>
        <li>
            <a href="../proveedores" class="nav-link link-dark">Proveedores</a>
        </li>
        <?php
        session_start();
        if($_SESSION['username'] === "administrador"){
            print $_SESSION['idRol'];
            echo
            "<li>
                    <a href='../usuarios' class='nav-link link-dark'>Usuarios</a>
                </li>
                <li>
                    <a href='../roles' class='nav-link link-dark'>Roles</a>
                </li>";
        }else {
            echo "";
        }
        ;?>


    </div>
    
</div>