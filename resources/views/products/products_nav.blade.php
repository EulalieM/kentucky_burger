@extends('layout.default')

@section('content')

<div class="products_nav-content">
    <a href="{{ route('products') }}"><img src="/img/burgers.png" alt="Nos burgers"></a>
    <a href="{{ route('products') }}"><img src="/img/boissons.png" alt="Nos boissons"></a>
    <a href="{{ route('products') }}"><img src="/img/desserts.png" alt="Nos desserts"></a>
</div>

@endsection
