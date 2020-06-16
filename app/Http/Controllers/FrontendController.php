<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;

class FrontendController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $services = Service::where('status', true)->take(3)->get();
        return view('frontend', compact('services'));
    }
}
