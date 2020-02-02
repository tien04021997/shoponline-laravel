<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends FrontendController
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        /*Show ra sản phẩm nổi bật*/
        $productHot = Product::where([
            'hot' =>Product::HOT_ON,
            'active' => Product::STATUS_PUBLIC
        ])->limit(5)->get();

        /*Show ra bài viết mới nhất*/

        $articleNews = News::orderBy('id','DESC')->limit(6)->get();

        $viewData = [
            'productHot' => $productHot,
            'articleNews' => $articleNews
        ];


        return view('home.index',$viewData);
    }
}
