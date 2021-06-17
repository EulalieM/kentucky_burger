@extends('layout.admin')

@section('title')
    Administrateur - Créer une catégorie de produits
@endsection

@section('content')

    <h1>Créer une catégorie de produits</h1>

    <form action="" method="post">

        @csrf

        <label for="name">Titre</label>
        <input id="name" type="text" name="name">

        <button type="submit">Créer </button>

    </form>

@endsection
