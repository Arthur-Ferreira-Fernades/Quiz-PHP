<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="index.css">
    <title>QUIZ</title>
</head>
<body>
    <div class="cabecalho">
        <img src="logo.png" width = 70px>
        <h1>QUIZ de C#</h1>
    </div>
    <div class="conteudo">
        <div class="row">
            <div class="card-inicio">
                <div class="card">
                    <div class="card-header ">
                        Dados QUIZ
                    </div>
                    <div class="card-body">
                        <form action="pergunta1.php" method = "POST">
                            <div class="form-group">
                                <input type="text" name = "nome" placeholder="Digite Seu nome"><br>
                            </div>
                            <div class="form-group my-3">
                                <input type="text" name = "sobrenome" placeholder="Digite Seu sobrenome"><br>
                            </div>
                            <div class="d-grid gap-1 col-20 mt-3 me-4">
                                <button type="submit" class="btn btn-outline-dark btn-lg ms-4">Iniciar QUIZ</button>
                            </div>
                        </form>
                    </div>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
</body>
</html>
