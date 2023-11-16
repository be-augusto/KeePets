<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous" />

  <link rel="icon" type="image/png" href="./images/Design sem nome.png" class="rounded-circle" />

  <link href="./styleHome.css" rel="stylesheet" />

  <link rel="stylesheet" href="acessibilidade.css">

  <title>Home Page - KeePets</title>
</head>

<body>
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
        <!-- Navbar brand -->
        <img src="./images/logo2.png" alt="logo" style="width: 70px; height: 70px; margin-bottom: 10px" />
        <a class="navbar-brand mt-2 mt-lg-0" style="font-family: 'Varela Round', sans-serif !important;" href="#main-img">
          KeePets
        </a>
        <!-- Left links -->

        <ul class="navbar-nav ps-5 me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link text-white" href="./pages/Services.php">Serviços</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="./pages/sobre.php">Sobre nós</a>
          </li>
          <li class="nav-item">

          </li>
        </ul>
        <div class="d-flex align-items-end">
          <!-- Avatar -->
          <?php

          session_start();

          if (isset($_SESSION['usuario'])){

            $nomeArquivo = "$_SESSION[usuario]"; // Substitua pelo nome do seu arquivo
            $diretorioImagens = "./Uploads/"; // Substitua pelo diretório das suas imagens
            
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
                    <a class="dropdown-item" href="./pages/editar.php">Editar Perfil</a>
                  </li>
                  <li>
                    <a class="dropdown-item" href="./pages/cadastro.php">Deletar Conta</a>
                  </li>
                  <li>
                    <a class="dropdown-item" href="./CRUD/LogOFF.php">Sair</a>
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
                  <img src="./images/avatar.png" class="rounded-circle" height="25" alt="perfil vazio" loading="lazy" />
                </a>
                <ul class="dropdown-menu">
                  <li>
                    <a class="dropdown-item" href="./pages/logn.php">Login</a>
                  </li>
                  <li>
                    <a class="dropdown-item" href="./pages/cadastro.php">Cadastra-se</a>
                  </li>
                </ul>
              </li>
            </ul>
          </div>';
          }

          ?>
        </div>
        <!-- Left links -->
      </div>
    </div>
  </nav>
  <!-- Navbar -->

  
  <!-- Banner Image -->
  
  <img src="./images/Cachorooooo.png" id="main-img" class="img-fluid" />
  
  <!--MAIN-->
  <main>

  <!-- Botão Acessibilidade -->
    <div class="btn-acessibilidade">
      <button id="acessibilidade"><i class="bi bi-universal-access"></i></button>
    </div>
  <!-- Fim Botão Acessibilidade -->


    <div class="sobre-nos p-5">
      <div class="container-fluid">
        <h1 class="text-center fs-1">Seja bem-vindo(a)</h1>
        <div class="container">
          <p style="text-align: center; font-size: 1.75rem;">
            KeePets é uma empresa que faz a ponte entre você e prestadores de
            serviços para seus pets, nossos colaboradores são de alta
            confiabilidade. Dentre nossos serviços, estão de Hospedagem, Tosa
            e Passeio.<br />
            <br />
            Para mais informações clique em "saiba mais" abaixo.
          </p>
          <div class="text-center">
            <button class="btn mt-3">
              <a href="./pages/sobre.php">Saiba mais!</a>
            </button>
          </div>
        </div>
      </div>
    </div>

    <!--SERVIÇOS-->
    <div class="justify-content-center">
      <div class="services align-items-center text-center">
        <h1 class="display-3 text-center mt-5">
          Serviços
        </h1>
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-md-12">
              <h1 class="text-center p-2">Nossos serviços são:</h1>
            </div>
            <div class="col-md-3 bloco">
              <img src="./images/icons/dog-house.png" class="imgs" />
              <h2 class="text-center">Hospedagem</h2>
              <h4 class="text-start p-2">
                Deixe seu pet em uma residencia segura
              </h4>
            </div>
            <div class="col-md-3 bloco">
              <img src="./images/icons/scrissor.png" class="imgs" />
              <h2 class="text-center">Tosa</h2>
              <h4 class="text-start p-2">
                Deixe seu animal com pelo limpo e cortado da sua preferência
              </h4>
            </div>
            <div class="col-md-3 bloco">
              <img src="./images/icons/coleira.png" class="imgs" />
              <h2 class="text-center">Passeio</h2>
              <h4 class="text-start p-2">
                Seu pet irá passear com o dono da residencia em locais seguros
                e tranquilos
              </h4>
            </div>
          </div>
          <div class="text-center">
            <button type="button" class="btn">
              <a href="./pages/Services.php">Começe aqui</a>
            </button>
          </div>
        </div>
      </div>
    </div>
  </main>

  <!-- CARROSEL -->

  <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="./images/carousel/1.png" class="d-block w-100" alt="" />
      </div>
      <div class="carousel-item">
        <img src="./images/carousel/2.png" class="d-block w-100" alt="" />
      </div>
      <div class="carousel-item">
        <img src="./images/carousel/3.png" class="d-block w-100" alt="" />
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>

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
            <img src="./pages/imagens/grupo-dog.png" class="img-fluid" />
          </div>
          <!--Grid column-->

          <!--Grid column-->
          <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-12">
            <form action="./CRUD/formFooter.php" method="post">
              <input type="text" name="emailFooter" class="form-control rounded-pill m-2" placeholder="E-mail" />
              <input type="text" name="assuntoFooter" class="form-control rounded-pill m-2" placeholder="Assunto" />
              <input type="text" name="mensagemFooter" class="form-control rounded m-2 pb-5" placeholder="Sua mensagem..." />
              <button type="submit" class="btn rounded-pill botaotelalogin ms-2" style="background-color: #35D1ED !important">
                Enviar
              </button>
            </form>
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
        <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><img src="./pages/imagens/facebook.png" /></a>

        <!-- Twitter -->
        <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><img src="./pages/imagens/twitter.png" /></a>

        <!-- Instagram -->
        <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><img src="./pages/imagens/instagram.png" /></a>

        <!-- Linkedin -->
        <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><img src="./pages/imagens/linkedin.png" /></a>

        <!-- Google -->
        <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><img src="./pages/imagens/google.png" /></a>
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
  <script src="https://code.jquery.com/jquery-3.6.4.js" integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E=" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
  <script src="acessibilidade.js"></script>
</body>

</html>