<html>
<head>
    <title>
        @yield('titulo')
    </title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
@include('partials.nav')
@yield('contenido')
<footer class="card-footer text-body-secondary fixed-bottom m-5 fs-5 z-1">Adrián Primo Bernat</footer>
</body>
</html>
