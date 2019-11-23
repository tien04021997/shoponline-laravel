<?php

namespace Modules\Admin\Http\Controllers;

use App\Http\Requests\RequestNews;
use App\Models\CategoryNews;
use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;

class AdminNewsController extends Controller
{

    public function index()
    {
        $news = News::with('category:id,name')->paginate(10);
        $viewData = [
            'news' => $news,
        ];
        return view('admin::news.index', $viewData);
    }


    public function create()
    {
        $categorieNews = $this->getCategoryNews();
        return view('admin::news.create', compact('categorieNews'));
    }

    public function store(RequestNews $requestNews)
    {
        $this->insertOrUpdate($requestNews);
        return redirect()->back();
    }

    public function edit($id){
        $news = News::find($id);
        $categorieNews = $this->getCategoryNews();
        return view('admin::news.update', compact('news', 'categorieNews'));
    }

    public function update(RequestNews $requestNews, $id){
        $this->insertOrUpdate($requestNews, $id);
        return redirect()->back();
    }

    public function getCategoryNews()
    {
        return CategoryNews::all();
    }

    public function insertOrUpdate($requestNews, $id=''){
        $news = new News();
        if ($id){
            $news = News::find($id);
        }
        $news->name = $requestNews->name;
        $news->category_id = $requestNews->category_id;
        $news->description = $requestNews->description;
        $news->description_seo = $requestNews->description_seo;
        $news->avatar = $requestNews->avatar;
        $news->title_seo = $requestNews->title_seo;
        $news->content = $requestNews->content;
        $news->save();
    }
}
