<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kmz.ru - @yield('title')</title>
    <link rel="shortcut icon" href="/img/icons.png" type="image/png">
    <!-- Fonts -->

    <link rel="stylesheet" href="/css/item.css">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/signin.css">
</head>
<body>
@yield('content')
@stack('scripts')
<script src="/js/jquery.min.js"></script>
<script src="/js/bootstrap.min.js"></script>


</body>
</html>
