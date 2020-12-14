<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>

<div class = "container" >
<h1 class="text-center">Update Data</h1>
      <div class = "d-flex align-items-center justify-content-center" style="min-height: 95vh">
      <form class = "col-lg-6" action="{{route('update', $product->id)}}" method ="POST">
        @csrf
        @method('patch')
        <div class="mb-3">
          <label for="">product name</label>
          <input name = "name"type="text" placeholder = "product name" class="form-control" value="{{$product->productname}}">
        </div>
        <div class="mb-3">
          <label for="">description</label>
          <textarea name = "desc" id="" cols="30" rows="3" placeholder ="description" class="form-control">{{$product->description}}</textarea>
        </div>
        <div class="mb-3">
          <label for="">price</label>
          <input name = "price" type="number" placeholder = "price" class="form-control" value="{{$product->price}}">
        </div>
        <div class="mb-3">
          <label for="">stock</label>
          <input name = "stock"type="number" placeholder = "stock" class="form-control" value="{{$product->stock}}">
        </div>
        <div class="mb-3">
          <label for="">expired date</label>
          <input name = "date" type="date" placeholder = "expired date" class="form-control" value="{{$product->expireddate}}">
        </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    </div>
</div>
</body>
</html>