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

        $products = Product::where('sale', '>', 0)->take(6)->get();


        return view('pages.home', ['categorys' => $this->categorys,
            'manufacturer' => $this->manufacturer,
            'products' => $products
            ]);

    }

    public function product()
    {
        return view('pages.product', ['categorys' => $this->categorys, 'manufacturer' => $this->manufacturer]);
    }

    public function cart()
    {
        return view('pages.cart', ['categorys' => $this->categorys, 'manufacturer' => $this->manufacturer]);
    }

    public function order(Request $request)
    {
        return view('pages.order', ['categorys' => $this->categorys, 'manufacturer' => $this->manufacturer]);

    }

    public function about()
    {
        return view('pages.about', ['categorys' => $this->categorys, 'manufacturer' => $this->manufacturer]);

    }

    public function payment()
    {
        return view('pages.payment', ['categorys' => $this->categorys, 'manufacturer' => $this->manufacturer]);

    }

    public function contact()
    {
        return view('pages.contact', ['categorys' => $this->categorys, 'manufacturer' => $this->manufacturer]);

    }
}
