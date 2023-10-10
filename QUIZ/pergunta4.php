<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="perguntas.css">
    <title>Pergunta 4</title>
</head>
<body>
    <div class="cabecalho">
        <img src="logo.png" width = 70px>
        <h1>QUIZ de C#</h1>
    </div>
    <div class="conteudo">
        <form action="pergunta5.php"  method = "POST">
            <b>Qual é o operador de igualdade em C# que compara o valor e o tipo de duas variáveis?</b><br><br>
                <input type="radio" name="questao4" value="a"> a) ==<br>
                <input type="radio" name="questao4" value="b"> b) =<br>
                <input type="radio" name="questao4" value="c"> c) !=<br>
                <input type="radio" name="questao4" value="d"> d) ===<br>
                <div class="botao pergunta4">
                    <button type="submit" class = "btn btn-outline-dark btn-lg">Proxima Pergunta</button>
                </div> 
        </form>
    </div>

</body>
</html>

<?php

    session_start();
    $_SESSION['questao3'] = $_POST['questao3'];
   
    if ($_SESSION['questao3'] == "c") {
        $_SESSION['acertos']++;
    } else {
        $_SESSION['erros']++;
    }
?>