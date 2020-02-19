<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use App\Models\Transaction;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ShoppingCartController extends Controller
{
    /*
     * Thêm giỏ hàng
     * */
    public function addProduct(Request $request, $id)
    {
        $product = Product::select('name','id','price','sale','avatar')->find($id);

        if (!$product) return redirect('/');

        $price = $product->price;
        if ($product->sale)
        {
            $price = $price * (100 - $product->sale) / 100;
        }

        \Cart::add([
            'id' => $id,
            'name' => $product->name,
            'qty' => 1,
            'weight' => 550,
            'price' => $price,
            'options' => [
                'avatar' => $product->avatar,
                'sale' => $product->sale,
                'price_old' => $product->price
            ]
        ]);


        return redirect()->back();

    }

    /*
     * Xoa
     * */

    public function deleteProductItem($key)
    {
        \Cart::remove($key);

        return redirect()->back();
    }

    /*
     * Danh sách giỏ hàng
     *
     * */

    public function getListShoppingCart()
    {
        $product = \Cart::content();
        return view('shopping.index', compact('product'));
    }

    /*
     * Form thanh toán
     *
     * */

    public function getFormPay()
    {
        $product = \Cart::content();
        return view('shopping.pay', compact('product'));
    }

    /*
     * Lưu thông tin đơn hàng
     *
     * */

    public function saveInfoShoppingCart(Request $request)
    {
        $totalMoney = str_replace(',','',\Cart::subtotal(0,3));

        $transactionId =  Transaction::insertGetId([
            'user_id' => get_data_user('web'),
            'total' => (int)$totalMoney,
            'note' => $request->note,
            'address' => $request->address,
            'phone' => $request->phone,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        if ($transactionId)
        {
            $product = \Cart::content();
            foreach ($product as $value)
            {
                Order::insert([
                    'transaction_id' => $transactionId,
                    'product_id' => $value->id,
                    'qty' => $value->qty,
                    'price' => $value->options->price_old,
                    'sale' => $value->options->sale
                ]);
            }

        }
        \Cart::destroy();
        return redirect('/');

    }
}
