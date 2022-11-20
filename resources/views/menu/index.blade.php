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
        <a href="{{route("verPlato", $item->idPla)}}" >ver plato</a>
        @endforeach
</body>
</html>