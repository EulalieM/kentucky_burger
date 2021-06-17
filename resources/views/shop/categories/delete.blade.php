@extends('layout.admin')

@section('title')
    Administrateur - Supprimer une catégorie de produits
@endsection

@section('content')

    <h1>Supprimer une catégorie de produits</h1>

    <p>Êtes vous sûr de vouloir supprimer cette catégorie ?</p>

    <form action="{{ route('shop.products.categories.destroy', ['id' => $category->id]) }}" method="post">

        @csrf

        @method('delete')

        <button type="submit">Supprimer</button>

        <a href="{{ route('admin.products') }}">Retour</a>
    </form>

@endsection
