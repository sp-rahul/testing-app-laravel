<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
<h1>Add new product</h1>
<div>
    @if($errors->any())
        <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    @endif
</div>
<form method="post" action="{{route('product.store')}}">
    @csrf
    @method('post')
    <div>
        <label>Name</label>
        <label>
            <input type="text" name="name" placeholder="Name"/>
        </label>
    </div>
    <div>
        <label>Qty</label>
        <input type="text" name="qty" placeholder="Qty"/>
    </div>
    <div>
        <label>Price</label>
        <input type="text" name="price" placeholder="Price"/>
    </div>
    <div>
        <label>Description</label>
        <input type="text" name="description" placeholder="Description"/>
    </div>
    <button type="submit">Add now</button>
</form>


</body>
</html>
