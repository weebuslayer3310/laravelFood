<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Vote;
use Carbon\Carbon;
use Illuminate\Http\Request;

class UserVoteController extends Controller
{
    public function index()
    {
        $userId = get_data_user('web');
        $products = Product::whereHas('vote', function ($query) use ($userId){
            $query->where('v_user_id', $userId);
        })->paginate(20);

        $viewData = [
            'products' => $products
        ];

        return view('user.vote.index', $viewData);
    }

    public function create($productID)
    {
        return view('user.vote.create');
    }

    public function store(Request $request,$productID)
    {
        $vote = Vote::create([
           'v_user_id' => get_data_user('web'),
           'v_id' => $productID,
           'v_number' => $request->v_number,
           'v_content' => $request->message,
           'created_at' => Carbon::now()
        ]);

        if($vote)
        {
            $product = Product::find($productID);
            $product->pro_review_total++;
            $product->pro_review_star += $request->v_number;
            $product->save();
        }

        return redirect()->back();
    }
}
