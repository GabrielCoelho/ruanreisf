<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php bloginfo('name');?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700" rel="stylesheet" /> 
    <link href="https://fonts.googleapis.com/css?family=EB+Garamond" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet"> 
    <link href="https://thenahid.com/owl.carousel.min.css" type="text/css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css" type="text/css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="<?= get_template_directory_uri();?>/assets/css/fonts.css" />
    <link rel="stylesheet" type="text/css" href="<?= get_template_directory_uri();?>/assets/vendors/animate.css/animate.css" />
    <link rel="stylesheet" type="text/css" href="<?= get_template_directory_uri();?>/assets/vendors/ionicons/ionicons.min.css" />
    <link rel="stylesheet" type="text/css" href="<?= get_template_directory_uri();?>/assets/vendors/bootstrap4/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="<?= get_template_directory_uri();?>/assets/vendors/bootstrap4/css/bootstrap-grid.min.css" />
    <link rel="stylesheet" type="text/css" href="<?= get_template_directory_uri();?>/assets/vendors/bootstrap4/css/bootstrap-reboot.min.css" />
    <link rel="stylesheet" type="text/css" href="<?= get_template_directory_uri();?>/assets/vendors/owl.carousel/css/owl.carousel.min.css" />
    <link rel="stylesheet" type="text/css" href="<?= get_template_directory_uri();?>/assets/vendors/owl.carousel/css/owl.theme.default.min.css" />
    <link rel="stylesheet" type="text/css" href="<?= get_template_directory_uri();?>/assets/vendors/open-icons/open-iconic-bootstrap.min.css" />
    <link rel="stylesheet" href="<?= get_template_directory_uri();?>/assets/vendors/aos/css/aos.css" />
    <link rel="stylesheet" type="text/css" href="<?= get_stylesheet_directory_uri();?>/style.css" />
    <link rel="stylesheet" type="text/css" href="<?= get_template_directory_uri();?>/assets/css/app.css" />
    <link rel="stylesheet" type="text/css" href="<?= get_template_directory_uri();?>/assets/css/componentes.css" />
    <link rel="stylesheet" type="text/css" href="<?= get_template_directory_uri();?>/assets/css/responsivo.css" />
    <?php wp_head();?>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-darker">
        <div class="container">
            <div class="row">
                <a href="/" class="navbar-brand">
                    <img src="<?= get_template_directory_uri();?>/uploads/logo.png" alt="Ruan Reis">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#menuNavBar" aria-controls="menuNavBar"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span></button>
                    
                <div class="collapse navbar-collapse" id="menuNavBar">
                    <ul class="navbar-nav mr-auto px-6">
                        <li class="nav-item">
                            <a class="nav-link" href="#">Início
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Sobre</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Contato</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Parceiros</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">O que Fazemos</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>