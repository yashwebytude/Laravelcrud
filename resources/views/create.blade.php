<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create</title>
</head>
<body>
    <form action="{{route('store')}}" method="post">
    @csrf
        <div>
            <input type="text" name="name" id="" placeholder="Product Name"><br><br>
            <input type="text" name="price" id="" placeholder="Product Price"><br><br>
            <input type="submit">
        </div>
    </form>
</body>
</html>