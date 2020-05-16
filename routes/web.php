<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//Route::resource('/index','TestController');
//Route::get('/index','TestController@index');

//Route::get('/', 'PagesController@index');
//Route::get('/about', 'PagesController@about');


//Route::get('/{id}',['middleware' => ['Test:($id)','Test2'],'uses'=>'TestController@home' ]);
/*
Route::any('kkkk/{name}', ['as'=>'xy' ,'uses'=>function($name){
    //$r = Route::current();
    //dd($r);
    return ($name);
    //return $r->getActionName();
    //return $r->getName();
    //$r = Route::currentActionName();
    //$r = Route::currentRouteName();
}]);
Route::get('AAG/{id}',function($id){
    return redirect()->Route('xy',['name'=>$id]);
});
/*
Route::any('/kkk', function(){
    $r= Route::current();
    //return $r -> getName();
    return $r -> getActionName();
});
*/
//Route::any('about',function{});

//Route::match(['get','post'],'/about', 'PagesController@about');

//Route::post('/about', 'PagesController@about');
/*
Route::get('/about',function(){
    return view('pages.about');
});
/*
Route::post('/about',function(){
    return view('pages.about');
});
/*
Route::get('/about',function(){
    return view('pages.about');
});

Route::get('/Hello/user/{id?}/{name}', function ($id=22,$name) {
    echo 'hello Every one my name is Alireza</br>';
    return 'hello '.$name.' player number '.$id;
})->where (['id' => '[0-9]+']);//in '' must be a regular expression

*/
// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
//Route::get('/login','auth\LoginController@login')->name('login');
Route::get('/services', 'PagesController@services');
Route::get('/', 'PagesController@index');
Route::get('/about', 'PagesController@about');
Route::resource('posts','PostsController');

//Route::get('/login','PagesController@login');
//Route::get('/login', function(){
 //   return 'hello';
//})->name('login');
//Route::resource('post','PostsController');
//Route::get('/form', 'TestPagesController@form');
//Route::get('/save', 'TestPagesController@save');
//Route::get('/delete', 'TestPagesController@delete');

//Route::get('/','PagesController@index');



//Route::get('/about', 'PagesController@about');

//Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('dashboard', 'DashboardController@index');
