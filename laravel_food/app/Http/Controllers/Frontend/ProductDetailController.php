<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use App\Models\Product;
use App\Models\ProductImage;
use App\Models\Vote;
use Illuminate\Http\Request;

class ProductDetailController extends Controller
{
    public function index(Request $request, $slug)
    {
        $product = Product::with('category:id,c_name,c_slug', 'keywords','admin:id,name,avatar','like')->where('pro_slug', $slug)->first();
        if (!$product) return abort(404);

        $productsRelated = Product::where('pro_category_id', $product->pro_category_id)
            ->where('id', '<>', $product->id)
            ->limit(4)
            ->select('id', 'pro_name', 'pro_slug', 'pro_price', 'pro_avatar','pro_category_id')
            ->get();


        $votes = Vote::with('user')->where('v_id', $product->id)->get();
//        dd($product);
        // Lấy images
        $images = ProductImage::where('pi_product_id', $product->id)
            ->get()->toArray();

        // lấy comment
//        $comments = Comment::with('user:id,name,avatar')->where('c_product_id', $product->id)
//            ->get();

        if (empty($images)) {
            $images[] = [
                'pi_name' => 'Sản phẩm',
                'pi_slug' => $product->pro_avatar
            ];
        }
        $viewData = [
            'productsRelated' => $productsRelated,
            'product'         => $product,
            'images'          => $images,
            'votes'           => $votes,
//            'comments'        => $comments
        ];
        return view('frontend.product_detail.index', $viewData);
    }

    public function comment(Request $request, $slug)
    {
        $product = Product::with('category:id,c_name,c_slug', 'keywords')->where('pro_slug', $slug)->first();
        if (!$product) return abort(404);

        $comment               = new Comment();
        $comment->c_name       = $request->username;
        $comment->c_user_id    = get_data_user('web');
        $comment->c_product_id = $product->id;
        $comment->c_content    = $request->comment;
        $comment->save();
        return redirect()->back();
    }
}
