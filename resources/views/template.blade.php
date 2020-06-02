<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    {!! Html::style('lib/bootstrap/bootstrap.min.css') !!}
    {!! Html::style('css/film.css') !!}

    <title>@yield('titrePage')</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top">
    <div class="container">

        <a class="navbar-brand" href="{{url('/films')}}">Mangaweb</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    </div>
</nav>
<header>
    <h1>@yield('titreItem')</h1>
</header>
@yield('contenu')

<footer class="footer">
    <p>MangaWeb - copyright 3AInfo - 2020</p>
</footer>
<script src="https://unpkg.com/@popperjs/core@2" type="javascript"></script>
{!! Html::script('lib/jquery/jquery-3.5.1.min.js') !!}
{!! Html::script('lib/jquery/jquery-3.5.1.min.js') !!}
{!! Html::script('lib/js/bootstrap.min.js') !!}
{!! Html::script('lib/js/bootstrap.bundle.js') !!}
</body>
</html>
