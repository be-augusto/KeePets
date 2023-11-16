<?php 

header('Access-Control-Allow-Origin: *');

session_start();

include_once '../CRUD/conexao.php';

if (isset($_SESSION['usuario'])){

  $sql = "SELECT CEP FROM dono WHERE nome = '$_SESSION[usuario]'";
  
  $result = $conn->query($sql);
  
  $cepUsuario = $result->fetch_assoc();

}



?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />

  <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous" />
  <link rel="icon" type="image/png" href="../images/Design%20Sem%20Nome.png" />
  <link rel="stylesheet" href="../style.css" />

  <link rel="stylesheet" href="./Estilo-Mapa.css" />

  <link rel="stylesheet" href="../acessibilidade.css">

  <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />


  <!-- Leaflet CSS -->
  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.3/dist/leaflet.css" integrity="sha256-kLaT2GOSpHechhsozzB+flnD+zUyjE2LlfWPgU04xyI=" crossorigin="" />

  <!-- Leaflet JS -->
  <script src="https://unpkg.com/leaflet@1.9.3/dist/leaflet.js" integrity="sha256-WBkoXOwTeyKclOHuWtc+i2uENFpDZ9YPdf5Hf+D7ewM=" crossorigin=""></script>

  <!-- Geocoding -->
  <link rel="stylesheet" href="https://unpkg.com/leaflet-control-geocoder/dist/Control.Geocoder.css" />
  <script src="https://unpkg.com/leaflet-control-geocoder/dist/Control.Geocoder.js"></script>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

  <title>Serviços - KeePets</title>
</head>

<body>

  <!-- Navbar -->
  <nav class="navbar fixed-top navbar-expand-lg navbar-dark p-md-3">
    <!-- Container wrapper -->
    <div class="container">
      <!-- Toggle button -->
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <p class="navbar-toggler-icon"></p>
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
            <a class="nav-link text-white" href="./sobre.php">Sobre nós</a>
          </li>
        </ul>
        <!-- Left links -->
      </div>
      <!-- Collapsible wrapper -->

      <!-- Right elements -->
      <div class="d-flex align-items-end">
        <!-- Avatar -->
        <?php


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
                  <img src="' . $imagem . '" class="rounded-circle" height="50" alt="Seu Perfil" loading="lazy" />
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

  <!--Conteudo-->
  <main>

    <!-- Botão Acessibilidade -->
    <div class="btn-acessibilidade">
      <button id="acessibilidade"><i class="bi bi-universal-access"></i></button>
    </div>
    <!-- Fim Botão Acessibilidade -->

    <div class="container pb-5">
      <div class="tela">
        <h2>Encontre cuidadores</h2>
        <h3>Selecione o serviço, pet e informe o endereço desejado!</h3>
        <!-- Botões de serviço -->
        <div class="botoes justify-content-center text-center p-5">
          <div class="col-sm-12 col-md-8 services-box p-4">
            <h3>Tipo do serviço</h3>
            <button type="button" class="btn">
              <img src="../images/icons/dog-house.png" class="icons" alt="hospedagem" />
              <div class="cor">
                <span>Hospedagem</span>
              </div>
            </button>
            <button type="button" class="btn">
              <img src="../images/icons/scrissor.png" class="icons" alt="tosar" />
              <div class="cor">
                <span>Tosar</span>
              </div>
            </button>
            <button type="button" class="btn">
              <img src="../images/icons/coleira.png" class="icons" alt="passear" />
              <div class="cor">
                <span>Passear</span>
              </div>
            </button>

          </div>

          <div class="col-sm-12 col-md-8 services-box p-4 pets">
            <h3>Pets</h3>
            <button type="button" id="Cachorro" class="btn">
              <img src="../images/icons/dog.png" class="icons" alt="cachorro" />
              <div class="cor">
                <span>Cachorro</span>
              </div>
            </button>
            <button type="button" id="Gato" class="btn">
              <img src="../images/icons/cat.png" class="icons" alt="gato" />
              <div class="cor">
                <span>Gato</span>
              </div>
            </button>
            <button type="button" id="Ambos" class="btn">
              <img src="../images/icons/both.png" class="icons" alt="ambos" />
              <div class="cor">
                <span>Ambos</span>
              </div>
            </button>
          </div>
        </div>
      </div>
      <!-- Mapa  -->

      <div id="map" ></div>

      <!-- Fim do Mapa -->

    </div>
  </main>

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

  <script type="text/javascript">
    var cepUsuario = '<?php echo $cepUsuario['CEP'] ?>';
    var imgUsuario = '<?php echo $imagem ?>';
    var nomeUsuario = '<?php echo $_SESSION['usuario'] ?>';
    
    
  </script>

  <!-- END FOOTER -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.6.4.js" integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E=" crossorigin="anonymous"></script>
  <script src="./MapLogic.js"></script>
  <script src="../acessibilidade.js"></script>
</body>

</html>