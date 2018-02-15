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

  <?= Asset::css(array('bootstrap.min.css','bootstrap-grid.min.css', 'bootstrap-reboot.min.css', 'app.css', 'open-iconic-bootstrap.min.css'));?>
</head>

<body>
  <nav class="navbar bg-dark navbar-dark navbar-expand-md">
    <a class="navbar-brand mr-5" href="#">NOME USUARIO</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText"
      aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse ml-5 pl-5" id="navbarText">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="#">Início</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Adicionar História
            <span class="oi oi-plus" style="color: olive;"></span>
          </a>
        </li>
    </div>
  </nav>

  <div class="container-fluid">
    <div class="row">
      <nav class="col-md-2 d-none d-md-block bg-light sidebar">
        <div class="sidebar-sticky">
          <ul class="nav flex-column">
            <li class="nav-item">
              <a class="nav-link" href="#">
                <span class="oi oi-flag"></span>
                Categorias
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">
                <span class="oi oi-heart"></span>
                Histórias
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">
                <span class="oi oi-people"></span>
                Usuários
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">
                <span class="oi oi-person"></span>
                Super Usuários
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">
                <span class="oi oi-comment-square"></span>
                Comentários
              </a>
            </li>
          </ul>

          <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
            <span>Estatísticas</span>
            <a class="d-flex align-items-center text-muted" href="#">
              <span data-feather="plus-circle"></span>
            </a>
          </h6>
          <ul class="nav flex-column mb-2">
            <li class="nav-item">
              <a class="nav-link" href="#">
                <span class="oi oi-graph"></span>
                Mensal
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">
                <span class="oi oi-pulse"></span>
                Última Semana
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">
                <span class="oi oi-thumb-up"></span>
                Engajamento Social
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">
                <span class="oi oi-dollar"></span>
                Criar Orçamentos
              </a>
            </li>
          </ul>
        </div>
      </nav>

      <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
          <?= $content; ?>
        </div>
    </div>

  <?= Asset::js(array('bootstrap.min.js', 'bootstrap.bundle.min.js'))?>
</body>

</html>