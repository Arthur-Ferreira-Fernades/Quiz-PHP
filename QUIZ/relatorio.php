<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="relatorio.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Relatorio</title>
</head>
<body>
    <div class="cabecalho">
        <img src="logo.png" width = 70px>
        <h1>QUIZ de C#</h1>
    </div>
    <div class="conteudo text-center">
        <div class="row">
            <div class="col">
                <h1>Gabarito</h1>
                <div class="row">
                    <div class="col">
                        <?php
                            $_SESSION['questao10'] = $_POST['questao10'];

                            if ($_SESSION['questao1'] == "b") {
                            echo ("Parabens Você acertou a questao 1<br>");
                            } else {
                            echo ("Você errou a questao 1<br>");
                            echo ("A resposta certa seria a alternativa B<br>");
                            }

                            if ($_SESSION['questao2'] == "b") {
                            echo ("Parabens Você acertou a questao 2<br>");
                            } else {
                            echo ("Você errou a questao 2<br>");
                            echo ("A resposta certa seria a alternativa B<br>");
                            }

                            if ($_SESSION['questao3'] == "c") {
                            echo ("Parabens Você acertou a questao 3<br>");
                            } else {
                            echo ("Você errou a questao 3<br>");
                            echo ("A resposta certa seria a alternativa C<br>");
                            }

                            if ($_SESSION['questao4'] == "a") {
                            echo ("Parabens Você acertou a questao 4<br>");
                            } else {
                            echo ("Você errou a questao 4<br>");
                            echo ("A resposta certa seria a alternativa A<br>");
                            }

                            if ($_SESSION['questao5'] == "a") {
                            echo ("Parabens Você acertou a questao 5<br>");
                            } else {
                            echo ("Você errou a questao 5<br>");
                            echo ("A resposta certa seria a alternativa A<br>");
                            }
                        ?>
                    </div>
                    <div class="col">
                        <?php
                            if ($_SESSION['questao6'] == "a") {
                                echo ("Parabens Você acertou a questao 6<br>");
                            } else {
                                echo ("Você errou a questao 6<br>");
                                echo ("A resposta certa seria a alternativa A<br>");
                            }

                            if ($_SESSION['questao7'] == "c") {
                                echo ("Parabens Você acertou a questao 7<br>");
                            } else {
                                echo ("Você errou a questao 7<br>");
                                echo ("A resposta certa seria a alternativa C<br>");
                            }

                            if ($_SESSION['questao8'] == "a") {
                                echo ("Parabens Você acertou a questao 8<br>");
                            } else {
                                echo ("Você errou a questao 8<br>");
                                echo ("A resposta certa seria a alternativa A<br>");
                            }

                            if ($_SESSION['questao9'] == "b") {
                                echo ("Parabens Você acertou a questao 9<br>");
                            } else {
                                echo ("Você errou a questao 9<br>");
                                echo ("A resposta certa seria a alternativa B<br>");
                            }

                            if ($_SESSION['questao10'] == "c") {
                                $_SESSION['acertos']++;
                                echo ("Parabens Você acertou a questao 10");
                            } else {
                                echo ("Você errou a questao 10<br>");
                                echo ("A resposta certa seria a alternativa C<br>");
                                $_SESSION['erros']++;
                            }
                        ?>
                    </div>
                    
                </div>
            </div>
            <div class="col">
                <div class="container">
                    <h1>Notas</h1>
                    <?php
                        
                        $porcentualAcertos = $_SESSION['acertos']/10*100;
                        $porcentualErros = $_SESSION['erros']/10*100;

                        echo("Você <font color = '#00CC00'> acertou: ".$_SESSION['acertos']." </font>questões<br>");
                        echo ("Seu porcentual de <font color = '#00CC00'> acertos foi: ".$porcentualAcertos."%</font><br><br>");

                        echo("Você <font color = '#FF0000'> errou: ".$_SESSION['erros']." </font>questões<br>");
                        echo ("Seu porcentual de <font color = '#FF0000'>erros foi: ".$porcentualErros."%</font><br><br>");
                    ?>
                </div>         
            </div>
            <div class="row mt-5">
            <div class="col">
                <form action="index.php">
                    <button type="submit" class="btn btn-outline-dark btn-lg">Refazer QUIZ</button>
                </form>
            </div>
        </div>
        </div>
    </div>
</body>
</html>

<?php
    session_abort();
?>


