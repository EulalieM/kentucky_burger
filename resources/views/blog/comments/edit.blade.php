@extends('layout.default')

@section('title')
    Modifier commentaire
@endsection

@section('content')

    <h1>Modifier commentaire</h1>

    <form action="{{ route('articles.comment.update', ['id' => $comment->id]) }}" method="post">
        
        @csrf

        @method('put')

        @error('comment')
            {{ $messages }}
        @enderror
        <label for="comment">Modifier votre commentaire</label>
        <textarea name="comment" id="comment" cols="30" rows="10">{{ $comment->content }}</textarea>
        <input type="submit" value="Modifier le commentaire">
    </form>

@endsection
