<?php

namespace App\Http\Controllers;

use App\Models\CartItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = Auth::user();
        $cart = $user->cart->load('cartItems.product');
        return view("cart", compact("cart"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create() {}

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, $id)
    {
        $user = Auth::user();

        // Find or create a cart for the user
        $cart = $user->cart()->firstOrCreate([]);

        // Add product to the cart with quantity
        $cart->cartItems()->updateOrCreate(
            ['product_id' => $id], // Use $id as product_id
            ['quantity' => DB::raw('quantity + ' . ($request->quantity ?? 1))]
        );

        return redirect()->route('cart.index')->with('success', 'Product added to cart successfully.');
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Validate the incoming request
        $request->validate([
            'quantity' => 'required|integer|min:1',
        ]);

        // Find the cart item by ID
        $cartItem = CartItem::findOrFail($id);

        // Update the quantity of the cart item
        $cartItem->quantity = $request->input('quantity');
        $cartItem->save();

        // Redirect back with a success message
        return redirect()->back()->with('success', 'Cart item updated successfully.');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
