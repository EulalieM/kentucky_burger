<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="/css/normalize.css">
        <link rel="stylesheet" href="/css/app.css">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
    </head>

    <body>

        <header>
            <div class="header-content">
                <a href="{{ route('home') }}"><img src="https://via.placeholder.com/130x70" alt="Logo Kentucky Burger" height="61px"></a>
                <nav>
                    <ul class="header-nav">
                        <li><a href="{{ route('productsnav') }}">Nos produits</a></li>
                        <li><a href="{{ route('contact') }}">Contact</a></li>
                        <li><a href="{{ route('order') }}">Ma commande</a></li>
                        <li><a href="{{ route('login') }}">Connexion</a></li>
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
                    <a href="{{ route('sitemap') }}">Plan du site</a>
                    <a href="{{ route('legal_notice') }}">Mentions légales</a>
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
