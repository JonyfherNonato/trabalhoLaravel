<!DOCTYPE html>
<html>
<head>
    <title>Minha Aplicação</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Menu</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="usuarios.index">Listar Usuarios</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.blade">Listar Produtos</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="alterar.blade.php">Alterar Usuarios</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="alterarProduto.php">Alterar Produtos</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="cadastro.blade.php">Cadastro Usuarios</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="cadastroProduto.blade.php">Cadastro Produtos</a>
      </li>
    </ul>
  </div>
</nav>
    <div class="container">
        @yield('conteudo')
        @yield('cadastro')
        @yield('alterar')
        @yield('cadastroProduto')
        @yield('produtos')
        @yield('editar')
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>
</html>
