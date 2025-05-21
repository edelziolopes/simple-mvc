<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Carros Industrial</title>
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link href="assets/css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container">
          <!-- Logo à esquerda -->
          <a class="navbar-brand d-flex align-items-center" href="#">
              <img src="assets/img/logo-white.png" height="50px" alt="Logo">
          </a>

          <!-- Botão responsivo -->
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
              <span class="navbar-toggler-icon"></span>
          </button>

          <!-- Itens do menu -->
          <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav ms-auto">
                  <li class="nav-item">
                      <a class="nav-link" href="/"><i class="fa-solid fa-home"></i> Home</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="/produto"><i class="fa-solid fa-box"></i> Produtos</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="/categoria"><i class="fa-solid fa-tags"></i> Categorias</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="/imagem"><i class="fa-solid fa-image"></i> Imagens</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="#"><i class="fa-solid fa-envelope"></i> Contatos</a>
                  </li>
                  <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#" id="adminDropdown" role="button" data-bs-toggle="dropdown">
                          <i class="fa-solid fa-user-gear"></i> Administração
                      </a>
                      <ul class="dropdown-menu">
                          <li><a class="dropdown-item" href="categorias.php"><i class="fa-solid fa-tags"></i> Categorias</a></li>
                          <li><a class="dropdown-item" href="produtos.php"><i class="fa-solid fa-box"></i> Produtos</a></li>
                          <li><a class="dropdown-item" href="imagens.php"><i class="fa-solid fa-image"></i> Imagens</a></li>
                      </ul>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="login.php"><i class="fa-solid fa-sign-in"></i> Login</a>
                  </li>
              </ul>
          </div>
      </div>
  </nav>

  <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
          <div class="carousel-item active">
              <img src="assets/img/banner1.jpg" class="d-block w-100" alt="Banner 1">
          </div>
          <div class="carousel-item">
              <img src="assets/img/banner2.jpeg" class="d-block w-100" alt="Banner 2">
          </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Anterior</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Próximo</span>
      </button>
  </div>

  <div class="container my-3">
    <div class="content">    
      <div class="row">
      <?php
        require '../Application/autoload.php';
        use Application\core\App;
        use Application\core\Controller;
        $app = new App();
      ?>
      </div>
    </div>    
  </div>

  <footer class="footer mt-auto">
    <div class="container">
        <p class="mb-0">&copy; 2024 Minha Loja. Todos os direitos reservados.</p>
        <p class="mb-0">
            <a href="#" class="text-light me-3"><i class="fa-brands fa-facebook"></i></a>
            <a href="#" class="text-light me-3"><i class="fa-brands fa-instagram"></i></a>
            <a href="#" class="text-light"><i class="fa-brands fa-twitter"></i></a>
        </p>
    </div>
  </footer>
  <script src="assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>  

