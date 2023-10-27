<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create</title>
</head>
<body>
    <form action="{{route('store1')}}" method="post">
    @csrf
        <div>
            <input type="hidden" name="id" value="{{$product->id}}">
            <input type="text" name="quntity" value="" placeholder="Color"><br><br>
            <input type="submit">
        </div>
    </form>
</body>
</html>