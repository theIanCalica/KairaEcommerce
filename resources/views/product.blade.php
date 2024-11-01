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
                                <span class="checkmark">&#10004;</span>
                            </label>
                        </div>
                    @endforeach
                </div>

                <!-- Quantity Selection -->
                <h6>Quantity:</h6>
                <div class="mb-3">
                    <input type="range" id="quantity-slider" name="quantity" min="1" max="10" value="1"
                        class="form-range">
                    <input type="number" id="quantity-input" name="quantity" value="1" min="1" max="10"
                        class="form-control w-25" style="display:inline-block;">
                </div>

                @auth
                    <form action="{{ route('cart.add', $product->id) }}" method="POST">
                        @csrf
                        <input type="hidden" id="quantity-hidden" name="quantity" value="1">
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
            const quantitySlider = document.getElementById('quantity-slider');
            const quantityInput = document.getElementById('quantity-input');
            const quantityHidden = document.getElementById('quantity-hidden');

            // Handle size button click
            sizeButtons.forEach(button => {
                button.addEventListener('click', function() {
                    sizeButtons.forEach(btn => btn.classList.remove('active'));
                    this.classList.add('active');
                });
            });

            // Handle color radio change
            colorRadios.forEach(radio => {
                radio.addEventListener('change', function() {
                    colorRadios.forEach(r => {
                        const label = document.querySelector(`label[for="${r.id}"]`);
                        label.style.borderColor = 'transparent';
                    });
                    const label = document.querySelector(`label[for="${this.id}"]`);
                    label.style.borderColor = '#007bff';
                });
            });

            // Sync quantity slider with input box
            quantitySlider.addEventListener('input', function() {
                quantityInput.value = this.value;
                quantityHidden.value = this.value;
            });

            quantityInput.addEventListener('input', function() {
                quantitySlider.value = this.value;
                quantityHidden.value = this.value;
            });
        });
    </script>
@endsection
