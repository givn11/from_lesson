<?php
Auth::routes();
/*Route::get('/', function () {
    //env('APP_THEME');
    //return redirect()->route('glavnay');
    return view('shop.index');
});*/

//Главная
Route::get('/', 'MainController@index')->name('home');

Route::group(['prefix' => 'dashboard'], function () {
    Route::get('/', function (){
        return view('dashboard.main');
    });
    Route::resource('/news', 'NewsController'); //
});

Route::get('/add-to-cart/{product_id}', 'CartController@AddToCart')->name('product.add');

//Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => 'test'], function (){
    //Список
    Route::get('/index', 'TestController@index');
//Создание
    Route::get('/create', 'TestController@create');
    Route::get('/store', 'TestController@store');
//Обновление
    Route::get('/edit', 'TestController@edit');
    Route::get('/update', 'TestController@update');
//Удаление
    Route::get('/delete', 'TestController@delete');
});


//Route::get('/test', 'TestController@index'); //зарегистрировали роут, новый маршрут

//Route::get('/blabla', 'TestController@index');