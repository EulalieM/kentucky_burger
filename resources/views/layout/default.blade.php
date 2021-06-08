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
        <div>
            <div class="header-desktop">
                <a id="logo" href=""><img src="images/logo.png" alt="kentuckyburger" height="61px"></a>
                <nav>
                    <ul class="header-nav">
                        <li><a href="{{ route('home') }}" class="uppercase">Présentation</a></li>
                        <li><a href="{{ route('home') }}" class="uppercase">Coordonnées</a></li>
                        <li><a href="{{ route('home') }}" class="uppercase">Contact</a></li>
                        <li><a href="{{ route('products') }}" class="uppercase">Nos produits</a></li>
                    </ul>
                </nav>
                <a href="{{ route('order') }}" class="commande">Ma commande</a>
                <a href="{{ route('login') }}" class="connexion">Connexion</a>
            </div>
                <div id="menu-hamburger">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
        </header>

        <main>
            @yield('content')
        </main>

        <footer>
            <div class="footer">
                <div class="liens">
                    <a href="">Plan du site</a>
                    <a href="">Mentions légales</a>
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
