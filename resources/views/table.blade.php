<!DOCTYPE html>
<html>

<head>
  <style>
    table {
      font-family: arial, sans-serif;
      border-collapse: collapse;
      width: 100%;
    }

    td,
    th {
      border: 1px solid #dddddd;
      text-align: left;
      padding: 8px;
    }

    tr:nth-child(even) {
      background-color: #dddddd;
    }
  </style>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>

  <h2>Product Table</h2>
  <button class="" data-toggle="tooltip" data-placement="top" title="Add New">
    <a href="{{route('create')}}">Add new</a>
  </button>

  <button class="" data-toggle="tooltip" data-placement="top" title="Deleted Entry">
    <a href="{{route('deleteentry')}}">Deleted Entry</a>
  </button>

  <table>
    <tr>
      <th>Product Id</th>
      <th>Product Name</th>
      <th>Product Price</th>
      <th>Quntity</th>
      <th>Actions</th>
    </tr>
    @foreach($product as $prod)
    <tr>
      <td>{{$prod->id}}</td>
      <td>{{$prod->name}}</td>
      <td>{{$prod->price}}</td>
      <td>{{$prod->quntity}}</td>
      <td>
        <a href="{{route('read',[$prod->id])}}" target="_blank" data-toggle="tooltip" data-placement="top" title="Read"><i class="fa fa-eye" aria-hidden="true"></i></a>
        <a href="{{route('edit',[$prod->id])}}" target="_blank" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-pencil" aria-hidden="true"></i></a>
        <a href="{{route('delete',[$prod->id])}}" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-trash" aria-hidden="true"></i></a>
      </td>
    </tr>
    @endforeach
  </table>
</body>
</html>