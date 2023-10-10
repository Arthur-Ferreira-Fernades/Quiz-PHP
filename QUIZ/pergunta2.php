<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="perguntas.css">
    <title>Pergunta 2</title>
</head>
<body>
    <div class="cabecalho">
        <img src="logo.png" width = 70px>
        <h1>QUIZ de C#</h1>
    </div>
    <div class="conteudo">
        <form action="pergunta3.php" method = "POST">
            <b>Em C#, qual é a função da palavra-chave "using"?</b><br><br>
                <input type="radio" name="questao2" value="a"> a) Definir um novo namespace<br>
                <input type="radio" name="questao2" value="b"> b) Importar um namespace existente<br>
                <input type="radio" name="questao2" value="c"> c) Declarar uma classe estática<br>
                <input type="radio" name="questao2" value="d"> d) Criar um novo objeto<br>
                <div class="botao pergunta2">
                    <button type="submit" class = "btn btn-outline-dark btn-lg">Proxima Pergunta</button>
                </div>
        </form>
    </div>

</body>
</html>

<?php

    session_start();
    $_SESSION['questao1'] = $_POST['questao1'];

    $_SESSION['acertos'] = 0;
    $_SESSION['erros'] = 0;
    
    if ($_SESSION['questao1'] == "b") {
        $_SESSION['acertos']++;
    } else {
        $_SESSION['erros']++;
    }

?>