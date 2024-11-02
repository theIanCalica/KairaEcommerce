@extends('Layout.app')

@section('content')
    <div class="container mx-auto my-8">
        <h2 class="text-2xl font-bold mb-6">My Orders</h2>

        @if ($orders->isEmpty())
            <p>No orders found.</p>
        @else
            <table class="min-w-full bg-white border border-gray-200">
                <thead>
                    <tr>
                        <th class="py-2 px-4 border-b">Order ID</th>
                        <th class="py-2 px-4 border-b">Total Amount</th>
                        <th class="py-2 px-4 border-b">Status</th>
                        <th class="py-2 px-4 border-b">Date</th>
                        <th class="py-2 px-4 border-b">Products</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($orders as $order)
                        <tr>
                            <td class="py-2 px-4 border-b">{{ $order->id }}</td>
                            <td class="py-2 px-4 border-b">₱{{ number_format($order->total_amount, 2) }}</td>
                            <td class="py-2 px-4 border-b">{{ ucfirst($order->status) }}</td>
                            <td class="py-2 px-4 border-b">{{ $order->created_at->format('Y-m-d') }}</td>
                            <td class="py-2 px-4 border-b">
                                <ul>
                                    @foreach ($order->products as $product)
                                        <li>{{ $product->name }} - {{ $product->pivot->quantity }} x
                                            ₱{{ number_format($product->pivot->price, 2) }}</li>
                                    @endforeach
                                </ul>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif
    </div>
@endsection
