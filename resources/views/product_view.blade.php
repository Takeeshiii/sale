<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>商品一覧</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

    <!-- Styles -->
    <style>

    </style>
</head>

<body>
    <div>
        <form action="{{ route('product') }}" method="GET">
            <input type="text" name="keyword" value="{{ $keyword }}">
            <input type="submit" value="検索">
        </form>
    </div>
    <div class="table-responsive">
        <table>
            <tr class="table-info">
                <th>id</th>
                <th>名前</th>
                <th>値段</th>
                <th>在庫数</th>
                <th>メーカー名</th>
                <th>操作</th>
            </tr>
            @foreach($product as $product)
            <tr>
                <th scope="row">{{$product->id}}</th>
                <td>{{$product->company_id}}</td>
                <td>{{$product->product_name}}</td>
                <td>{{$product->price}}</td>
                <td>{{$product->stock}}</td>
                <td>{{$product->price}}</td>
                <td><button type="button">詳細</button></td>
                <td><button type="button">編集</button></td>
                <td><button type="button">削除</button></td>
            </tr>
            @endforeach
        </table>
    </div>
</body>

</html>