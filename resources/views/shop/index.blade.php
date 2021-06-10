@extends('layout.default')

@section('title')

Nos produits

@endsection

@section('content')

<h1>Nos produits</h1>

<h2 id="nos-burgers">Nos burgers</h2>

@foreach ($products as $product)
    <div class="products-container">
        <span>Catégorie : {{ $product->category }}</span>
        <span>Nom : {{ $product->name }}</span>
        <span>Description : {{ $product->description }}</span>
        <span>Prix : {{ $product->price }}</span>
        <span>Image : <img src="{{ $product->image }}" alt="{{ $product->name }}" class="picture"></span>
        <button class="cta cta-add uppercase">Commander</button>
    </div>
    <br>
@endforeach

<h2 id="nos-boissons">Nos boissons</h2>

<h2 id="nos-desserts">Nos desserts</h2>

@endsection
