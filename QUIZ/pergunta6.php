<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="perguntas.css">
    <title>Pergunta 6</title>
</head>
<body>
    <div class="cabecalho">
        <img src="logo.png" width = 70px>
        <h1>QUIZ de C#</h1>
    </div>
    <div class="conteudo">
        <form action="pergunta7.php"  method = "POST">
            <b>Em C#, qual é o objetivo do operador "as"?</b><br><br>
                <input type="radio" name="questao6" value="a"> a) Converter um tipo de dado para outro.<br>
                <input type="radio" name="questao6" value="b"> b) Comparar dois valores booleanos.<br>
                <input type="radio" name="questao6" value="c"> c) Realizar operações matemáticas.<br>
                <input type="radio" name="questao6" value="d"> d) Verificar a igualdade de dois objetos.<br>
                <div class="botao pergunta6">
                    <button type="submit" class = "btn btn-outline-dark btn-lg">Proxima Pergunta</button>
                </div>
        </form>
    </div>
</body>
</html>

<?php

    session_start();
    $_SESSION['questao5'] = $_POST['questao5'];
   
    if ($_SESSION['questao5'] == "a") {
        $_SESSION['acertos']++;
    } else {
        $_SESSION['erros']++;
    }
?>