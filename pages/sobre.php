<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous" />
  <link rel="stylesheet" href="./estiloSobre.css" />
  <link rel="stylesheet" href="../acessibilidade.css">

  <link rel="icon" type="image/png" href="../images/Design Sem Nome.png" />
  <title>Sobre nós - KeePets</title>
</head>

<body>
  <!-- NAV BAR -->

  <!-- Navbar -->
  <nav class="navbar fixed-top navbar-expand-lg navbar-dark p-md-3">
    <!-- Container wrapper -->
    <div class="container">
      <!-- Toggle button -->
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <!-- Collapsible wrapper -->
      <div class="collapse navbar-collapse" id="navbarNav">
        <img src="../images/logo2.png" alt="logo" style="width: 70px; height:70px; margin-bottom: 10px">
        <!-- Navbar brand -->
        <a class="navbar-brand mt-2 mt-lg-0" href="../index.php">
          KeePets
        </a>
        <!-- Left links -->

        <ul class="navbar-nav ps-5 me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link text-white" href="./Services.php">Serviços</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="#">Sobre nós</a>
          </li>
        </ul>
        <!-- Left links -->
      </div>
      <!-- Collapsible wrapper -->

      <!-- Right elements -->
      <div class="d-flex align-items-end">
        <!-- Avatar -->
        <?php
        session_start();

        if (isset($_SESSION['usuario'])) {

          $nomeArquivo = "$_SESSION[usuario]"; // Substitua pelo nome do seu arquivo
          $diretorioImagens = "../Uploads/"; // Substitua pelo diretório das suas imagens

          $extensoes = array("jpg", "jpeg", "png", "gif"); // Lista de extensões possíveis

          foreach ($extensoes as $extensao) {
            $caminhoCompleto = $diretorioImagens . $nomeArquivo . "." . $extensao;
            if (file_exists($caminhoCompleto)) {
              $imagem = $caminhoCompleto;
              break;
            }
          }
        }

        if (isset($imagem)) {
          echo '<div class="navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
              <li class="nav-item dropdown">
                <a class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                  <img src="' . $imagem . '" class="rounded-circle" height="25" alt="perfil vazio" loading="lazy" />
                </a>
                <ul class="dropdown-menu">
                  <li>
                    <a class="dropdown-item" href="./editar.php">Editar Perfil</a>
                  </li>
                  <li>
                    <a class="dropdown-item" href="./cadastro.php">Deletar Conta</a>
                  </li>
                  <li>
                    <a class="dropdown-item" href="../CRUD/LogOFF.php">Sair</a>
                  </li>
                </ul>
              </li>
            </ul>
          </div>';
        } else {
          echo '<div class="navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
              <li class="nav-item dropdown">
                <a class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                  <img src="../images/avatar.png" class="rounded-circle" height="25" alt="perfil vazio" loading="lazy" />
                </a>
                <ul class="dropdown-menu">
                  <li>
                    <a class="dropdown-item" href="./logn.php">Login</a>
                  </li>
                  <li>
                    <a class="dropdown-item" href="./cadastro.php">Cadastra-se</a>
                  </li>
                </ul>
              </li>
            </ul>
          </div>';
        }

        ?>
      </div>
      <!-- Right elements -->
    </div>
    <!-- Container wrapper -->
  </nav>
  <!-- Navbar -->

  <!-- FIM NAV BAR -->

  <!-- CORPO -->

  <main>

    <!-- Botão Acessibilidade -->
    <div class="btn-acessibilidade">
      <button id="acessibilidade"><i class="bi bi-universal-access"></i></button>
    </div>
    <!-- Fim Botão Acessibilidade -->

    <div class="container">
      <!-- TEXTOS -->

      <div class="row col-12 d-flex align-items-center justify-content-center text-center mt-5 pt-5">
        <h3 class="name mt-5 fs-1">Nossa Empresa</h3>
        <p class="fs-3 pb-5 ">
          Uma nova empresa surge no cenário pet com o propósito de cuidar e
          mimar os animais de estimação. A paixão pelos animais de estimação e
          a busca por oferecer um serviço completo motivaram a criação dessa
          empresa especializada em hospedagem para animais, que também pode
          incluir banhos refrescantes, tosas estilosas e passeios divertidos.
          Com uma equipe dedicada e experiente, a empresa está pronta para
          receber os peludos de forma acolhedora, fornecendo-lhes todo o
          cuidado e atenção necessária. Bem-vindos a essa nova e emocionante
          jornada!
        </p>
        <hr class="py-2" />
        <h3 class="name fs-1 pb-2">Quem Somos</h3>
      </div>

      <!-- FIM TEXTOS -->

      <!-- CARD -->

      <div class="row">
        <div class="row">
          <div class="col-sm-12 col-md-6 col-xl-4 text-center">
            <div class="card m-3 border border-primary-subtle rounded-5" style="width: 100%; height: 95%">
              <img src="../images/sobreNos/1.png" class="card-img-top p-3 rounded-5" alt="..." />
              <div class="card-body">
                <h4 class="name fs-2">Bernardo</h4>
                <p class="card-text fs-3 ">
                  Bernardo, 20 anos, responsável pela parte Back-End.
                </p>
              </div>
            </div>
          </div>
          <div class="col-sm-12 col-md-6 col-xl-4 text-center">
            <div class="card m-3 border border-primary-subtle rounded-5" style="width: 100%; height: 95%">
              <img src="../images/sobreNos/2.png" class="card-img-top p-3 rounded-5" alt="..." />
              <div class="card-body">
                <h4 class="name fs-2">Israel</h4>
                <p class="card-text fs-3 ">
                  Israel, 19 anos responsável pela parte Front-End.
                </p>
              </div>
            </div>
          </div>
          <div class="col-sm-12 col-md-6 col-xl-4 text-center">
            <div class="card m-3 border border-primary-subtle rounded-5" style="width: 100%; height: 95%">
              <img src="../images/sobreNos/3.png" class="card-img-top p-3 rounded-5" alt="..." />
              <div class="card-body">
                <h4 class="name fs-2">Matheus</h4>
                <p class="card-text fs-3 ">
                  Matheus, 34 anos responsável pela documentação e pelo
                  Front-End.
                </p>
              </div>
            </div>
          </div>
          <div class="col-sm-12 col-md-6 col-xl-4 text-center">
            <div class="card m-3 border border-primary-subtle rounded-5" style="width: 100%; height: 95%">
              <img src="../images/sobreNos/4.png" class="card-img-top p-3 rounded-5" alt="..." />
              <div class="card-body">
                <h4 class="name fs-2">Marcio</h4>
                <p class="card-text fs-3 ">
                  Marcio, 19 anos responsável pela parte Front-End.
                </p>
              </div>
            </div>
          </div>
          <div class="col-sm-12 col-md-6 col-xl-4 text-center">
            <div class="card m-3 border border-primary-subtle rounded-5" style="width: 100%; height: 95%">
              <img src="../images/sobreNos/5.png" class="card-img-top p-3 rounded-5" alt="..." />
              <div class="card-body">
                <h4 class="name fs-2">Nátanne</h4>
                <p class="card-text fs-3 ">
                  Nátanne, 19 anos responsável pelo designer do Front-End.
                </p>
              </div>
            </div>
          </div>
          <div class="col-sm-12 col-md-6 col-xl-4 text-center">
            <div class="card m-3 border border-primary-subtle rounded-5" style="width: 100%; height: 95%">
              <img src="../images/sobreNos/6.png" class="card-img-top p-3 rounded-5" alt="..." />
              <div class="card-body">
                <h4 class="name fs-2">João</h4>
                <p class="card-text fs-3 ">
                  João, 17 anos responsável pela parte Front-End.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- FIM CARD -->

      <!-- MISSAO VISAO VALOR -->
      <div class="row py-5 col-12">
        <div class="col-sm-12 col-md-4 col-xl-4 text-center">
          <h2 class="name fs-2">Missão</h2>
          <p class="fs-3 ">
            Encontrar pessoas qualificadas ou que querem aprender a cuidar e
            ter um ambiente onde os animais se sintam em casa, desfrutando de
            momentos apreciados e garantindo tranquilidade aos seus donos
          </p>
        </div>
        <div class="col-sm-12 col-md-4 col-xl-4 text-center">
          <h2 class="name fs-2">Visão</h2>
          <p class="fs-3 ">Trazer confiança aos donos de pet</p>
        </div>
        <div class="col-sm-12 col-md-4 col-xl-4">
          <h2 class="name fs-2 text-center">Valor</h2>

          <ul class="fs-3 ">
            <li><p>Inovação</p></li>
            <li><p>O cliente no controle</p></li>
            <li><p>Ética</p></li>
            <li><p>Transparência</p></li>
          </ul>
        </div>
      </div>
      <!-- FIM MISSAO VISAO VALOR -->
    </div>
  </main>

  <!-- FIM CORPO -->

  <!-- FOOTER -->

  <footer class="text-center text-lg-start text-black" style="background-color: #f4f4f4">
    <!-- Grid container -->
    <div class="container p-1 pb-1 rounded">
      <h4 class="text-uppercase text-center mt-3 mb-5">
        Entre em contato conosco
      </h4>

      <section class="">
        <!--Grid row-->
        <div class="row">
          <!--Grid column-->
          <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-12 mb-4 mt-1">
            <p class="text-center">Nos deixe uma mensagem:</p>
            <img src="./imagens/grupo-dog.png" class="img-fluid" />
          </div>
          <!--Grid column-->

          <!--Grid column-->
          <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-12">
            <input type="text" class="form-control rounded-pill m-2" placeholder="E-mail" />
            <input type="text" class="form-control rounded-pill m-2" placeholder="Assunto" />
            <input type="text" class="form-control rounded m-2 pb-5" placeholder="Sua mensagem..." />
            <button type="submit" class="btn rounded-pill botaotelalogin ms-2" style="background-color: #35D1ED !important">
              Enviar
            </button>
          </div>
          <!--Grid column-->
          <!--Grid column-->
          <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-sm-10 text-center mt-2 ms-auto">
            <p class="">Ligue para (31) 90000-0000</p>
            <p class="">Horarios: 8:00 - 19:00</p>
            <p class="">Endereço: Rua Paineiras-1300</p>
            <p class="">Envie um e-mail:contato@keePet.com</p>
          </div>
          <!--Grid column-->
        </div>
        <!--Grid row-->
      </section>
      <!-- Section: Links -->

      <hr class="mb-4" />

      <!-- Section: Social media -->
      <section class="mb-4 text-center">
        <!-- Facebook -->
        <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><img src="./imagens/facebook.png" /></a>

        <!-- Twitter -->
        <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><img src="./imagens/twitter.png" /></a>

        <!-- Instagram -->
        <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><img src="./imagens/instagram.png" /></a>

        <!-- Linkedin -->
        <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><img src="./imagens/linkedin.png" /></a>

        <!-- Google -->
        <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><img src="./imagens/google.png" /></a>
      </section>
      <!-- Section: Social media -->
    </div>
    <!-- Grid container -->

    <!-- Copyright -->
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">
      Desenvolvido por KeepPet ©2023
    </div>
    <!-- Copyright -->
  </footer>

  <!-- END FOOTER -->

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  <script src="../acessibilidade.js"></script>
</body>

</html>