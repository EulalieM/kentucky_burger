@extends('layout.admin')

@section('title')
    Administrateur - Modifier un produits
@endsection

@section('content')

    <h1>Modifier le produit {{ $product->name }}</h1>

    <form action="{{ route('shop.products.update', ['id' => $product->id]) }}" method="post">

        @csrf

        @method('put')

        @error('category')
            <div class="error">{{ $message }}</div>
        @enderror
        <label for="category">Catégorie</label>
        <select name="category" id="category">
            @foreach ($categories as $category)
                <option {{ $category->id == $product->product_category_id ? 'selected':'' }} value="{{ $category->id }}">{{ $category->name }}</option>
            @endforeach
        </select>

        @error('name')
            <div class="error">{{ $message }}</div>
        @enderror
        <label for="name">Nom</label>
        <input type="text" name="name" id="name" value="{{ $product->name }}">

        @error('description')
            <div class="error">{{ $message }}</div>
        @enderror
        <label for="description">Description</label>
        <textarea name="description" cols="30" rows="10" id="description">{{ $product->description }}</textarea>

        @error('price')
            <div class="error">{{ $message }}</div>
        @enderror
        <label for="price">Prix</label>
        <input type="number" name="price" id="price" step="0.01" value="{{ $product->price }}">

        @error('image')
            <div class="error">{{ $message }}</div>
        @enderror
        <label for="image">Image</label>
        <input type="text" name="image" id="image" value="{{ $product->image }}">

        @error('stock')
            <div class="error">{{ $message }}</div>
        @enderror
        <label for="stock">Stock</label>
        <input type="number" name="stock" id="stock" step="1" value="{{ $product->stock }}">

        <input type="submit" value="Modifier le produit">

    </form>

@endsection
