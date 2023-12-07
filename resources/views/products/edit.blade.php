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
<h1>Edit product</h1>
<div>
    @if($errors->any())
        <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    @endif
</div>
<form method="post" action="{{route('product.update',['productId'=>$productForEdit])}}">
    @csrf
    @method('put')
    <div>
        <label>Name</label>
        <input type="text" name="name" placeholder="Name" value="{{$productForEdit->name}}"/>
    </div>
    <div>
        <label>Qty</label>
        <input type="text" name="qty" placeholder="Qty" value="{{$productForEdit->qty}}"/>
    </div>
    <div>
        <label>Price</label>
        <input type="text" name="price" placeholder="Price" value="{{$productForEdit->price}}"/>
    </div>
    <div>
        <label>Description</label>
        <input type="text" name="description" placeholder="Description" value="{{$productForEdit->description}}"/>
    </div>
    <button type="submit">Update the product</button>
</form>


</body>
</html>
