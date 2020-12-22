<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Category</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
    <table class ="table">
        <tr>
            <th>Category</th>
            <th>action</th>
        </tr>
        <tbody>
            @foreach($categorys as $category)
                <tr>
                    <td>
                    <a href="{{route('showcategory', $category->id)}}">{{$category->category}}</a>
                    </td>
                    <td>
                    <form action="{{route('deletecategory', $category->id)}}"  method="POST">
                        @csrf
                        @method('DELETE')
                        <button type = "submit" class="btn btn-danger">Delete</button>
                    </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <a href = "{{route('createcategory')}}" class = "btn btn-primary" style = "display: block; margin: auto; width: 20%">
        Create category
    </a>
    <br>
    <a href = "{{route('producthome')}}" class = "btn btn-primary" style = "display: block; margin: auto; width: 20%">
        Product
    </a>
    
    
</body>
</html>