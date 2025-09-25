<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderController extends Controller
{
        public function store(Request $request)
    {
        $product = Product::findOrFail($request->product_id);
        $order = Order::create([
            'user_id' => auth()->id(),
            'product_id' => $product->id,
            'quantity' => $request->quantity,
            'total' => $product->price * $request->quantity,
        ]);

        return redirect('/')->with('success', 'Order placed successfully!');
    }

}
