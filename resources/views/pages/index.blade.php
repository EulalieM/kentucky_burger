@extends('layout.default')

@section('title')
    Accueil
@endsection

@section('content')

    <div class="home-content">

        <div class="bg-opacity"></div>

        <section class="home-container">
            <h1 class="title uppercase">Kentucky<br>
                Burger</h1>
            <p class="text">Votre restaurant de burger<br>
                à Angoulême</p>
        </section>

        <section class="home-container">
            <p class="text">Sur place, à emporter, en livraison ?<br>
                Choisissez !</p>
            <a href="{{ route('shop.index') }}" class="cta uppercase">Commander maintenant</a>
        </section>

    </div>

@endsection
