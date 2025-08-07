<div class="container-fluid">
  <div class="row">
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
                  <span class="material-icons mb-1">do_disturb_on</span>Despesas
                </button>
                <button class="btn btn-success d-flex flex-column align-items-center">
                  <span class="material-icons mb-1">add_circle_outline</span>Receita
                </button>
                <button class="btn btn-secondary d-flex flex-column align-items-center">
                  <span class="material-icons mb-1">swap_horizontal_circle</span>Transf.
                </button>
                <button class="btn btn-primary d-flex flex-column align-items-center">
                  <span class="material-icons mb-1">get_app</span>Importar
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

          <div class="meta-card col-12 col-md-6 col-lg-4 cards">
            <div class="circle-progress">
              <svg class="progress-ring" width="120" height="120">
                <circle class="progress-ring__bg" cx="60" cy="60" r="50" />
                <circle class="progress-ring__value" cx="60" cy="60" r="50" />
              </svg>
              <div class="percentage-text">50%</div>
            </div>
            <div class="label">Nível da meta principal</div>
          </div>


          <div class="meta-card col-12 cards">
            <div id="chart_div" style="width: 900px; height: 500px;"></div>
          </div>

        </div>

      </div>

    </div>

  </div>
</div>