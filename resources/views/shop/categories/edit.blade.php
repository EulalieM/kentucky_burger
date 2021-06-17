@extends('layout.admin')

@section('title')
    Administrateur - Modifier une catégorie de produits
@endsection

@section('content')

    <h1>Modifier une catégorie de produits</h1>

    <form action="{{ route('shop.products.categories.update', ['id' => $category->id]) }}" method="post">

        @csrf

        @method('put')

        <label for="name">Nom :</label>
        <input type="text" id="name" name="name" value="{{ $category->name }}">

        <input type="submit" value="Modifier">

    </form>

@endsection
