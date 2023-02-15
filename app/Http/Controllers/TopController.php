<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\sales;

class TopController extends Controller
{
    // 商品一覧表示
    public function productView()
    {
        $product = new Product();
        $product->getAll();
        return view('product_view',['product' => $product]);
    }
    // 検索
    public function request(Request $request)
    {
        $keyword = $request->input('keyword');
        $query = Product::query();

        if(!empty($keyword)) {
            $query->where('product_name', 'LIKE', "%{$keyword}%")
                ->orWhere('author', 'LIKE', "%{$keyword}%");
        }

        $product = $query->get();
        return view('product_view',compact('product','keyword'));
    }
    // 削除
    public function deleat($id)
    {
        \DB::table('product')
            ->where('id', $id)
            ->delete();
        return redirect('/product_view');
    }

    // 新規登録画面表示
    public function register()
    {
        return view('product_register');
    }
    //登録
    public function productRegister(Request $request)
    {
        // 値の登録
        $product = new Product;
        $product->company_id = $request->company_id;
        $product->company_id = $request->company_name;
        $product->product_name = $request->product_name;
        $product->price = $request->price;
        $product->stock = $request->stock;
        $product->comment = $request->comment;

        // 保存
        $product->save();
        
        return redirect()->to('product_register');
    }

    // 詳細画面表示
    public function detail()
    {
        $product = new Product();
        $product->getAll();
        return view('product_detail');
    }

    // 編集画面表示
    public function update()
    {
        return view('product_update');
    }
    //更新
    public function productUpdate(Request $request)
    {
        $product = new Product;

        $product->company_id = $request->company_id;
        $product->product_name = $request->product_name;
        $product->price = $request->price;
        $product->stock = $request->stock;
        $product->comment = $request->comment;

        // 保存
        $product->save();

        return redirect()->to('product_update');
    }
}
