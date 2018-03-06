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
  <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
    <a class="navbar-brand" href="#">NOME SUPERUSER</a>
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="#">Início</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="#">Adicionar História
          <span class="oi oi-plus" style="color:olive"></span>
        </a>
      </li>
    </ul>
  </nav>

  <div class="container-fluid">
    <div class="row">
      <nav class="col-md-2 d-none d-md-block bg-light sidebar">
        <div class="sidebar-sticky">
          <ul class="nav flex-column">
            <li class="nav-item">
              <a class="nav-link" href="#">
                <span class="oi oi-flag" style="color: gold;"></span>
                Categorias
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">
                <span class="oi oi-heart" style="color: red;"></span>
                Histórias
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">
                <span class="oi oi-people" style="color: CadetBlue;"></span>
                Usuários
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled<?php /*disabled*/ ?>" href="http://devcoelho.com/">
                <span class="oi oi-person"></span>
                Super Usuários
                <!-- If it's permissible (superuser[permission]==1) don't show this span -->
                <span class="oi oi-lock-locked"></span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">
                <span class="oi oi-comment-square" style="color: DarkOrange;"></span>
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
                <span class="oi oi-graph" style="color: DeepSkyBlue;"></span>
                Mensal
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">
                <span class="oi oi-pulse" style="color: DeepSkyBlue;"></span>
                Última Semana
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">
                <span class="oi oi-thumb-up" style="color: DeepSkyBlue;"></span>
                Engajamento Social
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">
                <span class="oi oi-dollar" style="color: DarkGreen;"></span>
                Criar Orçamentos
              </a>
            </li>
          </ul>
        </div>
      </nav>

      <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
        <div>
          <?= $content; ?>
        </div>
      </main>
    </div>
  </div>

  <!-- jQuery  -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <?= Asset::js(array('bootstrap.min.js', 'bootstrap.bundle.min.js'))?>
</body>

</html>