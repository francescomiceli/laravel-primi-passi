<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina principale</title>
</head>
<body>
    <section>
    <h1>Hello World</h1>

    <a href="{{url('/home')}}">Home</a>
    <a href="{{url('/contatti')}}">Contatti</a>
    <a href="{{url('/prodotti')}}">Prodotti</a>

    <br>
    <br>
    <hr>

    <h2>Questo è un array</h2>

    @php
        $array = ['Home','Contatti','Prodotti'];
    @endphp

    @foreach ($array as $item)
        {{$item}}
    @endforeach

<br>
<br>

    </section>


    <style>
        section{
            text-align: center;
        }
    </style>

</body>
</html>
