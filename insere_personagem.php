<?php

session_start();

include 'conecta_banco/conexao.php';
if(isset($_POST['nome']))
{
    $nome = mysqli_real_escape_string($conn, trim($_POST['nome']));
    $raca = mysqli_real_escape_string($conn, trim($_POST['raca']));
    $classe = mysqli_real_escape_string($conn, trim($_POST['classe']));

    $sql = "INSERT INTO personagens (nome, raça, classe)
    VALUES ('$nome', '$raca', '$classe')";
    
    if (mysqli_query($conn, $sql)) {
        $_SESSION['sucesso'] = "Novo personagem adicionado com sucesso!";
        header("Location:  lista_personagens.php");
        exit();
    } else {
        $_SESSION['erro'] = "Erro ao inserir o personagem!";
        header("Location:  cadastra_personagem.php");
        exit();
    }
    mysqli_close($conn);

}

?>
