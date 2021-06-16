@extends('layout.admin')

@section('title')
    Administrateur - Créer une catégorie
@endsection

@section('content')

    <h1>Créer une catégorie d'articles</h1>

    <form action="{{route('blog.categories.store')}}" method="post">

        @csrf
        
        <label for="name">Titre</label>
        <input id="name" type="text" name="name">

        <button type="submit">Créer </button>

    </form>

@endsection
