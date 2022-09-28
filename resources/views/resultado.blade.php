<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css">
    <title>Resultado IMC</title>
</head>
<body>
    <main>
        <h2>Resultado do Cálculo de IMC</h2>
        <div>
            <h2>{{$resultadoimc["nome"]}}</h2>
            <p>Idade: {{$resultadoimc["idade"]}}</p>
            <p>Peso: {{$resultadoimc["peso"]}}</p>
            <p>Altura: {{$resultadoimc["altura"]}}</p>
            <p>IMC: {{$resultadoimc["imc"]}} - {{$resultadoimc["classificacaoimc"]}}</p>
        </div>
        <a href="{{url('/')}}">Voltar</a>
    </main>
</body>
</html>