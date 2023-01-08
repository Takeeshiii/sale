<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TopController extends Controller
{
    // 商品一覧表示
    public function productView(){
        return view('product');
    }
    // 検索
    public function serch(){
        
    }
    // 削除
    public function deleat(){

    }

    // 新規登録画面表示
    public function register(){
        return view('register');
    }
    //登録
    public function productRegister(){

    }

    // 詳細画面表示
    public function detail(){
        return view('detail');
    }

    // 編集画面表示
    public function update(){
        return view('update');
    }
    //更新
    public function productUpdate(){

    }
}
