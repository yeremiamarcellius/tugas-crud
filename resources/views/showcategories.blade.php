<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show Category</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
    <h1>{{$category->category}}</h1>
    <h5>product</h5>
    <ul>
        @foreach($category->product as $product)
        <li>
        <a href="{{route('show', $product->id)}}">{{$product->productname}}</a>
        </li>
        @endforeach
        
    </ul>
    <a href = "{{route('producthome')}}" class = "btn btn-primary" style = "display: block; margin: auto; width: 20%">
        home
    </a>
</body>
</html>