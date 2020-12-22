<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>create product</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
    <!-- <form action="/store" method ="POST">
        @csrf
        <div>
            <label for="">product name</label>
            <br>
            <input name = "name"type="text" placeholder = "product name">
        </div>
        <div>
            <label for="">description</label>
            <br>
            <textarea name = "desc" id="" cols="30" rows="10" placeholder ="description"></textarea>
        </div>
        <div>
            <label for="">price</label>
            <br>
            <input name = "price" type="number" placeholder = "price">
        </div>
        <div>
            <label for="">stock</label>
            <br>
            <input name = "stock"type="number" placeholder = "stock">
        </div>
        <div>
            <label for="">expired date</label>
            <br>
            <input name = "date" type="date" placeholder = "expired date">
        </div>
        <button type = "submit">Submit</button>
    </form> -->
    <div class = "container" >
      <!-- @if($errors->any())
        <div class="alert alert-danger">
          <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $errors }}</li>
            @endforeach
          </ul>
        </div>
        @endif -->
      <div class = "d-flex align-items-center justify-content-center" style="min-height: 95vh">
      <form class = "col-lg-6" action="{{route('store')}}" method ="POST">
        @csrf
        <div class="mb-3">
          <label for="">product name</label>
          <input name = "name"type="text" placeholder = "product name" class="form-control">
          @error('name') <span>{{$message}}</span>@enderror
        </div>
        <div class="mb-3">
          <label for="">description</label>
          <textarea name = "desc" id="" cols="30" rows="3" placeholder ="description" class="form-control"></textarea>
        </div>
        <div class="mb-3">
          <label for="">price</label>
          <input name = "price" type="number" placeholder = "price" class="form-control">
          @error('price') <span>{{$message}}</span>@enderror
        </div>
        <div class="mb-3">
          <label for="">stock</label>
          <input name = "stock"type="number" placeholder = "stock" class="form-control">
          @error('stock') <span>{{$message}}</span>@enderror
        </div>
        <div class="mb-3">
          <label for="">expired date</label>
          <input name = "date" type="date" placeholder = "expired date" class="form-control">
          @error('date') <span>{{$message}}</span>@enderror
        </div>
        <div class ="mb-3">
          <label for="">category</label>
          <select name="category_id" class="form-control" placeholder ="category">
            @foreach ($categories as $category)
            <option value="{{$category->id}}">{{$category->category}}</option>
            @endforeach
          </select>
        </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
      </div>
    </div>
</body>
</html>