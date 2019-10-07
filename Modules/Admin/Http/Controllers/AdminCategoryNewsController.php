<?php

namespace Modules\Admin\Http\Controllers;

use App\Http\Requests\RequestCategory;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\CategoryNews;
use Illuminate\Routing\Controller;

class AdminCategoryNewsController extends Controller
{
    public function index()
    {
    	$category_news = CategoryNews::select('id', 'name', 'title_seo', 'active')->get();
    	$viewData = [
    		'category_news' => $category_news,
    	];
        return view('admin::CategoryNews.index', $viewData);
    }

    public function create()
    {
    	return view('admin::CategoryNews.create');
    }

    public function store(RequestCategory $requestCategory)
    {
    	$categoryNews = new CategoryNews();
    	$categoryNews->name = $requestCategory->name;
    	$categoryNews->slug = str_slug($requestCategory->name);
    	$categoryNews->icon = str_slug($requestCategory->icon);
    	$categoryNews->title_seo = $requestCategory->title_seo ? $requestCategory->title_seo : $requestCategory->name;
    	$categoryNews->description_seo = $requestCategory->description_seo;
    	$categoryNews->save();
    	return redirect()->back();

    }
}
