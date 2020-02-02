<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductDetailController extends FrontendController
{
    public function productDetail(Request $request)
    {
        $url = $request->segment('2');
        $url = preg_split('/(-)/i',$url);

        if ($id = array_pop($url))
        {
            $productDetail = Product::where('active',Product::STATUS_PUBLIC)->find($id);

            $categoryProduct = Category::find($id);

            $productNew = Product::orderBy('id','DESC')->limit(12)->get();

            $viewData = [
                'productDetail' => $productDetail,
                'categoryProduct' => $categoryProduct,
                'productNew' => $productNew
            ];

            return view('product.detail',$viewData);
        }
    }
}
