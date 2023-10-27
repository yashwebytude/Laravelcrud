<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
</head>
<body>
    <form action="{{route('update',[$subject->id])}}" method="post">
    @csrf
        <div>
            <input type="text" name="name" id="" value="{{$subject->name}}"><br><br>
            <input type="text" name="price" id="" value="{{$subject->price}}"><br><br>
            <input type="submit" >
        </div>
    </form>
</body>
</html>