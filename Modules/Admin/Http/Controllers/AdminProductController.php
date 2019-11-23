<?php

namespace Modules\Admin\Http\Controllers;

use App\Http\Requests\RequestProduct;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Log;

class AdminProductController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        $product = Product::with('category:id,c_name')->paginate(10);
        $viewData = [
            'product' => $product,
        ];
        return view('admin::product.index', $viewData);
    }

    public function create()
    {
        $categories = $this->getCategories();
        return view('admin::product.create', compact('categories'));
    }

    public function store(RequestProduct $requestProduct)
    {
        $this->insertOrUpdate($requestProduct);
        return redirect()->back();
    }

    public function edit($id){
        $product = Product::find($id);
        $categories = $this->getCategories();
        return view('admin::product.update', compact('product', 'categories'));
    }

    public function update(RequestProduct $requestProduct, $id){
        $this->insertOrUpdate($requestProduct, $id);
        return redirect()->back();
    }

    public function getCategories()
    {
        return Category::all();
    }

    public function insertOrUpdate($requestProduct, $id = '')
    {
        $product = new Product();
        if ($id){
            $product = Product::find($id);
        }
        $product->name = $requestProduct->name;
        $product->category_id = $requestProduct->category_id;
        $product->description = $requestProduct->description;
        $product->description_seo = $requestProduct->description_seo;
        $product->price = $requestProduct->price;
        $product->sale = $requestProduct->sale;
        $product->avatar = $requestProduct->avatar;
        $product->title_seo = $requestProduct->title_seo;
        $product->content = $requestProduct->content;
        $product->save();
    }
}
