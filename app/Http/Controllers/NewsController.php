<?php

namespace App\Http\Controllers;

use App\News;
use Illuminate\Http\Request;


class NewsController extends Controller
{
    /**
     * Display a listing of the resource. (список ресурсов)
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //получаем все новости из базы данных
        $news = News::all();
        return view('dashboard.news.index', [
            'news' =>$news //отдаём шаблон
        ]);
    }

    /**
     * Show the form for creating a new resource. (Отображает форму для создания ресурса)
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.news.create');
    }

    /**
     * Store a newly created resource in storage. (Обработчик запроса на создание ресурса)
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /*$novost = new News();
        $novost->title = $request->get('title');
        $novost->img = $request->get('img');
        $novost->save();*/

        //$data = $request->all()
        //dd($request);
        News::create($request->all());
        return redirect()->route('news.index');

    }

    /**
     * Display the specified resource. (Отображает конкретную запись)
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource. (Отображает форму для редактирования ресурса)
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage. (Обновляет товар в БД. Обработчик обновления конкретного ресурса)
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage. (Удаление конкретного ресурса с БД)
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
