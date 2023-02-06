<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>商品登録</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>

        </style>
    </head>
    <body>
    <form action="" method="post">
{{ csrf_field() }}
<input type="hidden" name="product_name" value="{{$product_name}}">
<input type="hidden" name="product_name" value="{{$company_name}}">
<input type="hidden" name="price" value="{{$price}}">
<input type="hidden" name="stock" value="{{$stock}}">
<input type="hidden" name="message" value="{{$message}}">

<!-- 商品名 -->
<div>
    <label>お名前</label>
    <div>{{$name}}</div>
</div>

<!-- メーカー -->
<div>
    <label>メーカー</label>
    <div>{{$company_name}}</div>
</div>

<!--値段-->
<div>
    <label>値段</label>
    <div>{{$price}}</div>
</div>
<!--在庫-->
<div>
    <label>在庫</label>
    <div>{{$stock}}</div>
</div>

<!--メッセージ-->
<div>
    <label>メッセージ</label>
    <div>{!! nl2br(e( $comment )) !!}</div>
</div>

<!-- 登録 -->
<div>
    <div>
        <button type="submit">登録</button>
    </div>
</div>

</form>

    </body>
</html>
