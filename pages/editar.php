<?php 

session_start();

?>

<!doctype html>
<html lang="pt-BR">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- link css -->
  <link rel="stylesheet" href="estilo.css">

  <link rel="stylesheet" href="../acessibilidade.css">


  <title>Tela de Login</title>

  <!-- Link Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>


<body class="">

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
                    <a class="dropdown-item" href="./logn.php">Editar Perfil</a>
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
                    <a class="dropdown-item" href="./editar.php">Login</a>
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


      <!-- Botão Acessibilidade -->
      <div class="btn-acessibilidade">
      <button id="acessibilidade"><i class="bi bi-universal-access"></i></button>
    </div>
    <!-- Fim Botão Acessibilidade -->

  <!-- Editar Perfil  -->

  <div class="container" style="margin-top: 7.5rem;">
    <form class="row g-3" method="post" action="../CRUD/Update.php">
      <div class="col-md-6">
        <label for="inputTelefone4" class="form-label">Telefone:</label>
        <input type="text" name="telefoneEditado" class="form-control" id="inputTelefone4">
      </div>
      <div class="col-md-6">
        <label for="inputEmail4" class="form-label">Email:</label>
        <input type="email" name="emailEditado" class="form-control" id="inputEmail4">
      </div>
      <div class="col-md-6">
        <label for="inputSenhaatual4" class="form-label">Senha atual:</label>
        <input type="password" class="form-control" id="inputSenhaatual4">
      </div>
      <div class="col-md-6">
        <label for="inputNovasenha4" class="form-label">Nova Senha:</label>
        <input type="password" name="senhaEditado" class="form-control" id="inputNovasenha4">
      </div>
      <div class="col-md-6">
        <label for="inputCep4" class="form-label">CEP:</label>
        <input type="text" name="cepEditado" class="form-control" id="inputCep4" onblur="pesquisacep(this.value)">
      </div>
      <div class="col-md-6">
        <label for="inputComplemento4" class="form-label">Complemento:</label>
        <input type="email" name="complementoEditado" class="form-control" id="inputComplemento4">
      </div>
      <div class="col-12">
        <label for="inputEndereco4" class="form-label">Endereço:</label>
        <input type="text" name="enderecoEditado" class="form-control enderecos" id="inputEndereco4" placeholder="Av... Rua...">
      </div>
      <div class="col-md-6">
        <label for="inputCidade4" class="form-label">Cidade:</label>
        <input type="text" name="cidadeEditado" class="form-control" id="inputCidade4">
      </div>
      <div class="col-md-6">
        <label for="inputEstado" class="form-label">Estado:</label>
        <select id="inputEstado" name="estadoEditado" class="form-select">
          <option selected>Escolha...</option>
          <option value="MG">Minas Gerais</option>
          <option value="SP">São Paulo</option>
          <option value="RJ">Rio De Janeiro</option>

        </select>
      </div>

      <div class="col-12">
        <button type="submit" class="btn btn-info">Atualizar</button>
      </div>
    </form>

  </div>



  <!-- FIM Editar Perfil  -->

  <!-- FOOTER -->

  <footer class="text-center text-lg-start text-black" style="background-color: #F4F4F4">
    <!-- Grid container -->
    <div class="container  p-1 pb-1 rounded">

      <h4 class="text-uppercase text-center mt-3 mb-5">Entre em contato conosco</h4>

      <section class="">
        <!--Grid row-->
        <div class="row ">
          <!--Grid column-->
          <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-12 mb-4 mt-1 ">

            <p class="text-center">
              Ou nos deixe uma mensagem:
            </p>
            <img src="./imagens/grupo-dog.png" class="img-fluid" />
          </div>
          <!--Grid column-->

          <!--Grid column-->
          <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-12">
            <input type="text" name="Editado" class="form-control rounded-pill m-2" placeholder="E-mail">
            <input type="text" name="Editado" class="form-control rounded-pill m-2" placeholder="Assunto">
            <input type="text" name="Editado" class="form-control rounded m-2 pb-5" placeholder="Sua mensagem...">
            <button type="submit" class="btn rounded-pill botaotelalogin ms-2">
              Enviar</button>
          </div>
          <!--Grid column-->
          <!--Grid column-->
          <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-sm-12 text-center mt-2 ms-5">
            <p class="">Ligue para (31) 90000-0000</p>
            <p class="">Horarios: 8:00 - 19:00</p>
            <p class="">Venha me dar dinheiro:Rua Macaco prego -1300</p>
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
        <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><img src="./imagens/facebook.png" /></i></a>

        <!-- Twitter -->
        <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><img src="./imagens/twitter.png" /></i></a>

        <!-- Instagram -->
        <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><img src="./imagens/instagram.png" /></a>

        <!-- Linkedin -->
        <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><img src="./imagens/linkedin.png" /></i></a>

        <!-- Google -->
        <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><img src="./imagens/google.png" /></i></a>
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

  <!-- Link Java Script -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  <script src="../acessibilidade.js"></script>
  <script src="./CadLogic.js"></script>
</body>

</html>