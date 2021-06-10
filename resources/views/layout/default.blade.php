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

        <header>
            <div class="header-content">
                <a href="{{ route('pages.index') }}"><img src="https://via.placeholder.com/130x70" alt="Logo Kentucky Burger" height="61px"></a>
                <nav>
                    <ul class="header-nav">
                        <li>
                            <a href="{{ route('shop.index') }}">Nos produits</a>
                            <ul>
                                <li><a href="{{ route('shop.index') }}#nos-burgers">Nos burgers</a></li>
                                <li><a href="{{ route('shop.index') }}#nos-boissons">Nos boissons</a></li>
                                <li><a href="{{ route('shop.index') }}#nos-desserts">Nos desserts</a></li>
                            </ul>
                        </li>
                        <li><a href="{{ route('pages.contact') }}">Contact</a></li>
                        <li><a href="{{ route('admin.index') }}">Administrateur</a></li>
                    </ul>
                </nav>
            </div>
        </header>

        <main>
            @yield('content')
        </main>

        <footer>
            <div class="footer-content">
                <div class="liens">
                    <a href="{{ route('pages.sitemap') }}">Plan du site</a>
                    <a href="{{ route('pages.legal_notice') }}">Mentions légales</a>
                </div>
                <div>
                    <p class="titre-footer">KENTUCKY BURGER</p>
                </div>
                <div class="resaux">
                    <p id="txtreseaux">Suivez-nous !</p>
                    <div id="logos">
                        <a href="https://www.facebook.com/kentucky.burger.58"><img src="images/facebook.svg" alt="" class="icon"></a>
                        <a href="https://www.instagram.com/kentuckyburger/"><img src="images/instagram.svg" alt="" class="icon"></a>
                    </div>
                </div>
            </div>
        </footer>

    </body>

</html>
