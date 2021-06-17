@extends('layout.admin')

@section('title')
    Administrateur - Produits
@endsection

@section('content')

    <p>Catégories actuellement en BDD</p>
    {{-- Liste des categories  --}}
    @forelse ($categories as $category)
        <div>
            {{$category->name}}
            <a href="{{ route('shop.products.categories.edit', ['id'=> $category->id]) }}">Modifier</a>
            <a href="{{ route('shop.products.categories.delete', ['id'=> $category->id]) }}">Supprimer</a>
        </div>
    @empty
        <p>Aucune categorie</p>
    @endforelse
    <a href="{{route('test')}}">Créer une catégorie</a>

    <h1>Produits actuellement en BDD</h1>
    {{-- Liste des produits --}}
    @forelse ($products as $product)
        <div>
            {{ $product->id }}
            {{ $product->category }}
            {{ $product->name }}
            {{ $product->description }}
            {{ $product->price }}
            {{ $product->image }}
            {{ $product->stock }}
            <a href="{{ route('shop.products.edit', ['id'=> $product->id]) }}">Modifier</a>
            <a href="{{ route('shop.products.delete', ['id'=> $product->id]) }}">Supprimer</a>
        </div>
    @empty
        <p>Aucun produits enregistré.</p>
    @endforelse
    <a href="{{ route('shop.products.create') }}">Créer un nouveau produit</a>

@endsection
