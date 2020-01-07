<?php

namespace App\Http\Controllers;

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
        $productHot = Product::where([
            'hot' =>Product::HOT_ON,
            'active' => Product::STATUS_PUBLIC
        ])->limit(5)->get();

        $viewData = [
            'productHot' => $productHot
        ];

        return view('home.index',$viewData);
    }
}
