@extends('layout.admin')

@section('title')

Administrateur - Supprimer un produit produits

@endsection

@section('content')

<div class="content">
    <form action="{{ route('shop.products.destroy', ['id' => $product->id]) }}" method="post">

        @csrf

        @method('delete')

        <p>Voulez-vous supprimer {{ $product->name }} ?</p>
        <button type="submit">Supprimer</button>
        <a href="{{ route('admin.products') }}">Retour</a>

    </form>
</div>

@endsection
