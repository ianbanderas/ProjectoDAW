<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <title>Document</title>
</head>

<body>
    <a href="{{route("menu", $idRes)}}" >menu</a>
    <a href="{{route("main")}}" >home</a>
    <a href="{{route("profile")}}" >profile</a>
    <a href="{{route("out")}}" >log out</a>

    <p>{{ $plato->nombre }}</p>
    <p>{{ $plato->descripcion }}</p>

    <p>{{ $comentario }}</p>

    <div class="form-group required">
        <div class="col-sm-12">

            @for ($i = 0; $i < 10; $i++)
                <label class="star star-5" for="star-5">
                    @if ($i < $valoracion)
                        <i class="bi bi-star-fill"></i>
                    @else
                        <i class="bi bi-star"></i>
                    @endif
                </label>
            @endfor
        </div>
    </div>

</body>

</html>
