<?php

namespace Modules\Admin\Http\Controllers;

use App\Http\Requests\RequestNewsCategory;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\CategoryNews;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Log;

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

    public function store(RequestNewsCategory $requestNewsCategory)
    {
        $this->insertOrUpdate($requestNewsCategory);
        return redirect()->back();

    }

    public function edit($id)
    {
        $category = CategoryNews::find($id);
        return view('admin::CategoryNews.update', compact('category'));
    }

    public function update(RequestNewsCategory $requestNewsCategory, $id)
    {
        $this->insertOrUpdate($requestNewsCategory, $id);
        return redirect()->back();
    }

    public function insertOrUpdate($requestNewsCategory, $id = ''){
        $code = 1;
        try{
            $categoryNews = new CategoryNews();
            if ($id){
                $categoryNews = CategoryNews::find($id);
            }
            $categoryNews->name = $requestNewsCategory->name;
            $categoryNews->slug = str_slug($requestNewsCategory->name);
            $categoryNews->icon = str_slug($requestNewsCategory->icon);
            $categoryNews->title_seo = $requestNewsCategory->title_seo ? $requestNewsCategory->title_seo : $requestNewsCategory->name;
            $categoryNews->description_seo = $requestNewsCategory->description_seo;
            $categoryNews->save();
        }
        catch (\Exception $exception)
        {
            $code = 0;
            Log::error("[Error insertOrUpdate CategoryNews]".$exception->getMessage());
        }
        return $code;
    }

    public function action($action, $id){
        if ($action){
            $categoryNews = CategoryNews::find($id);
            switch ($action){
                case 'delete':
                    $categoryNews->delete();
                    break;
            }
        }
        return redirect()->back();
    }
}
