<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;
use Gloudemans\Shoppingcart\Facades\Cart;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param Service $service
     * @return \Illuminate\Http\Response
     */
    public function store(Service $service)
    {

        Cart::add($service->id, $service->title, 1, 0)
            ->associate('App\Models\Service');

        return response()->json([
            'status' => true,
            'count' => Cart::count(),
            'message' => 'Item add to cart successfully!' 
        ]);

    }
}
