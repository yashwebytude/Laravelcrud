<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Items Form</title>
</head>
<body>
    <form action="{{route('subcategory')}}" method="post">
        @csrf
        <div>
            <select name="vegid" id="">
                <option>Select</option>
                @foreach($category as $cate)
                <option value="{{$cate->id}}" >{{$cate->name}}</option>
                @endforeach
            </select>
            <br><br>
            <input type="text" name="itemname" placeholder="Item Name"><br><br>
            <input type="submit">
        </div>
    </form>
</body>
</html>