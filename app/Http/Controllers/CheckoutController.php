<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;
use App\Models\Order;
use App\Http\Requests\StoreOrderRequest;

class CheckoutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('checkout');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  StoreOrderRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreOrderRequest $request)
    {
        // Insert into orders table
        $order = Order::create([
            'user_id' => auth()->user() ? auth()->user()->id : null,
            'session_id' => auth()->user() ? null : session()->getId(),
            'is_guest' => auth()->user() ? true : false,
            'customer_email' => $request->email,
            'customer_name' => $request->name,
            'phone' => $request->phone
        ]);

        // Insert into order_product table
        foreach (Cart::content() as $item) {
            $order->services()->attach([$item->model->id]);
        }

        Cart::instance('default')->destroy();

        return redirect()->route('frontend.index')->with('success_message', 'Thank you! Your payment has been successfully accepted!');
    }
}
