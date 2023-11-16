<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <link rel="icon" type="image/png" href="../images/Design Sem Nome.png" />

    <!-- link css -->
    <link rel="stylesheet" href="estilo.css" />

    <title>Tela de Login</title>

    <!-- Link Bootstrap -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ"
      crossorigin="anonymous"
    />
  </head>

  <body class="">
    <!-- Navbar -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark p-md-3">
      <!-- Container wrapper -->
      <div class="container">
        <!-- Toggle button -->
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarNav"
          aria-controls="navbarNav"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
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
              <a class="nav-link text-white" href="./sobre.php"
                >Sobre nós</a
              >
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
                <a
                  class="dropdown-toggle"
                  data-bs-toggle="dropdown"
                  aria-expanded="false"
                >
                  <img
                    src="../images/avatar.png"
                    class="rounded-circle"
                    height="25"
                    alt="perfil vazio"
                    loading="lazy"
                  />
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="./logn.php">Login</a></li>
                  <li>
                    <a class="dropdown-item" href="./cadastro.php"
                      >Cadastra-se</a
                    >
                  </li>
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

    <!-- CORPO -->
    <div>
      <div class="row">
        <!-- Carrossel de imagens - um slider -->
        <div
          id="carouselExampleCaptions"
          class="carousel slide col-xxl-8 col-xl-8 col-lg-12 col-md-12 col-sm-12"
          data-bs-ride="carousel"
        >
          <!-- traços marcadores  -->
          <div class="carousel-indicators">
            <!-- primeiro marcador (ativo por padrão) -->
            <button
              type="button"
              data-bs-target="#carouselExampleCaptions"
              data-bs-slide-to="0"
              class="active"
              aria-current="true"
              aria-label="Slide 1"
            ></button>

            <!-- segundo marcador: link imagem 2 -->
            <button
              type="button"
              data-bs-target="#carouselExampleCaptions"
              data-bs-slide-to="1"
              aria-label="Slide 2"
            ></button>

            <!-- terceiro marcador: link imagem 3 -->
            <button
              type="button"
              data-bs-target="#carouselExampleCaptions"
              data-bs-slide-to="2"
              aria-label="Slide 3"
            ></button>
          </div>

          <!-- Bloco de imagens -->
          <div class="carousel-inner">
            <!-- imagem 1 + legenda -->
            <div class="carousel-item active">
              <!-- imagem 1 -->
              <img src="./imagens/19.png" class="d-block w-100" alt="gato" />

              <!-- legenda -->
              <div class="carousel-caption d-none d-md-block"></div>
            </div>

            <!-- imagem 2 + legenda -->
            <div class="carousel-item">
              <!-- imagem 2 -->
              <img src="./imagens/18.png" class="d-block w-100" alt="cao" />

              <!-- legenda -->
              <div class="carousel-caption d-none d-md-block"></div>
            </div>

            <!-- imagem 3 + legenda -->
            <div class="carousel-item">
              <!-- imagem 3 -->
              <img src="./imagens/20.png" class="d-block w-100" alt="caodois" />

              <!-- legenda -->
              <div class="carousel-caption d-none d-md-block"></div>
            </div>
          </div>
          <!-- /fim bloco de imagens -->

          <!-- Botões de navegação -->
          <button
            class="carousel-control-prev"
            type="button"
            data-bs-target="#carouselExampleCaptions"
            data-bs-slide="prev"
          >
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Anterior</span>
          </button>
          <button
            class="carousel-control-next"
            type="button"
            data-bs-target="#carouselExampleCaptions"
            data-bs-slide="next"
          >
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Proximo</span>
          </button>
        </div>

        <!-- Login  -->
        <div class="col-xxl-4 col-xl-4 col-lg-12 col-md-12 col-sm-12 mt-5">
          <div class="mt-5 mx-5 pt-5 px-4">
            <form class="mt-5" action="../CRUD/Read.php" method="post" enctype="multipart/form-data">
              <div class="form-group">
                <label class="pb-2">Nome do Usuário</label>
                <input
                  type="text"
                  class="form-control rounded-pill"
                  placeholder=" "
                  name="nomeLogin"
                />
              </div>
              <div class="form-group">
                <label class="pt-4 pb-2">Senha</label>
                <input
                  type="password"
                  class="form-control rounded-pill"
                  placeholder=" "
                  name="senhaLogin"
                />
              </div>
              <div class="d-grid gap-2 d-flex justify-content-end mt-4">
                <button
                  type="submit"
                  class="btn botaotelalogin rounded-pill me-2 px-4"
                >
                  Login
                </button>
                <button
                  type="submit"
                  class="btn botaotelalogin rounded-pill px-4 text-white"
                >
                  Cadastrar
                </button>
              </div>
            </form>
          </div>
        </div>
      </div>
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
    <!-- Link Java Script -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
