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
            <h2>{{$resultadosaude["nome"]}}</h2>
            <p>Idade: {{$resultadosaude["idade"]}}</p>
            <p>Peso: {{$resultadosaude["peso"]}}</p>
            <p>Altura: {{$resultadosaude["altura"]}}</p>
            <p>IMC: {{$resultadosaude["imc"]}} - {{$resultadosaude["classificacaoimc"]}}</p>
            <p>Horas de sono: {{$resultadosaude["sono"]}} - {{$resultadosaude["classificacaosono"]}}</p>
        </div>
    </main>
</body>
</html>