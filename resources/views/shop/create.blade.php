@extends('layout.admin')

@section('title')

Administrateur - Gestion des produits

@endsection

@section('content')

<div class="content">

    <h1>Ajouter un produit en BDD</h1>

    <form action="{{ route('shop.products.store') }}" method="post">

        @csrf

        @error('category')
            <div class="error">{{ $message }}</div>
        @enderror
        <label for="category">Catégorie</label>
        <select name="category" id="category">
            <option value="Burgers">Burgers</option>
            <option value="Boissons">Boissons</option>
            <option value="Desserts">Desserts</option>
        </select>

        @error('name')
            <div class="error">{{ $message }}</div>
        @enderror
        <label for="name">Nom</label>
        <input type="text" name="name" id="name">

        @error('description')
            <div class="error">{{ $message }}</div>
        @enderror
        <label for="description">Description</label>
        <textarea name="description" cols="30" rows="10" id="description"></textarea>

        @error('price')
            <div class="error">{{ $message }}</div>
        @enderror
        <label for="price">Prix</label>
        <input type="number" name="price" id="price" step="0.01">

        @error('image')
            <div class="error">{{ $message }}</div>
        @enderror
        <label for="image">Image</label>
        <input type="text" name="image" id="image">

        @error('stock')
            <div class="error">{{ $message }}</div>
        @enderror
        <label for="stock">Stock</label>
        <input type="number" name="stock" id="stock" step="1">

        <input type="submit" value="Ajouter le produit">
    </form>
</div>

@endsection
