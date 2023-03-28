<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <title>Personagens</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="shortcut icon" href="imagens/DD - icon.ico" type="image/x-icon">

  <style>
    body {
      background-image: url(imagens/fundo.jpg);
      background-repeat: no-repeat;
      background-size: 100%;
    }

    a:link {
      color: black;
    }

    a:hover {
      color: black;
    }

    a:visited {
      color: black;
    }

    h1 {
      color: black;
    }

    h2 {
      color: black;
    }
  </style>
</head>

<body>
  <?php include "menu.php" ?>
  <div class="container">
    <br>
    <h1 class="text-center">Listagem de Personagens</h1>

    <?php
    if (isset($_SESSION['erro'])) {
      echo "<div class='alert alert-danger'>
        <p> $_SESSION[erro] </p>
      </div> ";
      unset($_SESSION['erro']);
    }
    if (isset($_SESSION['sucesso'])) {
      echo "<div class='alert alert-success'>
          <p> $_SESSION[sucesso] </p>
      </div> ";
      unset($_SESSION['sucesso']);
    }
    ?>

    <a href='cadastra_personagem.php' style="white">
      <span class="material-icons">
        add_box</span>
      Adicionar um novo personagem
    </a>

  </div>
  <div class="container">

    <h2>Listagem dos personagens cadastrados</h2>
    <div class="row">
      <?php
      include 'conecta_banco/conexao.php';

      $sql = "SELECT * FROM personagens";
      $result = mysqli_query($conn, $sql);

      while ($row = mysqli_fetch_assoc($result)) {
      ?>
        <div class="col-md-3 mt-5">
          <div class="card border-0 bg-light">
            <div class="card-body">
              <div class="card-body">
                <h5 class="card-tittle"><b>Nome</b></h5>
                <?php echo "<p class='card-text'>$row[Nome]</p>"; ?>

                <h5 class="card-tittle"><b>Raça</b></h5>
                <?php echo "<p class='card-text'>$row[Raça]</p>"; ?>

                <h5 class="card-tittle"><b>Classe</b></h5>
                <?php echo "<p class='card-text'>$row[Classe]</p>"; ?>

                <?php
                echo "
                <p class='card-text'>
                  <a href='apaga_personagem.php/?id=$row[id_personagem]'>
                    <span class='material-icons'>delete</span> Apagar
                  </a>
                </p>";

                echo "
                <p class='card-text'>
                  <a href='atualiza_personagem.php/?id=$row[id_personagem]'>
                      <span class='material-icons'>edit</span> Editar
                  </a>
                </p>";
                ?>
              </div>
            </div>
          </div>
        </div>
      <?php
      }
      ?>
      <div>
      </div>
</body>
</html>