@extends('layout.default')

@section('title')

Accueil

@endsection

@section('content')

<div class="home-content">
    <section class="accueil">
        <div class="bg-opacity"></div>
        <h1 class="titre uppercase">Kentucky<br>
            Burger</h1>
        <p class="titre-description">Votre restaurant de burger<br>
            à Angoulême</p>
    </section>

    <section class="accueil">
        <p class="titre-description">Sur place, à emporter, en livraison ?<br>
            Choisissez !</p>
        <a href="{{ route('shop.index') }}" class="cta uppercase">Commander maintenant</a>
    </section>
</div>

@endsection
