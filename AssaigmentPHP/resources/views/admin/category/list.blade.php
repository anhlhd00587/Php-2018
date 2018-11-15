<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>Product list</h1>
<ul>
    @foreach($list_obj as $item)
        <li>
            <img src="{{$item->image}}" alt="" style="width: 150px">
            {{$item->name}}
            (<a href="/admin/category/{{$item->id}}/edit">Sửa</a>&nbsp;|&nbsp;<a href="">Xoá</a>)
        </li>
    @endforeach
</ul>
</body>
</html>