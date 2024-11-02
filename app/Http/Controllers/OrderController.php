<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function placeOrder()
    {
        $cartItems =  Auth::user()->cart->cartItems;
        if ($cartItems->isEmpty()) {
            return redirect()->back()->with('error', 'Your cart is empty.');
        }

        $totalAmount = $cartItems->sum(fn($item) => $item->product->price * $item->quantity);

        $order = Order::create([
            'user_id' => Auth::user()->id,
            'total_amount' => $totalAmount,
            'status' => 'pending',
        ]);

        foreach ($cartItems as $item) {
            $order->products()->attach($item->product_id, [
                'quantity' => $item->quantity,
                'price' => $item->product->price,
            ]);
        }

        $cartItems->each->delete(); // Clear the cart after placing the order

        return redirect()->back()->with('success', 'Order placed successfully!');
    }

    public function viewAllOrders()
    {
        // Retrieve all orders for the authenticated user
        $orders = Order::where('user_id', Auth::user()->id)->with('products')->get();

        // Pass the orders to the view
        return view('order', compact('orders'));
    }
}
