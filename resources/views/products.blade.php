@extends('Layout.app')

@section('content')
    <div class="container my-4">
        <h1>All Products</h1>
        <div class="row">
            @foreach ($products as $product)
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <!-- Display the product image -->
                        @if ($product->filepath)
                            <img src="{{ asset($product->filepath) }}" class="card-img-top" alt="{{ $product->name }}">
                        @else
                            <img src="{{ asset('images/default-product.jpg') }}" class="card-img-top" alt="Default Image">
                        @endif

                        <div class="card-body">
                            <h5 class="card-title">{{ $product->name }}</h5>
                            <p class="card-text">Price: &#8369;{{ number_format($product->price, 2) }}</p>

                            <!-- Replace "Add to Cart" button with "View Product" button -->
                            <a href="{{ route('product', $product->id) }}" class="btn btn-primary">View Product</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
