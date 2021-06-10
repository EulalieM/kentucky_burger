@extends('layout.default')

@section('content')

<p>La page avec tous les produits avec des ancres</p>

<h2 id="nos-burgers">Nos burgers</h2>

@foreach ($products as $product)
    <div>
        <span>Catégorie : {{ $product->category }}</span>
        <span>Nom : {{ $product->name }}</span>
        <span>Description : {{ $product->description }}</span>
        <span>Prix : {{ $product->price }}</span>
        <span>Image : <img src="{{ $product->image }}" alt="{{ $product->name }}"></span>
    </div>
@endforeach

<h2 id="nos-boissons">Nos boissons</h2>

<h2 id="nos-desserts">Nos desserts</h2>

@endsection
