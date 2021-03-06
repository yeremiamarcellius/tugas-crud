<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show Product</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
    <h1>{{$product->productname}}</h1>
    <p>{{$product->description}}</p>
    <p>{{$product->price}}</p>
    <p>{{$product->stock}}</p>
    <p>{{$product->expireddate}}</p>
    <h5>category</h5>
    <ul>
        <li><a href="{{route('showcategory', $product->category->id)}}">{{$product->category->category}}</a></li>
    </ul>
    <a href = "{{route('producthome')}}" class = "btn btn-primary" style = "display: block; margin: auto; width: 20%">
        home
    </a>
</body>
</html>