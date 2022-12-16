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
    <a href="{{route("main")}}" >home</a>
    <a href="{{route("profile")}}" >profile</a>
    <a href="{{route("out")}}" >log out</a>

        @if($prop == true)
            <form action="{{route('addPla')}}">
                <input type="hidden" name="idRes" value="{{$idRes}}"/>
                <input type="text" name="name"/>
                <input type="text" name="desc"/>
                <button>añadir</button>
            </form>
        @endif
        @foreach($platos as $item) 
        <p>{{$item}}</p>
        <a href="{{route("verPlato", ["idPla"=>$item->idPla, "idRes"=>$idRes])}}" >ver plato</a>
        @endforeach
</body>
</html>