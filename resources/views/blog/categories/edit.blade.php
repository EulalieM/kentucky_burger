@extends('layout.admin')

@section('title')
    Administrateur - Modifier une catégorie
@endsection

@section('content')

    <h1>Modifier une catégorie d'articles</h1>

    <form action="{{ route('blog.categories.update', ['id' => $category->id]) }}" method="post">

        @csrf

        @method('put')

        <label for="name">Nom :</label>
        <input type="text" id="name" name="name" value="{{ $category->name }}">

        <input type="submit" value="Modifier">

    </form>

@endsection
