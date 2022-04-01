<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class CategoryController extends ProductBaseController
{
    public function index(Request $request, $slug)
    {
        $category = Category::where('c_slug', $slug)->first();

        if (!$category) return abort(404);
        $products = Product::where('pro_category_id', $category->id);
        if ($name = $request->k) {
            $products->where('pro_name', 'like', '%' . $name . '%');
        }

        if($request->price_min)
            $products->where('pro_price','>=', $request->price_min);

        if($request->price_max)
            $products->where('pro_price','<=', $request->price_max);

        if($request->m)
            $products->where('pro_manufacturer_id', $request->m);

        if($sort = $request->sorting)             $products->orderBy("id",$sort);

        $products = $products->select('id', 'pro_name', 'pro_slug', 'pro_price', 'pro_avatar')
            ->paginate(12);

        $viewData = [
            'title'          => $category->c_name,
            'category'       => $category,
            'query'          => $request->query(),
            'categoriesSort' => $this->getCategoriesSort(),
            'products'       => $products
        ];

        return view('frontend.category.index', $viewData);
    }


    public function search(Request $request)
    {
        $products = Product::where('pro_name', 'like', '%' . $request->key . '%');
        $products = $products->select('id', 'pro_name', 'pro_slug', 'pro_price', 'pro_avatar')
            ->paginate(12);

        $viewData = [
            'title'          => 'Tìm kiếm',
            'products'       => $products
        ];

        return view('frontend.category.index', $viewData);
    }
}
