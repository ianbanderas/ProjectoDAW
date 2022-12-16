<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <title>Document</title>
</head>
<header>
    <a class="button_a" href="{{route("profile")}}" >{{__("message.profile")}}</a>
     <form method="post" action="{{route("cat")}}">
    @csrf
    <select name="cat">
        @foreach ($cat as $item)
            <option>
                {{$item}}
            </option>
        @endforeach
     </select>
     <button>envioning</button>
     </form>
     <form method="post" action="{{route("ciu")}}">
    @csrf
    <select name="ciudad">
        @foreach ($ciudad as $item)
            <option value="{{$item->idCiu}}">
                {{$item->nombre}}
            </option>
        @endforeach
     </select>
     <button>envioning</button>
     </form>
    <a class="button_a" href="{{route("out")}}" >{{__("message.logOut")}}</a>
    <a class="button_a" id="logOut" href="{{route("cambiarIdioma")}}">{{__("message.language")}}</a>
   
</header>
<body>
    
    <section class="flex-container">
    @if (isset($mensaje))
        <h1>lo sentimos no hay restaurantes en su zona, múdese o cocine</h1>
    @endif
    @foreach($restaurante as $item) 
    <div class="box">
        {{$item}}
        <a href="{{route("menu", $item->idRes)}}" >menu</a>
    </div>
        @endforeach

    </section>
   
    
</body>
    <footer>
        Ián Banderas Tomillo
    </footer>
</html>