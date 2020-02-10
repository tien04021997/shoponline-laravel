<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ShoppingCartController extends Controller
{
    public function addProduct(Request $request, $id)
    {
        $product = Product::select('name','id','price','sale','avatar')->find($id);

        if (!$product) return redirect('/');

        \Cart::add([
            'id' => $id,
            'name' => $product->name,
            'qty' => 1,
            'weight' => 550,
            'price' => $product->price,
            'sale' => $product->sale,
            'options' => ['avatar' => '$product->avatar']
        ]);


        return redirect()->back();

    }

    public function getListShoppingCart()
    {
        $products = \Cart::content();
        return view('shopping.index', compact('products'));
    }
}
