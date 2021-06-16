@extends('layout.admin')

@section('title')
    Administration - Créer un article
@endsection

@section('content')

    <h1>Créer un article</h1>

    <form action="{{route('blog.article.store')}}" method="post">

        @csrf

        <select name="category" id="category">
            @foreach ($categories as $category)
                <option value="{{$category->id}}">{{$category->name}}</option>
            @endforeach
        </select>

        <label for="name">Titre</label>
        <input id="name" type="text" name="name">

        <label for="image">Image</label>
        <input id="image" type="text" name="image" placeholder="https://">

        <label for="content">Contenu</label>
        <textarea id="content" name="content" cols="60" rows="30"></textarea>

        <button type="submit">Créer</button>

    </form>

@endsection
