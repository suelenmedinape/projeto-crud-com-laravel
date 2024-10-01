<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href=" {{ url('/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href=" {{ url('/css/nav.css') }}">
    <link rel="stylesheet" href=" {{ url('/css/style.css') }}">
    <title>Todo App - {{ $title }}</title>
</head>

<body>

    {{ isset($nav) ? $nav : ''}}

    <main class="container-fluid">
        {{ $slot }}
    </main>

</body>

</html>