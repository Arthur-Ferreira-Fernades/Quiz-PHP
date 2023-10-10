<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="perguntas.css">
    <title>Pergunta 3</title>
</head>
<body>
    <div class="cabecalho">
        <img src="logo.png" width = 70px>
        <h1>QUIZ de C#</h1>
    </div>
    <div class="conteudo">
        <form action="pergunta4.php" method = "POST"> 
            <b>Qual é a principal diferença entre uma classe abstrata e uma interface em C#?</b><br><br>
                <input type="radio" name="questao3" value="a"> a) Classes abstratas suportam herança múltipla, interfaces não.<br>
                <input type="radio" name="questao3" value="b"> b) Interfaces podem conter implementações de métodos, classes abstratas não.<br>
                <input type="radio" name="questao3" value="c"> c) Classes abstratas não podem ser instanciadas, interfaces podem.<br>
                <input type="radio" name="questao3" value="d"> d) Interfaces não podem conter propriedades, classes abstratas podem.<br>
                <div class="botao pergunta3">
                    <button type="submit" class = "btn btn-outline-dark btn-lg">Proxima Pergunta</button>
                </div>
        </form>
    </div>
</body>
</html>

<?php
    session_start();
    $_SESSION['questao2'] = $_POST['questao2'];
   
    if ($_SESSION['questao2'] == "b") {
        $_SESSION['acertos']++;
    } else {
        $_SESSION['erros']++;
    }
?>