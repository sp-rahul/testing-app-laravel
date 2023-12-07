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
<h1>Products</h1>
<div>
    <a href="{{route('product.create')}}">Add a new product</a>
</div>

<div>
    @if(session()->has('success'))
         <div>
             {{session('success')}}
         </div>
    @endif
</div>
<div>
    <table border="2">
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Qty</th>
            <th>Price</th>
            <th>Description</th>
            <th>edit</th>
            <th>delete</th>
        </tr>
        @foreach($products_data as $product)
            <tr>
                <td>{{$product->id}}</td>
                <td>{{$product->name}}</td>
                <td>{{$product->qty}}</td>
                <td>{{$product->price}}</td>
                <td>{{$product->description}}</td>
                <td><a href="{{route('product.edit',['productId'=>$product])}}">edit</a></td>
                <td>
                    <form method="post"  action="{{route('product.destroy',['productId'=>$product])}}">
                       @csrf
                       @method('delete')
                       <input type='submit' value='delete' />
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
</div>


</body>
</html>
