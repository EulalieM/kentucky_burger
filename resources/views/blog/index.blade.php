@extends('layout.default')

@section('title')
    Blog
@endsection

@section('content')

    <h1>Blog</h1>

    @foreach ($articles as $article)
        <div>
            <span>Nom : {{ $article->name }}</span>
            <span>image : <img src="{{ $article->image }}" alt="{{ $article->name }}" class="picture"></span>
            <a href="{{ route('blog.article', ['slug' => Str::slug($article->name), 'id' => $article->id]) }}">Voir l'article</a>
        </div>
    @endforeach



@endsection
