<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;

class PageController extends Controller
{
    private $categorys;
    private $manufacturer;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->categorys = Category::all();
        $this->manufacturer = Product::distinct()->get(['manufacturer']);
    }

    /**
     * Show the application dashboard
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        return view('pages.home', ['categorys'=> $this->categorys]);

    }

    public function product()
    {
        return view('pages.product', ['categorys'=> $this->categorys]);
    }

    public function cart()
    {
        return view('pages.cart', ['categorys'=> $this->categorys]);
    }

    public function order(Request $request)
    {
        return view('pages.order', ['categorys'=> $this->categorys]);

    }

    public function about()
    {
        return view('pages.about', ['categorys'=> $this->categorys]);

    }

    public function payment()
    {
        return view('pages.payment', ['categorys'=> $this->categorys]);

    }

    public function contact()
    {
        return view('pages.contact', ['categorys'=> $this->categorys]);

    }
}
