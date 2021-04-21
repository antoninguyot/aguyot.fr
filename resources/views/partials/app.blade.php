<!DOCTYPE html>
<html lang="{{ app('translator')->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <title>Antonin Guyot</title>
    <link rel="stylesheet" href="{{ url('css/app.css') }}">
    <meta>
</head>
<body>
@yield('body')
<footer>
    {{ __("Le code de ce site est disponible sur") }}
    <a href="https://github.com/anto2oo/aguyot.fr" target="_blank" rel="noreferrer">Github</a>
</footer>
</body>
</html>
