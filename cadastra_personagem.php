<?php
session_start();
if(!isset($_SESSION['usuario'])){
    $_SESSION['erro'] = "É necessário realizar login para poder fazer a operação";
    header("Location:  login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <link rel="shortcut icon" href="imagens/DD - icon.ico" type="image/x-icon">
    
    <title> Criação de Personagem </title>

    <style>
        body {
            background-image: url(imagens/fundo.jpg);
            background-repeat: no-repeat;
            background-size: 100%;
        }

        h1 {
            padding: 40px;
        }

        section {
            display: flex;
            text-align: center;
            padding: 20px;
            justify-content: space-between;
            flex-direction: column;
            font-size: x-large;
        }

        label {
            background-color: white;
            border-radius: 20px;
            padding: 7px;
        }
    </style>
</head>

<body>
<?php include "menu.php"?>
    <div class="container">
    <h1 class="text-center">Criação de um novo Personagem</h1>
    <?php 
    if(isset($_SESSION['erro'])){
      echo "<div class='alert alert-danger'>
        <p> $_SESSION[erro] </p>
      </div> ";
      unset($_SESSION['erro']);
    }
  ?>
        <form method="POST" action="insere_personagem.php" enctype="multipart/form-data">
            <div class="form-group">
                <label for="pwd"><b>Nome:</b></label>
                <input type="text" class="form-control" name="nome" required>
            </div>
            
            <div class="form-group">
                <label for="pwd"><b>Raça:</b></label>
                <input type="textarea" class="form-control" name="raca" required>
            </div>

            <div class="form-group">
                <label for="pwd"><b>Classe:</b></label>
                <input type="textarea" class="form-control" name="classe" required>
            </div>

            <input class='btn btn-secondary' type="reset" value="Limpar">
            <input class='btn btn-primary' type="submit" name="submit" value="Enviar">
        </form>
    </div>
</body>
</html>