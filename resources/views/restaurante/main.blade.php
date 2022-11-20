<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <title>Document</title>
</head>
<body>

    <a href="{{route("profile")}}" >profile</a>
    <a href="{{route("out")}}" >log out</a>
    

    @foreach($restaurante as $item) 
        <p>{{$item}}</p>
        <a href="{{route("menu", $item->idRes)}}" >menu</a>
    @endforeach

   

</body>
</html>