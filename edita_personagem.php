<?php
include 'conecta_banco/conexao.php';
if(isset($_POST['nome']))
{
    $sql = "SELECT * FROM personagens where id_personagem = $_GET[id]";
    $imagem = mysqli_fetch_assoc(mysqli_query($conn, $sql));

    $nome = mysqli_real_escape_string($conn, trim($_POST['nome']));
    $raca = mysqli_real_escape_string($conn, trim($_POST['raca']));
    $classe = mysqli_real_escape_string($conn, trim($_POST['classe']));

    

    $sql = "UPDATE personagens SET Nome='$nome',Raça='$raca',Classe='$classe' WHERE id_personagem='$_GET[id]'";
    
    if (mysqli_query($conn, $sql)) {

        $_SESSION['sucesso'] = "Os dados do personagem foram atualizados com sucesso!";
        header("Location:  ../lista_personagens.php");
        exit();
    } else {
        $_SESSION['erro'] = "Erro ao atualizar os dados do personagem!";
        header("Location:  ../lista_personagens.php");
        exit();
    }
    mysqli_close($conn);

}

?>
