<?php


namespace App\Helpers;


use App\Models\Product;
use Illuminate\Support\Facades\Session;

class Cart
{

    public static function add(int $id)
    {

        $product = Product::find($id);

        if (!Session::exists('cart.' . $product->id)) {
            $product->count = 1;
            Session::push('cart.' . $product->id, $product);
            Session::save();
        }
    }


    public static function destroy(int $id)
    {
        Session::forget('cart.' . $id);
        Session::save();
    }

    public static function update(int $id, int $count = 1)
    {

        if (Session::exists('cart.' . $id)) {
            $product = Session::get('cart.' . $id)[0];

            $product->count = $count;

            Session::save();

        }
    }

    public static function total()
    {

        $count = 0;
        $products = Session::get('cart');
        if ($products) {

            foreach ($products as $product) {
                $product = $product[0];
                $count += $product->count;
            }

        }

        return $count;
    }

    public static function sum()
    {

        $sum = 0;
        $products = Session::get('cart');
        if ($products) {
            foreach ($products as $product) {
                $product = $product[0];
                $sum += $product->count * $product->getPrice();
            }
        }

        return round($sum,2);

    }

    public static function exist($id)
    {
        return Session::exists('cart.' . $id);
    }

    public static function get()
    {
        return Session::get('cart');
    }

    public static function getId($id)
    {
        return Session::get('cart.' . $id)[0];
    }

    public static function clear(){
        Session::forget('cart');
        Session::save();
    }

}