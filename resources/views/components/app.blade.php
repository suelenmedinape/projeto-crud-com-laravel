<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href=" {{ url('/css/bootstrap.min.css') }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todo App - @yield('page')</title>
</head>

<body>

    <header class="container-fluid">
        <nav>
            <a href="/"> Home </a>
            <a href="/cadastro"> Cadastro </a>
            <a href="/lista"> Lista </a>
            </ul>
        </nav>
    </header>



    <main class="container-fluid">
        @yield('content')
    </main>

    <script src=" {{ url('/js/bootstrap.bundle.min.js') }}"></script>

</body>

</html>