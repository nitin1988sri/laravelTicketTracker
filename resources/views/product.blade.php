<!DOCTYPE html>
<html>

<head>
    <title>Product List</title>
    </style>
</head>

<body class="antialiased">
    <x-header compData="Product List" />
    <table class="table">
        <thead>
            <tr id="test">
                <td>Product name</td>
                <td>Product description</td>
                <td>View</td>
            </tr>
        </thead>
        <tbody>
            @foreach($productList as $product)
            <tr>
                <td>{{$product['title']}}</td>
                <td>{{$product['details']}}</td>
                <td><a href="{{route('details', [$product['_id']])}}">View</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
    </div>
</body>

</html>