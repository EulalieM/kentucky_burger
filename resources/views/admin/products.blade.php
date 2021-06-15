@extends('layout.admin')

@section('title')

@endsection

@section('content')

<div class="content">
    <h1>Produits actuellement en BDD</h1>
    @forelse ($products as $product)
        <div>
            {{ $product->id }}
            {{ $product->category }}
            {{ $product->name }}
            {{ $product->description }}
            {{ $product->price }}
            {{ $product->image }}
            {{ $product->stock }}
            <a href="{{ route('shop.products.update', ['id'=> $product->id]) }}">Modifier</a>
            <a href="{{ route('shop.products.delete', ['id'=> $product->id]) }}">Supprimer</a>
        </div>
    @empty
        <p>Aucun produits enregistré.</p>
    @endforelse
    <a href="{{ route('shop.products.create') }}">Créer un nouveau produit</a>
</div>

@endsection