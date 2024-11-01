@extends('Layout.app')

@section('content')
    <div class="container">

        <!-- Hero Section -->
        <div class="d-flex flex-column mt-5 justify-content-center align-items-center text-center">
            <h1>New Collections</h1>
            <p class="my-3" style="max-width: 800px">
                Discover our latest t-shirt collection, where comfort meets style. From bold designs to subtle statements,
                find the perfect piece to match your vibe. Dive into our fresh arrivals and redefine your wardrobe!
            </p>
        </div>

        <!-- First Carousel (Product Collections) -->
        <div id="collectionCarousel" class="carousel slide mt-5" data-bs-ride="carousel">
            <div class="carousel-inner">
                @foreach ($products->chunk(4) as $index => $productChunk)
                    <div class="carousel-item {{ $index === 0 ? 'active' : '' }}">
                        <div class="d-flex flex-wrap justify-content-center">
                            @foreach ($productChunk as $product)
                                <div class="card m-3" style="width: 18rem;">
                                    <img src="{{ asset($product->filepath) }}" class="card-img-top"
                                        alt="{{ $product->title }}">
                                    <div class="card-body text-center">
                                        <h5 class="card-title">{{ $product->title }}</h5>
                                        <p class="card-text">{{ $product->description }}</p>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                @endforeach
            </div>

            <!-- Carousel Controls -->
            <button class="carousel-control-prev" type="button" data-bs-target="#collectionCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#collectionCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>

        <!-- Info Section with Icons -->
        <div class="container my-5">
            <div class="row text-center g-4">
                <div class="col-12 col-md-3">
                    <i class="bi bi-calendar3" style="font-size: 2rem; color: gray;"></i>
                    <h5 class="mt-3">Book An Appointment</h5>
                    <p>At imperdiet dui accumsan sit amet nulla risus est ultricies quis.</p>
                </div>
                <div class="col-12 col-md-3">
                    <i class="bi bi-bag" style="font-size: 2rem; color: gray;"></i>
                    <h5 class="mt-3">Pick Up In Store</h5>
                    <p>At imperdiet dui accumsan sit amet nulla risus est ultricies quis.</p>
                </div>
                <div class="col-12 col-md-3">
                    <i class="bi bi-gift" style="font-size: 2rem; color: gray;"></i>
                    <h5 class="mt-3">Special Packaging</h5>
                    <p>At imperdiet dui accumsan sit amet nulla risus est ultricies quis.</p>
                </div>
                <div class="col-12 col-md-3">
                    <i class="bi bi-arrow-repeat" style="font-size: 2rem; color: gray;"></i>
                    <h5 class="mt-3">Free Global Returns</h5>
                    <p>At imperdiet dui accumsan sit amet nulla risus est ultricies quis.</p>
                </div>
            </div>
        </div>

        <!-- New Arrivals Section -->
        <div class="container mt-5">
            <div class="d-flex justify-content-between align-items-center mb-3">
                <h2>Our New Arrivals</h2>
                <a href="#" class="text-decoration-none">View All Products</a>
            </div>

            <!-- New Arrivals Carousel -->
            <div id="newArrivalsCarousel" class="carousel slide mt-4" data-bs-ride="carousel">
                <div class="carousel-inner">
                    @foreach ($products->chunk(4) as $index => $productChunk)
                        <div class="carousel-item {{ $index === 0 ? 'active' : '' }}">
                            <div class="d-flex justify-content-center">
                                @foreach ($productChunk as $product)
                                    <div class="card m-2" style="width: 18rem;">
                                        <img src="{{ asset($product->filepath) }}" class="card-img-top"
                                            alt="{{ $product->title }}">
                                        <div class="card-body text-center">
                                            <h5 class="card-title">{{ $product->title }}</h5>
                                            <p class="card-text">${{ number_format($product->price, 2) }}</p>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    @endforeach
                </div>

                <!-- Carousel Controls -->
                <button class="carousel-control-prev" type="button" data-bs-target="#newArrivalsCarousel"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#newArrivalsCarousel"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>

        <!-- Classic Winter Collection Section -->
        <div class="container mt-5">
            <div class="row align-items-center">
                <!-- Image Section -->
                <div class="col-md-6">
                    <img src="https://themewagon.github.io/kaira/images/single-image-2.jpg" alt="Classic Winter Collection"
                        class="img-fluid">
                </div>

                <!-- Text Section -->
                <div class="col-md-6">
                    <h2 class="display-4">Classic Winter Collection</h2>
                    <p>
                        Embrace the warmth and style of our Classic Winter Collection. Each piece is crafted to provide
                        comfort in colder months while keeping you fashion-forward. From cozy sweaters to elegant outerwear,
                        explore timeless designs that blend quality with sophistication.
                    </p>
                    <button class="btn btn-dark">Shop Collection</button>
                </div>
            </div>
        </div>

    </div>
@endsection
