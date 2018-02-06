<?php 
 /**
  * This page is a template for the control panel. 
  * Here, the Super User will be able to create new stories, new categories... basically everything, 
  * even new super users (if the sudo is able to this user).
  */
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ruan Reis | Controle</title>

    <?= Asset::css(array('bootstrap.min.css','bootstrap-grid.min.css', 'bootstrap-reboot.min.css', 'app.css'));?>
</head>

<body>
    <nav class="navbar bg-dark navbar-dark navbar-expand-md">
        <div class="container">
        <a class="navbar-brand" href="#">NOME USUARIO</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText"
            aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Início</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Pricing</a>
                </li>
            </ul>
            <span class="navbar-text">
                Navbar text with an inline element
            </span>
        </div>
        </div>
    </nav>


    <?= Asset::js(array('bootstrap.min.js', 'bootstrap.bundle.min.js'))?>
</body>
</html>