<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\ProductLike;
use Illuminate\Http\Request;

class UserLikeController extends Controller
{

    public function index(Request $request)
    {
        $userID = get_data_user('web');
        $products = Product::whereHas('like', function ($query) use ($userID){
            $query->where('pl_user_id', $userID);
        })->paginate(20);

        $viewData = [
            'products' => $products
        ];

        return view('user.like.index', $viewData);
    }

    public function store($productId)
    {
        $product = Product::find($productId);
        if (!$product) return abort(404);

        $productLink = ProductLike::updateOrCreate([
            'pl_product_id' => $productId,
            'pl_user_id' => get_data_user('web','id')
        ],[
            'pl_product_id' => $productId,
            'pl_user_id' => get_data_user('web','id')
        ]);

        return  redirect()->back();
    }
}
