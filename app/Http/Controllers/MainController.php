<?php

namespace App\Http\Controllers;

use app\News;
use app\product;
use Illuminate\Http\Request;

class MainController extends Controller
{

    public function index(){
        $news = News::orderBy('created_at');
        $products = Product::all();

    return view('shop.index', [
            'news' => $news,
            'product' => $products
        ]
        );
}
}