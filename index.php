<?php
$page = $_GET['page'] ?? 'dashboard'; // Página padrão
$view = "views/{$page}.php";
$title = ucfirst($page); // Apenas capitaliza o nome da página
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- SCRIPT -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="assets/js/script.js" defer></script>
  <script src="https://cdn.canvasjs.com/ga/jquery.canvasjs.min.js"></script>
  <script src="https://cdn.canvasjs.com/ga/jquery.canvasjs.stock.min.js"></script>
  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
  <!-- CSS -->
  <link rel="stylesheet" href="assets/css/style.css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&display=swap"
    rel="stylesheet">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <title>Dashboard de Investimentos</title>
</head>

<body>
  <div class="container-fluid">
    <div class="row">
      <div class="container-wrapper">
        <!-- Sidebar -->
        <div class="sidebar" id="sidebar">
          <!-- Logo e Menu -->
          <div class="logo">
            <span class="logo-text">Dashboard GR</span>
          </div>

          <!-- Botão do menu sempre visível -->
          <div class="menu-toggle" id="menuToggle">
            <span class="material-icons">menu</span>
          </div>

          <!-- Menu principal -->
          <ul class="nav nav-pills flex-sm-column flex-row flex-nowrap flex-shrink-1 flex-sm-grow-0 flex-grow-1 mb-sm-auto mb-0 justify-content-center align-items-center align-items-sm-start" id="menu">
            <li class="nav-item">
              <a href="index.php?page=dashboard" class="nav-link px-sm-0 px-2">
                <span class="material-icons">
                  dashboard
                </span>
                <span class="ms-1 d-none d-sm-inline">Dashboard</span>
              </a>
            </li>
            <li>
              <a href="index.php?page=lancamentos" class="nav-link px-sm-0 px-2">
                <span class="material-icons">
                  library_add
                </span>
                <span class="ms-1 d-none d-sm-inline">Lançamentos</span>
              </a>
            </li>
            <li>
              <a href="index.php?page=teas" class="nav-link px-sm-0 px-2">
                <span class="material-icons">
                  assignment
                </span>
                <span class="ms-1 d-none d-sm-inline">Relatórios</span></a>
            </li>
            <li>
              <a href="#" class="nav-link px-sm-0 px-2">
                <span class="material-icons">
                  flag
                </span>
                <span class="ms-1 d-none d-sm-inline">Metas</span></a>
            </li>
            <li>
              <a href="#" class="nav-link px-sm-0 px-2">
                <span class="material-icons">
                  share
                </span>
                <span class="ms-1 d-none d-sm-inline">Conexão</span> </a>
            </li>
          </ul>


          <!-- Menu inferior -->
          <div class="dropdown">

            <a href="#" class="d-flex align-items-center text-white text-decoration-none" id="user">
              <!-- <img src="https://github.com/mdo.png" alt="hugenerd" width="28" height="28" class="rounded-circle"> -->
              <span class="material-icons">
                notifications
              </span>
            </a>
            <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
              <span class="material-icons">
                settings
              </span>
            </a>
            <ul class="dropdown-menu dropdown-menu-dark text-small shadow" aria-labelledby="dropdownUser1">
              <li><a class="dropdown-item p-2" href="#">Categorias</a></li>
              <li><a class="dropdown-item p-2" href="#">Contas</a></li>
              <li><a class="dropdown-item p-2" href="#">Cartões de Crédito</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item p-2" href="#">Atividades</a></li>
              <li><a class="dropdown-item p-2" href="#">Meu Plano</a></li>
            </ul>
            <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownProfile" data-bs-toggle="dropdown" aria-expanded="false">
              <!-- <img src="https://github.com/mdo.png" alt="hugenerd" width="28" height="28" class="rounded-circle"> -->
              <span class="material-icons">
                account_circle
              </span>

            </a>
            <ul class="dropdown-menu dropdown-menu-dark text-small shadow" aria-labelledby="dropdownProfile">
              <div class="d-flex flex-column justify-content-center fotoProfile">
                <img src="https://github.com/mdo.png" alt="hugenerd" width="42" height="42" class="rounded-circle">
              </div>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item p-2" href="#">Minha Conta</a></li>
              <li><a class="dropdown-item p-2" href="#">Sair</a></li>
            </ul>
          </div>
        </div>





        
        <!-- Conteúdo principal -->
        <div class="main-content p-3">
        
          <?php
          if (file_exists($view)) {
            include $view;
          } else {
            include 'views/404.php';
          }
          ?>
        </div>
      </div>
    </div>
  </div>
</body>

</html>