<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Kentucky Burger - @yield('title')</title>
        <link rel="stylesheet" href="/css/normalize.css">
        <link rel="stylesheet" href="/css/app.css">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
    </head>

    <body>

        <header class="sidebar">
            <nav>
                <ul>
                    <li><a href="{{ route('admin.index') }}">Tableau de bord</a></li>
                    <li><a href="{{ route('admin.products') }}">Gestion des produits</a></li>
                    <li><a href="{{ route('admin.blog') }}">Gestion du blog</a></li>
                    <li><a href="{{ route('pages.index') }}">Retour au site</a></li>
                </ul>
            </nav>
        </header>

        <main class="content">
            @yield('content')
        </main>

    </body>

</html>

