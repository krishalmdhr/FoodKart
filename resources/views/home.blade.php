@extends('layouts.app')

@section('content')

{{-- <ul class="navbar-nav ml-auto">

    <li class="nav-item">
        <a class="nav-link" href="{{ route('cart.index') }}">
            Cart
            <div class="badge-danger" style="width: 30px;">
                {{\Cart::session(auth()->id())->getContent()->count()}}
            </div>

        </a>
    </li>
</ul> --}}

<div class="container text-center">
    <h2>Products</h2>

    <div class="row">

        @foreach ($allProducts as $product)

        <div class="col-4">
            <div class="card">
                <img class="card-img-top" src="{{asset('product.jpg')}}" alt="Card image cap">
                    <div class="card-body">
                    <h4 class="card-title">{{$product->name}}</h4>
                    <p class="card-text">{{$product->description}}</p>
                    <h4> Rs. {{$product->price}}</h4>
                    <h4>{{$product->vendor}}</h4>
                    </div>
                    <div class="card-body">
                    <a href="{{route('cart.add',$product->id)}}" class="card-link">Add to Cart</a>
                    </div>
            </div>
        </div>

        @endforeach
    </div>

</div>
@endsection
