<!doctype html>
<html lang="ru">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href=" {{ asset('build/assets/bootstrap.min.css') }}">
    <title>Laravel</title>
</head>

<body>
    @yield('content')

    <script src="{{ asset('build/assets/bootstrap.min.js') }}"></script>
</body>

</html>
