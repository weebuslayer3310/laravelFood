<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Category;
use App\Models\Product;
use App\Models\Slide;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $productsHot = Product::with('category:id,c_name','admin:id,name','like')->withCount('like')->where('pro_hot', Product::HOT)
            ->limit(6)
            ->select('id', 'pro_name', 'pro_slug', 'pro_price', 'pro_avatar','pro_sale','pro_category_id','created_at','pro_admin_id','pro_description')
            ->get();


        $productsNews = Product::with('category:id,c_name','admin:id,name','like')->withCount('like')->where('pro_hot', Product::HOT)
            ->limit(6)
            ->select('id', 'pro_name', 'pro_slug', 'pro_price', 'pro_avatar','pro_sale','pro_category_id','created_at','pro_admin_id','pro_description')
            ->orderByDesc('id')
            ->get();


        $slide         = Slide::limit(1)->first();
        $categoriesHot = Category::where('c_hot', Category::HOT)
            ->orderByDesc('id')->limit(4)->get();
        $viewData      = [
            'slide'         => $slide,
            'categoriesHot' => $categoriesHot,
            'productsHot'   => $productsHot,
            'productsNews'  => $productsNews,
        ];

        return view('frontend.home.index', $viewData);
    }
}
