<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php require('views/includes/head.php') ?>
    <link rel="stylesheet" href="/style.css">
</head>
<body>
    <div class="navbar border-bottom">
        <div class="container">
            <a href="/" class="navbar-brand fw-bold">D'Sami Store</a>
        </div>
    </div>
    <div class="container">
        <form class="card mt-5 mx-auto" style="max-width: 512px;" action="controllers/login.php" method="POST">
            <div class="card-body">
                <div class="mt-3 mb-3">
                    <h1 class="h4 fw-bold text-center">Inicio de sesión</h1>
                </div>
                <div class="mb-3">
                    <label for="username" class="form-label">Username</label>
                    <input  class="form-control" id="username" placeholder="Ingresa tu nombre de usario" required name="username">
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Contraseña</label>
                    <input type="password" class="form-control" id="password" placeholder="Ingresa tu contraseña" required name="password">
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-primary">Acceder</button>
                </div>
            </div>
        </form>
    </div>
    <footer>
        <div class="container position-absolute bottom-0 start-50 translate-middle-x">
            <div class="py-5">
                <p class="text-center text-muted">© 2021 D'Sami Store</p>
            </div>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-kQtW33rZJAHjgefvhyyzcGF3C5TFyBQBA13V1RKPf4uH+bwyzQxZ6CmMZHmNBEfJ" crossorigin="anonymous"></script>
</body>
</html>