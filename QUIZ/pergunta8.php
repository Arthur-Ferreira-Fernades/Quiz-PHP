<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="perguntas.css">
    <title>Pergunta 8</title>
</head>
<body>
    <div class="cabecalho">
        <img src="logo.png" width = 70px>
        <h1>QUIZ de C#</h1>
    </div>
    <div class="conteudo">
        <form action="pergunta9.php"  method = "POST">
            <b>Qual é a classe base de todas as classes no namespace System em C#?</b><br><br>
                <input type="radio" name="questao8" value="a"> a) Object<br>
                <input type="radio" name="questao8" value="b"> b) BaseClass<br>
                <input type="radio" name="questao8" value="c"> c) RootClass<br>
                <input type="radio" name="questao8" value="d"> d) MainClass<br>
                <div class="botao pergunta8">
                    <button type="submit"  class = "btn btn-outline-dark btn-lg">Proxima Pergunta</button>
                </div>
        </form>
    </div>
</body>
</html>

<?php

    session_start();
    $_SESSION['questao7'] = $_POST['questao7'];
   
    if ($_SESSION['questao7'] == "c") {
        $_SESSION['acertos']++;
    } else {
        $_SESSION['erros']++;
    }
?>