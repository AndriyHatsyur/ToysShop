<?php

namespace App\Http\Controllers;

use App\Helpers\Cart;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CartController extends Controller
{
    private $categorys;
    private $manufacturer;

    public function __construct()
    {
        $this->categorys = Category::all();
        $this->manufacturer = Product::distinct()->where('in_stock', true)->get(['manufacturer']);
    }

    public function index(Request $request)
    {
        $cart = Cart::get();
        return view('pages.cart', ['categorys' => $this->categorys,
            'manufacturer' => $this->manufacturer,
            'cart' => $cart
        ]);
    }

    public function store(Request $request)
    {

        $data =  $request->all();
        Cart::add($data['id']);
        return Cart::total();
    }

    public function update(Request $request)
    {
        $data = $request->all();

        if ($data['count']> 0)
            Cart::update($data['id'], $data['count']);

        $data['total'] = Cart::total();
        $data['sum'] = Cart::sum();
        $product = Cart::getId($data['id']);
        $data['price'] = $product->getPrice();
        $data['count'] = $product->count;

        return $data;
    }

    public function destroy(Request $request)
    {
        $data = $request->all();
        Cart::destroy($data['id']);

        $data['total'] = Cart::total();
        $data['sum'] = Cart::sum();

        return $data;
    }


}