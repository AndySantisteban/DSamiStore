<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">
    <link rel="stylesheet" href="/style.css">
</head>

<body>

    <div class="navbar border-bottom">
        <div class="container">
            <a href="/" class="navbar-brand fw-bold">D'Sami Store</a>
        </div>
    </div>

    <div class="container">
    <?php
        session_start();

        $username = $_SESSION['username'];
        echo "<h4 align= 'center'>Que gusto tenerte de vuelta {$username}!! 😄</h4>"
    ?>
    </div>
    

    <footer>
        <div class="container">
            <div class="py-5">
                <p class="text-center text-muted">© 2021 D'Sami Store</p>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-kQtW33rZJAHjgefvhyyzcGF3C5TFyBQBA13V1RKPf4uH+bwyzQxZ6CmMZHmNBEfJ" crossorigin="anonymous"></script>
</body>

</html>