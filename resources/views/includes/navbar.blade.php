
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Barra de Navegação Horizontal</title>
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="#"><img src="{{ asset('images/logo5.png') }}" alt="Logo" width="100" height="80"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Sobre</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('clientes.cadastro') }}">Cadastro Clientes</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="{{ route('cliente.index') }}">Listar Cliente</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('minhas_senhas.create') }}">Cadastro Senhas</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="{{ route('minhas_senhas.index') }}">Listar Senhas</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/visualizar-pdf">Curriculo em Pdf</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>


</body>
</html>
