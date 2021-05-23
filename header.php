<?php
    require_once("db.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <!-- Google icon -->
    <link href="https://fonts.googleapis.com/css2?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.js" integrity="sha256-DrT5NfxfbHvMHux31Lkhxg42LY6of8TaYyK50jnxRnM=" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha256-4+XzXVhsDmqanXGHaHvgh1gMQKX40OUvDEBTu8JcmNs=" crossorigin="anonymous"></script>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Blog</title>
</head>
<body> 
    <nav>
    <div class="nav-wrapper">
        <a href="#" class="brand-logo left">Blog</a>
        <a href="#" class="right hide-on-large-only sidenav-trigger" data-target="slide-out"><i class="material-icons">menu</i></a>
    <ul class="right hide-on-med-and-down">
        <li><a href="index.php">HOME</a></li>
        <li><a href="add.php">ADD POST</a></li>
        <li><a href="about.php">ABOUT </a></li>
    </ul>
    </div>
    </nav>
    <ul id="slide-out" class="sidenav">
        <li><a href="#">HOME</a></li>
        <li><a href="#">ADD POST</a></li>
        <li><a href="#">ABOUT </a></li>
    </ul>   

    <script>
          $(document).ready(function(){
        $('.sidenav').sidenav();
        });
    </script>
</body>
</html>