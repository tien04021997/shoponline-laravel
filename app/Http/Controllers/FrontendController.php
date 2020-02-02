<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\CategoryNews;
use Illuminate\Support\Facades\View;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function __construct()
    {
        $categories = Category::all();
        View::share('categories', $categories);

        $categorieNews = CategoryNews::all();
        View::share('category_news', $categorieNews);
    }
}
