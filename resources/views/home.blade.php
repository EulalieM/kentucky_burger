@extends('layout.default')
@section('content')
<section class="accueil">
    <div class="bg-opacity"></div>
    <h1 class="titre uppercase">Kentucky<br>
        Burger</h1>
    <p class="titre-description">Votre restaurant de burger<br>
        à Angoulême</p>
    <a href="#presentation" class="lien-chevron"><img src="images/chevronAccueil.svg" alt="" class="chevron"></a>
</section>

<section id="presentation" class="center">  
    <h2>KENTUCKY BURGER</h2>
    <p class="sous-titre">Restaurant de burger faits maison</p>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque eleifend ornare nec blandit. Quisque pellentesque lorem amet volutpat tempus. Morbi dignissim diam, quis suscipit elit imperdiet quis. In luctus ligula sed placerat lacinia. Praesent a commodo odio. Pellentesque auctor quis eros eget imperdiet quis. In luctus ligula sed placerat lacinia. Praesent a commodo odio. auctor quis eros eget</p>
</section>

<section id="coordonnees" class="center">
    <h2>Coordonnées</h2>
    <p>Restaurant ouvert du mardi au samedi<br>
    de 12h à 14h et de 19h à 23h</p>
    <p>Retrouvez-nous 3 place du Palet, 16000 Angoulême</p>
    <iframe class="iframe" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2788.9770501412127!2d0.15334871495752053!3d45.65128262896256!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47fe3276f462b2e9%3A0x796e95908b41db5d!2s3%20Place%20du%20Palet%2C%2016000%20Angoul%C3%AAme!5e0!3m2!1sfr!2sfr!4v1585225328633!5m2!1sfr!2sfr" width="600" height="300" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
</section>

<section class="carte">
    <a href="lacarte.php" class="carte-lien">Consulter<br>
        la carte</a>
    <img src="images/laCarte.png" alt="" class="carte">
    <div class="bg-opacity-carte"></div>
</section>

<section id="contact" class="center">

    <h2 id="ptitrecont">Contactez-nous</h2> 
    <p class="txtcont">Par téléphone au <a href="tel:05.05.05.05.05">05 05 05 05 05</a></p>
    <p class="txtcont">Ou directement en remplissant le formulaire ci-dessous<br>
    Merci de bien vouloir compléter tous les champs :</p>

    <form action="" method="">
        <div class="champs">
            <label for="nom">Nom</label>
            <input type="text" id="nom" name="name" required="required" placeholder="Votre nom">
        </div>
        <div class="champs">
            <label for="mail">Email</label>
            <input type="email" id="mail" name="email" required="required" placeholder="Votre email">
        </div>
        <div class="champs">
            <label for="objet">Objet</label>
            <input type="text" id="objet" name="object" placeholder="Votre objet">
        </div>
        <div class="champs">
            <label for="message">Message</label>
            <textarea required="required" id="message" name="msg" placeholder="Votre message" rows="15"></textarea>
        </div>             
        <div>
            <input type="submit" value="Envoyer">
        </div>
    </form>
</section>
@endsection