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

    public function index(Request $request)
    {
        $news = News::with('category:id,name');

        /*Cho bài viết nào thêm mới sau thì lên đầu*/
        if ($request->name) $news->where('name','like','%'.$request->name.'%');
        if ($request->cate) $news->where('category_id',$request->cate);
        $news = $news->orderByDesc('id')->paginate(10);

        $categorieNews = $this->getCategoryNews();

        $viewData = [
            'news'          => $news,
            'categorieNews' => $categorieNews
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

        // Điều kiện để kiểm tra tồn tại file
        if($requestNews->hasFile('avatar'))
        {
            $file = upload_image('avatar');
            if (isset($file['name']))
            {
                $news->avatar = $file['name'];
            }
        }

        $news->save();
    }

    public function action($action, $id){
        if ($action){
            $news = News::find($id);
            switch ($action){
                case 'delete':
                    $news->delete();
                    break;

                case 'active':
                    $news->active = $news->active ? 0 : 1;
                    $news->save();
                    break;

                case 'hot':
                    $news->hot = $news->hot ? 0 : 1;
                    $news->save();
                    break;
            }
        }
        return redirect()->back();
    }
}
