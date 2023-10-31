<!DOCTYPE html>
<html>
<head>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>

<h2>Deleted Product</h2>
<button class="">
    <a href="{{route('create')}}">Add new</a>
</button>
<button class="">
    <a href="{{route('index')}}">Main Table</a>
</button>

<table>
  <tr>
    <th>Product Id</th>
    <th>Product Name</th>
    <th>Product Price</th>
    <th>Actions</th>
  </tr>

  @foreach($deleted_product as $prod)
  <tr>
    <td>{{$prod->id}}</td>
    <td>{{$prod->name}}</td>
    <td>{{$prod->price}}</td>
    <td>
        <a href="{{route('restoreentry',[$prod->id])}}" data-toggle="tooltip" data-placement="top" title="Read"><i class="fa fa-refresh" aria-hidden="true"></i></a>
        <a href="{{route('permenentdelete',[$prod->id])}}" data-toggle="tooltip" data-placement="top" title="Permenent Delete">Permenent Delete</a>
    </td>
  </tr>
  @endforeach
</table>

</body>
</html>