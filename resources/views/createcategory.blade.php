<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>create category</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
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
      <form class = "col-lg-6" action="{{route('storecategory')}}" method ="POST">
        @csrf
        <div class="mb-3">
          <label for="">category</label>
          <input name = "category"type="text" placeholder = "category" class="form-control">
          @error('category') <span>{{$message}}</span>@enderror
        </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
      </div>
    </div>
</body>
</html>