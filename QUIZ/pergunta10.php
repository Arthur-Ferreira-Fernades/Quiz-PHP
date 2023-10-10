<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="perguntas.css">
    <title>Pergunta 10</title>
</head>
<body>
    <div class="cabecalho">
        <img src="logo.png" width = 70px>
        <h1>QUIZ de C#</h1>
    </div>
    <div class="conteudo">
        <form action="relatorio.php" method = "POST">
            <b>Qual é o operador usado para realizar uma operação de "OU exclusivo" (XOR) em C#?</b><br><br>
                <input type="radio" name="questao10" value="a"> a) |<br>
                <input type="radio" name="questao10" value="b"> b) &&<br>
                <input type="radio" name="questao10" value="c"> c) ^<br>
                <input type="radio" name="questao10" value="d"> d) !<br>
                <div class="botao pergunta10">
                    <button type="submit"  class = "btn btn-outline-success btn-lg">Finalizar QUIZ</button>
                </div>
        </form>
    </div>
</body>
</html>

<?php

    session_start();
    $_SESSION['questao9'] = $_POST['questao9'];
   
    if ($_SESSION['questao9'] == "b") {
        $_SESSION['acertos']++;
    } else {
        $_SESSION['erros']++;
    }
?>