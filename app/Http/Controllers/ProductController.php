<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function __construct()
    {
        $this->categorys = Category::all();
        $this->manufacturer = Product::distinct()->where('in_stock', true)
            ->where('manufacturer', '!=', '')
            ->get(['manufacturer']);
    }

    public function category($slug)
    {

        $category = Category::where('slug', $slug)->first();
        $products = Product::where('category_id', $category->id)->where('in_stock', true)->paginate(30);

        return view('pages.category', ['categorys' => $this->categorys,
            'manufacturer' => $this->manufacturer,
            'category' => $category,
            'products' => $products
        ]);
    }

    public function product($slug)
    {

        $product = Product::where('slug', $slug)->where('in_stock', true)->first();

        return view('pages.product', ['categorys' => $this->categorys,
            'manufacturer' => $this->manufacturer,
            'product' => $product
        ]);
    }

    public function manufacturer($name)
    {

        $products = Product::where('manufacturer', $name)->where('in_stock', true)->paginate(30);

        return view('pages.manufacturer', ['categorys' => $this->categorys,
            'manufacturer' => $this->manufacturer,
            'products' => $products
        ]);
    }
}
