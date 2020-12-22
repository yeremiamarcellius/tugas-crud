<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
    <table class ="table">
        <tr>
            <th>Product Name</th>
            <th>Description</th>
            <th>Price</th>
            <th>Stock</th>
            <th>Expired Date</th>
            <th>Action</th>
        </tr>
        <tbody>
            @foreach($products as $product)
                <tr>
                    <td>
                        <a href="{{route('show', $product->id)}}">{{$product->productname}}</a>
                    </td>
                    <td>{{$product->description}}</td>
                    <td>{{$product->price}}</td>
                    <td>{{$product->stock}}</td>
                    <td>{{$product->expireddate}}</td>
                    <td>
                        <div class ="d-flex">
                            <a href="{{route('edit', $product->id)}}" class="btn btn-success">Edit</a>
                            <form action="{{route('delete', $product->id)}}" class = "ml-3" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type = "submit" class="btn btn-danger">Delete</button>
                            </form>
                        </div>
                        
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <a href = "{{route('create')}}" class = "btn btn-primary" style = "display: block; margin: auto; width: 20%">
        Create data product
    </a>
    <br>
    <a href = "{{route('category')}}" class = "btn btn-primary" style = "display: block; margin: auto; width: 20%">
        Category
    </a>
</body>
</html>