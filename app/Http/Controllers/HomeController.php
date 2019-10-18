<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('pages.home');
    }

    public function product()
    {
        return view('pages.product');
    }

    public function cart()
    {
        return view('pages.cart');
    }

    public function order(Request $request)
    {
        return view('pages.order');

    }

    public function about()
    {
        return view('pages.about');

    }

    public function payment()
    {
        return view('pages.payment');

    }
}
