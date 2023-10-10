<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="perguntas.css">
    <title>Pergunta 1</title>
</head>
<body>
    <div class="cabecalho">
        <img src="logo.png" width = 70px>
        <h1>QUIZ de C#</h1>
    </div>
    <div class="conteudo">
        <form action="pergunta2.php" method = "POST">
            <b>Qual é a palavra-chave em C# usada para declarar uma variável constante?</b><br><br>
                <input type="radio" name="questao1" value="a"> a) constante<br>
                <input type="radio" name="questao1" value="b"> b) readonly<br>
                <input type="radio" name="questao1" value="c"> c) static<br>
                <input type="radio" name="questao1" value="d"> d) final<br>
                <div class="botao pergunta1">
                    <button type="submit" class = "btn btn-outline-dark btn-lg" >Proxima Pergunta</button>
                </div>
        </form>
    </div>
</body>
</html>
<?php
    session_start();
    $_SESSION['nome'] = $_POST['nome'];
    $_SESSION['sobrenome'] = $_POST['sobrenome'];
?>
