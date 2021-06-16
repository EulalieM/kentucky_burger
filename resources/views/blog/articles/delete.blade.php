@extends('layout.admin')

@section('title')
    Administration - Supprimer un article
@endsection

@section('content')

    <h1>Supprimer un article</h1>

    <p>Êtes vous sûr de vouloir supprimer cet article ?</p>

    <form action="{{ route('blog.article.destroy', ['id' => $article->id]) }}" method="post">

        @csrf

        @method('delete')

        <button type="submit">Supprimer</button>

        <a href="{{ route('admin.blog') }}">Retour</a>
    </form>

@endsection
