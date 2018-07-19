<?php

namespace App\Http\Controllers;

use App\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TestController extends Controller
{
    public function index(){
        //$news = DB::table('news')->get();

        $news = News::all();

        $novost = News::find(1);
        $novost->title = 'srrrrrrrrrrrgsd1';
        $novost->save();

        //dd($novost);
        //echo __METHOD__;
        //return view('shop.index');
        return view('test', [
            'news' => $news
        ]);
    }

    /*public function blabla(){
        $data = [1 => 'TEST'];
        return view('shop.index', [
            'parameters' => $data,
            'name' => 'Igor',
        ]);
    }*/
}
