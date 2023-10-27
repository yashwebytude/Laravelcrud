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
        <a href="{{route('restoreentry',[$prod->id])}}">Restore</a>
        <a href="{{route('permenentdelete',[$prod->id])}}">Permenent Delete</a>
    </td>
  </tr>
  @endforeach
</table>

</body>
</html>