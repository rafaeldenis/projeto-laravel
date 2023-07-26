<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Minha Página Inicial</title>
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
  @include('navbar') <!-- Incluindo a barra de navegação horizontal -->

  <div class="container">
    <!-- Conteúdo da sua página aqui -->
  </div>

  <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
