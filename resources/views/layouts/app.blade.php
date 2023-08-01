<!-- resources/views/layouts/app.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meu Projeto</title>
    <!-- Inclua aqui os links para os arquivos CSS, como o Bootstrap, caso necessário -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" rel="stylesheet"/>





    <style>


        /* CSS style for sticky footer */
        html, body {
            height: 100%;
        }

        body {
            display: flex;
            flex-direction: column;
        }

        main {
            flex: 1;
        }
    </style>
</head>
<body>
    @include('includes.navbar')
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <!-- Barra de navegação, caso tenha -->
    </nav>
    <main>
        @yield('content') <!-- Aqui será inserido o conteúdo da view específica -->
    </main>

    <!-- Rodapé -->
    @include('includes.footer')

    <script src="{{ asset('js/app.js') }}"></script> <!-- Inclua aqui os links para os arquivos JS, como o Bootstrap e jQuery, caso necessário -->

</body>
</html>
