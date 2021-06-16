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
    {{-- @foreach ( as )

    @endforeach --}}

    <form action="" method="">
        <label for="comment">Ajouter un commentaire</label>
        <textarea name="comment" id="comment" cols="30" rows="10"></textarea>
        <input type="submit" value="Poster le commentaire">
    </form>


@endsection
