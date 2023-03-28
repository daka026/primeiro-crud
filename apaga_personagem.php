<?php
session_start();
include 'conecta_banco/conexao.php';
if (isset($_GET['id'])) {
    if(!isset($_SESSION['usuario'])){
        $_SESSION['erro'] = "É necessário realizar login para poder fazer a operação";
        header("Location:  ../login.php");
        exit();
    }

    $sql = "Delete FROM personagens WHERE id_personagem = '$_GET[id]'";
    if (mysqli_query($conn, $sql)) {

        $_SESSION['sucesso'] = "Os dados do personagem foram apagados com sucesso!";
        header("Location:  ../lista_personagens.php");
        exit();
    } else {
        $_SESSION['erro'] = "Erro ao apagar os dados do personagem!";
        header("Location:  ../lista_personagens.php");
        exit();
    }
    mysqli_close($conn);
}
else{
    $_SESSION['erro'] = "Não foi enviado o id do personagem via url para ser apagado!";
    header("Location:  ../lista_personagens.php");
    exit();
}
