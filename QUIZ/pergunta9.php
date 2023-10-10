<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="perguntas.css">
    <title>Pergunta 9</title>
</head>
<body>
    <div class="cabecalho">
        <img src="logo.png" width = 70px>
        <h1>QUIZ de C#</h1>
    </div>
    <div class="conteudo">
        <form action="pergunta10.php"  method = "POST">
            <b class = "meio2">O que é o garbage collector em C#?</b><br><br>
                <input type="radio" name="questao9" value="a"> a) Um coletor de lixo que remove código morto do programa.<br>
                <input type="radio" name="questao9" value="b"> b) Um mecanismo que coleta e libera automaticamente a memória não utilizada.<br>
                <input type="radio" name="questao9" value="c"> c) Um compilador que otimiza o código durante a compilação.<br>
                <input type="radio" name="questao9" value="d"> d) Uma classe que gerencia os arquivos de log do programa.<br>
                <div class="botao pergunta9">
                    <button type="submit"  class = "btn btn-outline-dark btn-lg">Proxima Pergunta</button>
                </div>
        </form>
    </div>
</body>
</html>

<?php

    session_start();
    $_SESSION['questao8'] = $_POST['questao8'];
   
    if ($_SESSION['questao8'] == "a") {
        $_SESSION['acertos']++;
    } else {
        $_SESSION['erros']++;
    }

?>