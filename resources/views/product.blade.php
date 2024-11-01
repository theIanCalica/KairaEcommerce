@extends('Layout.app')

@section('content')
    <div class="container my-4">
        <h1>{{ $product->name }}</h1>

        <div class="row">
            <div class="col-md-6">
                <!-- Display the product image -->
                @if ($product->filepath)
                    <img src="{{ asset($product->filepath) }}" class="img-fluid" alt="{{ $product->name }}">
                @else
                    <img src="{{ asset('images/default-product.jpg') }}" class="img-fluid" alt="Default Image">
                @endif
            </div>

            <div class="col-md-6">
                <p>{{ $product->description }}</p>
                <h5>Price: &#8369;{{ number_format($product->price, 2) }}</h5>

                <!-- Size Selection -->
                <h6>Size:</h6>
                <div class="d-flex flex-wrap mb-3">
                    @foreach ($product->sizes as $size)
                        <button type="button" class="btn btn-outline-primary me-2 mb-2 size-btn"
                            data-size="{{ $size->id }}">
                            {{ $size->name }}
                        </button>
                    @endforeach
                </div>

                <!-- Color Selection -->
                <h6>Color:</h6>
                <div class="d-flex flex-wrap mb-3">
                    @foreach ($uniqueColors as $color)
                        <div class="form-check me-2 mb-2 color-option">
                            <input type="radio" class="form-check-input color-radio" id="color-{{ $color->id }}"
                                name="color" value="{{ $color->id }}" style="display: none;">
                            <label class="color-swatch" for="color-{{ $color->id }}">
                                <span>{{ $color->name }}</span>
                                <!-- Ensure this is the only place where color name appears -->
                                <span class="checkmark">&#10004;</span>
                            </label>
                        </div>
                    @endforeach

                </div>

                @auth
                    <form action="{{ route('cart.add', $product->id) }}" method="POST">
                        @csrf
                        <button type="submit" class="btn btn-primary">Add to Cart</button>
                    </form>
                @endauth
            </div>
        </div>
    </div>

    <style>
        /* Size Buttons */
        .size-btn {
            cursor: pointer;
            transition: background-color 0.3s, color 0.3s, border-color 0.3s;
            border: 2px solid #007bff;
            padding: 10px 15px;
            border-radius: 5px;
        }

        .size-btn.active {
            background-color: #007bff;
            color: white;
        }

        /* Color Swatches */
        .color-swatch {
            display: inline-block;
            position: relative;
            width: 50px;
            height: 50px;
            border-radius: 5px;
            border: 2px solid transparent;
            cursor: pointer;
            text-align: center;
            font-size: 12px;
            padding: 5px;
            transition: border-color 0.3s;
        }

        .color-img {
            width: 100%;
            height: auto;
            border-radius: 3px;
        }

        .checkmark {
            position: absolute;
            bottom: 5px;
            right: 5px;
            font-size: 12px;
            color: #007bff;
            display: none;
        }

        .color-radio:checked+.color-swatch {
            border-color: #007bff;
        }

        .color-radio:checked+.color-swatch .checkmark {
            display: inline;
        }
    </style>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const sizeButtons = document.querySelectorAll('.size-btn');
            const colorRadios = document.querySelectorAll('.color-radio');

            // Handle size button click
            sizeButtons.forEach(button => {
                button.addEventListener('click', function() {
                    // Remove active class from all size buttons
                    sizeButtons.forEach(btn => btn.classList.remove('active'));
                    // Add active class to the clicked button
                    this.classList.add('active');
                });
            });

            // Handle color radio change
            colorRadios.forEach(radio => {
                radio.addEventListener('change', function() {
                    // Reset all color swatch borders and hide checkmarks
                    colorRadios.forEach(r => {
                        const label = document.querySelector(`label[for="${r.id}"]`);
                        label.style.borderColor = 'transparent';
                    });
                    // Show checkmark on selected color swatch
                    const label = document.querySelector(`label[for="${this.id}"]`);
                    label.style.borderColor = '#007bff';
                });
            });
        });
    </script>
@endsection
