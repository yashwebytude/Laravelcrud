<!DOCTYPE html>
<html lang="en">
<head>
    <style>
    table, th, td {
    border:1px solid black;
    }
    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Read More</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <table style="width:100%">
    <tr>
        <th>Product Name</th>
        <th>Product Price</th>
        <th>Quntity</th>  
        <th>Item Name</th>  
        <th>Action</th>  
    </tr>
    @foreach($items as $item)

    <tr>
        <td>{{$item->name}}</td>
        <td>{{$item->price}}</td>
        <td>{{$item->quntity}}</td>
        <td>{{$item->itemname}}</td>
        <td>
            <a href="{{route('delete',[$item->vegid])}}"><i class="fa fa-trash" aria-hidden="true"></i></a>
        </td>
    </tr>
    @endforeach
    </table>
</body>
</html>