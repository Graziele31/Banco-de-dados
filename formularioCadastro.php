<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Formulário de cadastro</title>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <!-- Popper JS -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    </head>
    <body>
        <div class="container" style="background: #9999ff" >
            <h1>Formulário de cadastro</h1>
            <form method="POST" action="MYSQLI/preparedStatementsMYSQLI.php">
                <div class="form-group">
                    <label>Primeiro Nome: </label>
                    <input class="form-control" type="text" name="firstname" placeholder="Escreva seu primeiro nome">
                </div>
                <div class="form-group">
                    <label>Último nome: </label>
                    <input class="form-control" type="text" name="lastname" placeholder="Escreva seu sobrenome">
                </div>
                <div class="form-group">
                    <label>E-mail: </label>
                    <input class="form-control" type="email" name="email" placeholder="xxxxxxx@xxxxxx.com">
                </div>
                <button type="button" class="btn btn-success">Cadastrar</button>
            </form>
    </body>
</html>
