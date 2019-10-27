<?php

namespace App\Http\Controllers;

use App\Helpers\Cart;
use App\Models\Order;
use App\Models\Status;
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
        $this->manufacturer = Product::distinct()->where('in_stock', true)->get(['manufacturer']);
        $this->products = Product::where('sale', '>', 0)->where('in_stock', true)->take(6)->get();
    }

    /**
     * Show the application dashboard
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        return view('pages.home', ['categorys' => $this->categorys,
            'manufacturer' => $this->manufacturer,
            'products' => $this->products
        ]);

    }


    public function about()
    {
        return view('pages.about', ['categorys' => $this->categorys,
            'manufacturer' => $this->manufacturer,
            'products' => $this->products

        ]);

    }

    public function payment()
    {
        return view('pages.payment', ['categorys' => $this->categorys, 'manufacturer' => $this->manufacturer]);

    }

    public function contact()
    {
        return view('pages.contact', ['categorys' => $this->categorys, 'manufacturer' => $this->manufacturer]);

    }


    public function order()
    {
        return view('pages.order', ['categorys' => $this->categorys, 'manufacturer' => $this->manufacturer]);

    }

    public function orderCreate(Request $request)
    {

        $data = $request->all();
        unset($data['_token']);
        $data['status_id'] = Status::where('code', 100)->first()->id;
        $data['sum'] = Cart::sum();
        $data['count'] = Cart::total();

        $order = Order::create($data);

        $cart = Cart::get();

        foreach ($cart as $product){
            $product = $product[0];

            $order->products()->create([
                'article' =>$product->id,
                'name'=> $product->name,
                'slug'=>$product->slug,
                'count'=>$product->count,
                'price'=>$product->price,
                'image'=>$product->image
            ]);

        }

        Cart::clear();

        return view('pages.order-send', ['categorys' => $this->categorys,
            'manufacturer' => $this->manufacturer,
            'products' => $this->products

        ]);
    }
}
