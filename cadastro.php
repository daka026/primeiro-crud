<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bem-Vindo</title>


    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <link rel="shortcut icon" href="imagens/DD - icon.ico" type="image/x-icon">

    <style>
        body {
            background-image: url(imagens/fundo.jpg);
            background-repeat: no-repeat;
            background-size: 100%;
        }

        section {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 43vh;
        }

        form input,
        form textarea {
            min-width: 400px;
        }

        h1{
            
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 45px;
        }
    </style>
</head>

<body>
    <?php include "menu.php" ?>

    <?php
    if (isset($_SESSION['erro'])) {
        echo "<div class='alert alert-danger'>
            <p> $_SESSION[erro] </p>
        </div> ";
        unset($_SESSION['erro']);
    }
    ?>

    <br><br>
    
    <h1>Cadastro de usuário</h1>

    <section>
        <form action="efetua_cadastro.php" method="POST">

            <div class="form-group">
                <label for="nome"><b>Nome</b></label>
                <input type="text" class="form-control" id="nome" name="nome" required>
            </div>

            <div class="form-group">
                <label for="email"><b>E-mail</b></label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>

            <div class="form-group">
                <label for="senha"><b>Senha</b></label>
                <input type="password" class="form-control" id="senha" name="senha" required>
            </div>

            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>

    </section>

</body>

</html>