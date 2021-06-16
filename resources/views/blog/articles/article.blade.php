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

    <!-- Affichage des commentaires -->
    @forelse ( $article->comments as $comment)
        <div class="comment">
            <p>{{ $comment->content }}</p>
        </div>
    @empty
        <div>Soyez le premier à commenter !!!</div>
    @endforelse 

    @error('comment')
    <div class="error">{{ $message }}</div>
    @enderror

    <form action="{{ route('blog.articles.comments.store') }}" method="POST">
        @csrf
        <input type="hidden" name="article" value="{{ $article->id }}">
        <input type="hidden" name="parent" value="0">
        <label for="comment">Ajouter un commentaire</label>
        <textarea name="comment" id="comment" cols="30" rows="10"></textarea>
        <input type="submit" value="Poster le commentaire">
    </form>


@endsection
