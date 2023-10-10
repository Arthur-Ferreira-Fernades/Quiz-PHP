<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="perguntas.css">
    <title>Pergunta 7</title>
</head>
<body>
    <div class="cabecalho">
        <img src="logo.png" width = 70px>
        <h1>QUIZ de C#</h1>
    </div>
    <div class="conteudo">
        <form action="pergunta8.php"  method = "POST">
            <b class = "meio">O que é um evento em C#?</b><br><br>
                <input type="radio" name="questao7" value="a"> a) Uma variável que armazena um valor inteiro.<br>
                <input type="radio" name="questao7" value="b"> b) Um método que pode ser sobrescrito em classes derivadas.<br>
                <input type="radio" name="questao7" value="c"> c) Um mecanismo que permite que uma classe notifique outras classes quando algo acontece.<br>
                <input type="radio" name="questao7" value="d"> d) Uma estrutura de controle de fluxo condicional.<br>
                <div class="botao pergunta7">
                    <button type="submit" class = "btn btn-outline-dark btn-lg">Proxima Pergunta</button>
                </div>
        </form>
    </div>
</body>
</html>

<?php

    session_start();
    $_SESSION['questao6'] = $_POST['questao6'];
   
    if ($_SESSION['questao6'] == "a") {
        $_SESSION['acertos']++;
    } else {
        $_SESSION['erros']++;
    }
?>