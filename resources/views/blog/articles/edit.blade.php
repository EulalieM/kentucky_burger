@extends('layout.admin')

@section('title')
    Administration - Modifier un article
@endsection

@section('content')

    <h1>Modifier un article</h1>

    <form action="{{ route('blog.article.update', ['id' => $article->id]) }}" method="post">

        @csrf

        @method('put')

        @error('category')
            <div class="error">{{ $message }}</div>
        @enderror
        <select name="category_id" id="category_id">
            @foreach ($categories as $category)
                <option {{ $category->id == $article->category_id ? 'selected':'' }} value="{{ $category->id }}">{{ $category->name }}</option>
            @endforeach
        </select>

        @error('name')
            <div class="error">{{ $message }}</div>
        @enderror
        <label for="name">Titre</label>
        <input id="name" type="text" name="name" value="{{ $article->name }}">

        @error('image')
            <div class="error">{{ $message }}</div>
        @enderror
        <label for="image">Image</label>
        <input id="image" type="text" name="image" placeholder="https://" value="{{ $article->image }}">

        @error('content')
            <div class="error">{{ $message }}</div>
        @enderror
        <label for="content">Contenu</label>
        <textarea id="content" name="content" cols="60" rows="30">{{ $article->content }}</textarea>

        <input type="submit" value="Modifier">

    </form>

@endsection
