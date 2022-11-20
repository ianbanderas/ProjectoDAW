<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="{{route("out")}}" >log out</a>
    <a href="{{route("main")}}" >home</a>
    
    <form action="{{route('addRes')}}">
        <select name="formCiu">
        @foreach ($ciudad as $item)
            <option value="{{$item->idCiu}}">
                {{$item["nombre"]}}
            </option>
        @endforeach
        
        </select>

        <input name="formRes" type="text" />
        <button>enviar</button>
    </form>

    <p>Nombre Usuario:   {{Auth::user()->nombre}}</p>
    <form action="{{route('changePass')}}"> 
        <input name="changePass" type="text" placeholder="Nueva Contraseña"/>
        <button>enviar</button>
    </form>

     @foreach($restaurante as $item) 
        <p>{{$item}}</p>
        <a href="{{route("borrar",$item->idRes)}}">Borrar</a>
    @endforeach
</body>
</html>