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

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// 商品一覧表示
Auth::routes();

Route::get('/product_view','TopController@productView')->name('product');

// 検索
Auth::routes();

Route::get('/product','TopController@serch')->name('serch');


// 削除
Auth::routes();

Route::post('/deleat{id}', 'TopController@deleat')->name('deleat');

// 新規登録画面表示・登録
Auth::routes();

Route::get('/product_register','TopController@register')->name('register');

Auth::routes();

Route::post('/product_register','TopController@productRegister')->name('productRegister');

// 詳細画面表示
Auth::routes();

Route::get('/product_detail','TopController@detail')->name('detail');

// 編集画面表示・更新
Auth::routes();

Route::get('/product_update','TopController@update')->name('update');

Auth::routes();

Route::post('/product_update','TopController@productUpdate')->name('productUpdate');
