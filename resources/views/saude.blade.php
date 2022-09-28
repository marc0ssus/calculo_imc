<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculo de IMC</title>
    <link rel="stylesheet" type="text/css">
</head>
<body>
    <main>
        <div class="painel">
            <h2>Cáculo de Índice de Massa Corporal</h2>
            <div class="conteudo-painel">
            <form action="{{url('/imc')}}" method="get">
                <label id="nome" for="nome">Nome:</label>
                <input type="text" name="nome" placeholder="Informe seu nome" required><br/>
                <label id="datanascimento" for="datanascimento">Data de Nascimento:</label>
                <input type="date" name="datanascimento" placeholder="Informe sua data de nascimento" required><br/>
                <label id="peso" for="peso">Peso:</label>
                <input type="number" step="0.01" name="peso" placeholder="Informe seu peso" required><br/>
                <label id="altura" for="altura">Altura:</label>
                <input type="number" name="altura" step="0.01" placeholder="Informe sua altura" required><br/>
                <br/>
                <button type="submit">Enviar</button>
            </form>
            </div>
        </div>
    </main>
</body>
</html>