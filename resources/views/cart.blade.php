@extends('Layout.app')

@section('content')
    <div class="container mx-auto my-5">
        <h2 class="text-2xl font-bold mb-6">My Cart</h2>

        @if (session('success'))
            <div class="alert alert-success mb-4">
                {{ session('success') }}
            </div>
        @endif

        <table class="min-w-full bg-white border border-gray-200">
            <thead>
                <tr>
                    <th class="py-2 px-4 border-b">Picture</th>
                    <th class="py-2 px-4 border-b">Product</th>
                    <th class="py-2 px-4 border-b">Price</th>
                    <th class="py-2 px-4 border-b">Quantity</th>
                    <th class="py-2 px-4 border-b">Total</th>
                    <th class="py-2 px-4 border-b">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($cart->cartItems as $item)
                    <tr>
                        <td class="py-2 px-4 border-b">
                            <img src="{{ asset($item->product->filepath) }}" alt="Product Image" class=" object-cover"
                                width="300px" height="300px">
                        </td>
                        <td class="py-2 px-4 border-b">{{ $item->product->name }}</td>
                        <td class="py-2 px-4 border-b">₱{{ number_format($item->product->price, 2) }}</td>
                        <td class="py-2 px-4 border-b">{{ $item->quantity }}</td>
                        <td class="py-2 px-4 border-b">₱{{ number_format($item->product->price * $item->quantity, 2) }}</td>
                        <td class="py-2 px-4 border-b flex space-x-2">
                            <!-- Button to reduce quantity -->
                            <form action="{{ route('cart.update', $item->id) }}" method="POST" class="inline-block">
                                @csrf
                                @method('PATCH')
                                <input type="hidden" name="quantity" value="{{ $item->quantity - 1 }}">
                                <button type="submit"
                                    class="bg-red-500 hover:bg-red-700 text-red-500 font-bold py-1 px-2 rounded">-</button>
                            </form>

                            <!-- Button to increase quantity -->
                            <form action="{{ route('cart.update', $item->id) }}" method="POST" class="inline-block">
                                @csrf
                                @method('PATCH')
                                <input type="hidden" name="quantity" value="{{ $item->quantity + 1 }}">
                                <button type="submit"
                                    class="bg-green-500 hover:bg-green-700 text-blue-500 font-bold py-1 px-2 rounded">+</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
