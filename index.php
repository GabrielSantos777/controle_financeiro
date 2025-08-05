<?php require 'dados/cards.php'; ?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./style.css" />
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="./script.js" defer></script>
  <script src="https://cdn.canvasjs.com/ga/jquery.canvasjs.min.js"></script>
  <script src="https://cdn.canvasjs.com/ga/jquery.canvasjs.stock.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
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
            <!-- <img class="logo-img" src="/img/Logo GNR.png" alt="Logo GNR"> -->
            <span class="logo-text">Dashboard GNR</span>
          </div>

          <!-- Menu Toggle sempre visível -->
          <div class="menu-toggle" id="menuToggle">
            <span class="material-icons">menu</span>
          </div>

          <a href="#home">Home</a>
          <a href="#servicos">Serviços</a>
          <a href="#sobre">Sobre</a>
          <a href="#contato">Contato</a>
        </div>





        <!-- Conteúdo principal -->
        <div class="main-content p-3">
          <div class="container-fluid">

            <!-- Header -->
            <div class="row mb-4 g-3">
              <div class="col-12 col-md-6">
                <div class="cards shadow-sm p-4">
                  <div class="d-flex justify-content-between align-items-center mb-2">
                    <div>
                      <h5 class="mb-0">Bem-vindo de volta, <strong>Gabriel!</strong></h5>
                      <span class="mb-3 small">Que bom ter você de volta!</span><br></span>
                    </div>
                    <div class="img_familia ms-3">
                      <img src="<?php echo $recepcao[0]['foto'] ?>" alt="<?php echo $recepcao[0]['user'] ?>">
                    </div>
                  </div>

                  <span class="small">Agosto</span>
                  <div class="d-flex justify-content-between">
                    <div>
                      <span>Saldo</span>
                      <div class="text-success fw-bold fs-5">R$ 0,00</div>
                    </div>
                    <div>
                      <span>Entradas</span>
                      <div class="text-success fw-bold fs-5">R$ 0,00</div>
                    </div>
                    <div>
                      <span>Despesas</span>
                      <div class="text-danger fw-bold fs-5">R$ 0,00</div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-12 col-md-6">
                <div class="cards shadow-sm p-4 h-100 d-flex flex-column justify-content-center">
                  <h5 class="text-center mb-4">Acesso rápido</h5>
                  <div class="d-flex justify-content-around flex-wrap gap-2">
                    <button class="btn btn-danger d-flex flex-column align-items-center">
                      <span class="material-icons mb-1">do_disturb_on</span>DESPESA
                    </button>
                    <button class="btn btn-success d-flex flex-column align-items-center">
                      <span class="material-icons mb-1">add_circle_outline</span>RECEITA
                    </button>
                    <button class="btn btn-secondary d-flex flex-column align-items-center">
                      <span class="material-icons mb-1">swap_horizontal_circle</span>TRANSF.
                    </button>
                    <button class="btn btn-primary d-flex flex-column align-items-center">
                      <span class="material-icons mb-1">get_app</span>IMPORTAR
                    </button>
                  </div>
                </div>
              </div>
            </div>

            <!-- Blocos Inferiores -->
            <div class="row g-3">
              <div class="col-12 col-md-6 col-lg-4">
                <div class="cards shadow-sm p-4 h-100">
                  <span class="small">Saldo geral</span>
                  <h4 class="fw-bold">R$ 0,00</h4>
                  <hr>
                  <h6>Minhas contas</h6>
                  <div class="text-center small my-2">Adicione sua primeira conta</div>
                  <button class="btn btn-outline-dark w-100" style="color: white;">Gerenciar contas</button>
                </div>
              </div>

              <div class="col-12 col-md-6 col-lg-4">
                <div class="cards shadow-sm p-4 h-100">
                  <span class="small">Todas as faturas</span>
                  <h4 class="fw-bold">R$ 0,00</h4>
                  <hr>
                  <h6>Meus cartões</h6>
                  <div class="text-center small my-2">Adicione seu primeiro cartão</div>
                  <button class="btn btn-outline-dark w-100" style="color: white;">Gerenciar cartões</button>
                </div>
              </div>

              <div class="col-12 col-md-6 col-lg-4">
                <div class="cards_maiores position-relative p-4 pt-3">
                  <div class="mb-4 d-flex justify-content-center align-items-center" style="color:#fff">
                    <span class="title_cards">Nível da meta principal</span>
                  </div>
                  <div class="loader">
                    <div class="waves position-absolute"></div>
                  </div>
                  <div class="porcent" style="color:#fff">
                    <div class="vlr">50%</div>
                  </div>
                </div>
              </div>

            </div>

          </div>
        </div>

      </div>
    </div>
  </div>
</body>

</html>