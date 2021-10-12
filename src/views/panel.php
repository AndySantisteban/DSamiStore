<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php include('includes/head.php') ?>
</head>
    <body>
        <div class="app">
            <?php include('includes/sidebar.php')?>
           <div class="app-content">
               <?php include('includes/navbar.php') ?>
               <?php
               session_start();

               $username = $_SESSION['username'];
               echo "<h4 align= 'center'>Que gusto tenerte de vuelta {$username}!! 😄</h4>";
               ?>
               <a class= 'btn btn-danger'href="../controllers/logout.php" > Cerrar sesión</a>
               <footer>

                   <div class="container">
                       <div class="py-5">
                           <p class="text-center text-muted">© 2021 D'Sami Store</p>
                       </div>
                   </div>
               </footer>
           </div>
        </div>
    </body>

</html>