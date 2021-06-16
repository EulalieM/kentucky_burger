@extends('layout.admin')

@section('title')
    Administrateur - Blog
@endsection

@section('content')

    <h1>Catégories et articles</h1>

    {{-- Liste des categories --}}
    @forelse ($categories as $category)
        <div>
            {{$category->name}}
            <a href="{{ route('blog.categories.edit', ['id'=> $category->id]) }}">Modifier</a>
            <a href="{{ route('blog.categories.delete', ['id'=> $category->id]) }}">Supprimer</a>
        </div>
    @empty
        <p>Aucune categorie</p>
    @endforelse
    <a href="{{route('blog.categories.create')}}">Créer une catégorie</a>

    {{-- Liste des articles --}}
    @forelse ($articles as $article)
        <div>
            {{$article->name}}
            <a href="{{ route('blog.article.edit', ['id'=> $article->id]) }}">Modifier</a>
            <a href="{{ route('blog.article.delete', ['id'=> $article->id]) }}">Supprimer</a>
        </div>
    @empty
        <p>Aucun article</p>
    @endforelse
    <a href="{{route('blog.article.create')}}">Créer un article</a>

@endsection
