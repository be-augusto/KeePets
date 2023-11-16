<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous" />
  <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
  <link rel="icon" type="image/png" href="../images/Design Sem Nome.png" />
  <link rel="stylesheet" href="../style.css" />
  <title>cadastro - KeePet</title>
</head>

<body class="d-flex align-items-center justify-content-center flex-column">

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
            <a class="nav-link text-white" href="./sobre.php">Sobre nós</a>
          </li>
        </ul>
        <!-- Left links -->
      </div>
      <!-- Collapsible wrapper -->

      <!-- Right elements -->
      <div class="d-flex align-items-end">
        <!-- Avatar -->
        <div class="navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav">
            <li class="nav-item dropdown">
              <a class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                <img src="../images/avatar.png" class="rounded-circle" height="25" alt="perfil vazio" loading="lazy" />
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="./logn.php">Login</a></li>
                <li><a class="dropdown-item" href="#">Cadastra-se</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
      <!-- Right elements -->
    </div>
    <!-- Container wrapper -->
  </nav>
  <!-- Navbar -->

  <div class="container d-flex align-items-center justify-content-center flex-column" style="margin-top: 120px">
    <div class="row col-12 mb-5" id="primeiro">
      <!-- TEXTO -->
      <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 col-xxl-6 text-light d-flex align-items-center justify-content-center flex-column p-3" style="background-color: #1b88cd">
        <h1>BEM VINDO</h1>
        <p>Obrigado por utilizar nossos serviços</p>
        <p>
          Preencha os campos ao lado para ser um usuario de nossa empresa
        </p>
        <p>
          Clique no botão abaixo para se cadastrar como colaborador da
          empresa
        </p>
        <button type="button" class="btn btn-outline-light" id="CUIDADOR">
          CUIDADOR
        </button>
      </div>
      <!-- FIM TEXTO -->

      <!-- FORMULARIO DONO -->
      <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 col-xxl-6 d-flex align-items-center justify-content-center flex-column">
        <form class="col-12 p-2" enctype="multipart/form-data" action="../CRUD/CreateDono.php" method="post" style="background-color: #fff; ">
          <!-- FORMULARIO PESSOA -->

          <!-- EMAIL DONO -->
          <label for="inputEmail4" class="form-label">Email</label>
          <input required type="email" class="form-control" id="inputEmail4" name="emailDONO" />

          <!-- SENHA DONO -->
          <label for="inputPassword4" class="form-label">Senha</label>
          <input required type="password" class="form-control" id="inputPassword4" name="senhaDONO" />

          <!-- NOME DONO -->
          <label class="form-label">Nome Completo</label>
          <input required type="text" class="form-control" aria-label="First name" name="nomeDONO" />

          <!-- CPF DONO -->
          <label class="form-label">CPF</label>
          <input required type="text" class="form-control" name="CPFDONO" />

          <!-- TELEFONE DONO -->
          <label class="form-label">Telefone</label>
          <input required type="text" class="form-control" placeholder="(XX)" name="telefoneDONO" />

          <!-- CEP DONO -->
          <label class="form-label">CEP</label>
          <input required type="text" class="form-control" name="CEPDONO" onblur="pesquisacep(this.value)" />

          <!-- ENDEREÇO DONO -->
          <label for="endereco" class="form-label">Endereço</label>
          <input required type="text" class="form-control enderecos" id="endereco" name="enderecoDONO" />

          <!-- COMPLEMENTO DONO -->
          <label for="inputAddress2" class="form-label">Complemento</label>
          <input type="text" class="form-control" id="inputAddress2" name="complementoDONO" />

          <!-- CIDADE DONO -->
          <label for="inputCity" class="form-label">Cidade</label>
          <input required type="text" class="form-control" id="inputCity" name="cidadeDONO" />

          <!-- ESTADO DONO -->
          <label for="inputState" class="form-label">Estado</label>
          <select id="inputState" class="form-select" name="estadoDONO">
            <option selected disabled>Escolha seu Estado</option>
            <option value="MG">MG</option>
            <option value="SP">SP</option>
            <option value="ES">ES</option>
            <option value="RJ">RJ</option>
          </select>

          <!-- FORMULARIO PET -->

          <!-- NOME ANIMAL DONO -->
          <label class="form-label">Nome do Animal</label>
          <input type="text" class="form-control" required name="nomePET" />

          <!-- RAÇA ANIMAL DONO -->
          <label class="form-label">Raça do Animal:</label>
          <input type="text" class="form-control" required name="racaPET" />

          <!-- PORTE ANIMAL DONO -->
          <label for="inputState" class="form-label">Porte</label>
          <select id="inputState" class="form-select" required name="portePET">
            <option selected disabled required>Porte do Animal</option>
            <option required value="Pequeno">Pequeno porte</option>
            <option required value="Medio">Medio porte</option>
            <option required value="Grande">Grande porte</option>
          </select>

          <!-- QUANTIDADE DE PET DONO -->
          <label class="form-label mt-2">Quantidade de Animais:</label>
          <input type="number" id="" min="1" max="10" class="border mt-2" required name="quantidadePETDONO" />

          <!-- OPÇÃO DE PET DONO -->
          <div class="form-check">
            <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="Cachorro" checked required />
            <label class="form-check-label" for="gridRadios1">
              Cachorro
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="Gato" />
            <label class="form-check-label" for="gridRadios2"> Gato </label>
          </div>

          <!-- Envio de Imagem -->
          <label for="formFile" class="form-label">Envie uma foto</label>
          <input class="form-control" type="file" id="formFile" name="envioDONO">

          <button class="btn btn-primary mt-3 mb-3 w-50" type="submit">
            Enviar!
          </button>
        </form>
      </div>
      <!-- FIM FORMULARIO -->
    </div>
  </div>

  <!-- FINAL PRIMEIRO FORMULARIO -->

  <!-- SEGUNDO FORMULARIO -->

  <div class="container d-flex align-items-center justify-content-center flex-column" style="margin-top: -7,5rem">
    <div class="row col-12 mb-5" id="segundo">
      <!-- FORMULARIO -->
      <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 col-xxl-6 d-flex align-items-center justify-content-center flex-column">
        <!-- FORMULARIO CUIDADOR -->

        <form class="col-12 p-2" method="post" action="../CRUD/CreateCuidador.php" enctype="multipart/form-data">
          <!-- EMAIL CUIDADOR -->
          <label for="inputEmail4" class="form-label">Email</label>
          <input required type="email" class="form-control" id="inputEmail4" name="emailCUIDADOR" />

          <!-- SENHA CUIDADOR -->
          <label for="inputPassword4" class="form-label">Senha</label>
          <input required type="password" class="form-control" id="inputPassword4" name="senhaCUIDADOR" />

          <!-- NOME CUIDADOR -->
          <label class="form-label">Nome Completo</label>
          <input required type="text" class="form-control" aria-label="First name" name="nomeCUIDADOR" />

          <!-- CPF CUIDADOR -->
          <label class="form-label">CPF</label>
          <input required type="text" class="form-control" name="CPFCUIDADOR" />

          <!-- TELEFONE CUIDADOR -->
          <label class="form-label">Telefone</label>
          <input required type="text" class="form-control" placeholder="(XX)" name="telefoneCUIDADOR" />

          <!-- CEP CUIDADOR -->
          <label class="form-label">CEP</label>
          <input required type="text" class="form-control" name="CEPCUIDADOR" onblur="pesquisacep(this.value)" />

          <!-- ENDEREÇO CUIDADOR -->
          <label for="inputAddress" class="form-label">Endereço</label>
          <input required type="text" class="form-control enderecos" id="inputAddress" name="enderecoCUIDADOR" />

          <!-- COMPLEMENTO CUIDADOR -->
          <label for="inputAddress2" class="form-label">Complemento</label>
          <input type="text" class="form-control" id="inputAddress2" name="complementeCUIDADOR" />

          <!-- CIDADE CUIDADOR -->
          <label for="inputCity" class="form-label">Cidade</label>
          <input required type="text" class="form-control" id="inputCity" name="cidadeCUIDADOR" />

          <!-- ESTADO CUIDADOR -->
          <label for="inputState" class="form-label">Estado</label>
          <select id="inputState" class="form-select" name="estadoCUIDADOR">
            <option selected disabled>Escolha seu Estado</option>
            <option value="MG">MG</option>
            <option value="SP">SP</option>
            <option value="ES">ES</option>
            <option value="RJ">RJ</option>
          </select>

          <!-- QUANTIDADE DE ANIMAIS CUIDADOR -->
          <label class="form-label">Quantidade de Animais Suportados:</label>
          <input type="number" id="" min="1" max="5" class="border" name="quantidadeCUIDADOR" />

          <!-- OPÇÃO DE PET DONO -->
          <div class="form-check">
            <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="Cachorro" checked required />
            <label class="form-check-label" for="gridRadios1">
              Cachorro
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="Gato" />
            <label class="form-check-label" for="gridRadios2"> Gato </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="Ambos" />
            <label class="form-check-label" for="gridRadios2"> Ambos </label>
          </div>

          <div class="form-check">
            <label for="formFile" class="form-label">Envie uma foto</label>
            <input class="form-control" type="file" id="formFile" name="envioCUIDADOR">
          </div>

          <button class="btn btn-primary mt-3 mb-3 w-50" type="submit">
            Enviar!
          </button>
        </form>

        <!-- FIM FORMULARIO CUIDADOR -->

      </div>
      <!-- FIM FORMULARIO -->

      <!-- TEXTO -->
      <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 col-xxl-6 text-light d-flex align-items-center justify-content-center flex-column p-3" style="background-color: #1b88cd">
        <h1>BEM VINDO</h1>
        <p>Obrigado por utilizar nossos serviços</p>
        <p>
          Preencha os campos ao lado para ser um usuario de nossa empresa
        </p>
        <p>Clique no botão abaixo para se cadastrar como Dono de um PET</p>
        <button type="button" class="btn btn-outline-light" id="DONO">
          DONO
        </button>
      </div>
      <!-- FIM TEXTO -->
    </div>
  </div>

  <!-- FOOTER -->

  <footer class="text-center text-lg-start text-black w-100" style="background-color: #f4f4f4">
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
  <script src="https://code.jquery.com/jquery-3.6.4.js" integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E=" crossorigin="anonymous"></script>
  <script>
    // $("#segundo").hide();
    // $("#CUIDADOR").click(function () {
    //     $("#primeiro").fadeOut();
    //     $("#segundo").fadeIn();
    // });
    // $("#DONO").click(function () {
    //     $("#segundo").fadeOut();
    //     $("#primeiro").fadeIn();
    // });
    $("#segundo").hide();
    $("#CUIDADOR").click(function() {
      $("#primeiro").fadeOut();
      $("#segundo").fadeIn();
    });
    $("#DONO").click(function() {
      $("#segundo").fadeOut();
      $("#primeiro").fadeIn();
    });
  </script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
  <script src="CadLogic.js"></script>
</body>

</html>