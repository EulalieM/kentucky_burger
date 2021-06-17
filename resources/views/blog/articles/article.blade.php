@extends('layout.default')

@section('title')
    Article
@endsection

@section('content')

    <h1>Article</h1>

    <div>
        <span>Nom : {{ $article->name }}</span>
        <span>image : <img src="{{ $article->image }}" alt="{{ $article->name }}" class="picture"></span>
        <span>Contenu : {{ $article->content }}</span>
    </div>

    @forelse ( $article->comments as $comment)
        <div class="comment">
            <span>{{ $comment->content }}</span>
            {{-- Seules les user connectés et les admin pourront voir les boutons suppr et modifier --}}
            <a href="{{ route('articles.comment.edit', ['id'=> $comment->id]) }}">Modifier</a>
            <a href="{{ route('articles.comment.delete', ['id'=> $comment->id]) }}">Supprimer</a>
            <a href="#">Répondre</a>
        </div>
    @empty
        <div>Soyez le premier à commenter !</div>
    @endforelse

    <form action="{{ route('articles.comments.store', ['id' => $article->id]) }}" method="post">
        @csrf
        <input type="hidden" name="article" value="{{ $article->id }}">
        <input type="hidden" name="parent" value="0">
        <label for="comment">Ajouter un commentaire</label>
        <textarea name="comment" id="comment" cols="30" rows="10"></textarea>
        <input type="submit" value="Poster le commentaire">
    </form>

@endsection
