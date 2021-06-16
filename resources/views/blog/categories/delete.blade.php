@extends('layout.admin')

@section('title')
    Administrateur - Supprimer une catégorie
@endsection

@section('content')

    <h1>Supprimer une catégorie d'articles</h1>

    <p>Êtes vous sûr de vouloir supprimer cette catégorie ?</p>

    <form action="{{ route('blog.categories.destroy', ['id' => $category->id]) }}" method="post">

        @csrf

        @method('delete')

        <button type="submit">Supprimer</button>

        <a href="{{ route('admin.blog') }}">Retour</a>
    </form>

@endsection
