<!DOCTYPE html>
<html lang="en">
<head>
    <title>List Products</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{url('https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{url('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css')}}">
    <script src="{{url('https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js')}}"></script>
    <script src="{{url('https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js')}}"></script>
    <script src="{{url('https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js')}}}"></script>
</head>
<body>

<div>
    <table class="table">
        <thead>
        <tr>
            <th>Product Code</th>
            <th>Name</th>
            <th>Price</th>
            <th>Avatar</th>
        </tr>
        </thead>
        <tbody>
        @foreach($list as $products)
            <tr>
                <td>{{$products->productCode}}</td>
                <td><img src="{{$products->avatar}}" style="width: 100px"></td>
                <td>{{$products->name}}</td>
                <td>{{$products->price}}</td>
                <td><img src="{{$products->avatar}}" style="width: 100px"></td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
</body>
</html>
