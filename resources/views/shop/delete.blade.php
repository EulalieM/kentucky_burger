@extends('layout.admin')

@section('title')
    Administrateur - Supprimer un produit
@endsection

@section('content')

    <h1>Supprimer le produit {{ $product->name }}</h1>

    <form action="{{ route('shop.products.destroy', ['id' => $product->id]) }}" method="post">

        @csrf

        @method('delete')

        <p>Voulez-vous supprimer {{ $product->name }} ?</p>
        <button type="submit">Supprimer</button>
        <a href="{{ route('admin.products') }}">Retour</a>

    </form>

@endsection
