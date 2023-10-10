<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="perguntas.css">
    <title>Pergunta 5</title>
</head>
<body>
    <div class="cabecalho">
        <img src="logo.png" width = 70px>
        <h1>QUIZ de C#</h1>
    </div>
    <div class="conteudo">
        <form action="pergunta6.php"  method = "POST">
            <b>Qual é a diferença entre um método virtual e um método abstrato em C#?</b><br><br>
                <input type="radio" name="questao5" value="a"> a) Métodos virtuais têm implementações padrão, métodos abstratos não.<br>
                <input type="radio" name="questao5" value="b"> b) Métodos abstratos podem ser sobrescritos, métodos virtuais não.<br>
                <input type="radio" name="questao5" value="c"> c) Métodos virtuais são privados, métodos abstratos são públicos.<br>
                <input type="radio" name="questao5" value="d"> d) Não há diferença entre eles.<br>
                <div class="botao pergunta5">
                    <button type="submit" class = "btn btn-outline-dark btn-lg">Proxima Pergunta</button>
                </div>
        </form>
    </div>

</body>
</html>

<?php

    session_start();
    $_SESSION['questao4'] = $_POST['questao4'];
   
    if ($_SESSION['questao4'] == "a") {
        $_SESSION['acertos']++;
    } else {
        $_SESSION['erros']++;
    }
?>