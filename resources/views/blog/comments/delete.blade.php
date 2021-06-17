@extends('layout.default')

@section('title')
    Supprimer commentaire
@endsection

@section('content')

    <h1>Supprimer commentaire</h1>

    <form action="{{ route('articles.comment.destroy', ['id' => $comment->id]) }}" method="post">

        @csrf

        @method('delete')

        <p>Voulez-vous supprimer votre commentaire ?</p>
        <button type="submit">Supprimer</button>
        <a href="{{ route('blog.article', ['slug'=>Str::slug($comment->article->name), 'id'=>$comment->article->id]) }}">Retour</a>

    </form>

@endsection
