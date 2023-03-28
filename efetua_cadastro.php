<?php
session_start();
include 'conecta_banco/conexao.php';

if (isset($_POST['nome'])) {
    $nome = mysqli_real_escape_string($conn, trim($_POST['nome']));
    $email = mysqli_real_escape_string($conn, trim($_POST['email']));
    $senha = mysqli_real_escape_string($conn, trim($_POST['senha']));

    $sql = "SELECT senha from usuários where email = '{$email}'";
    
    $retorno = mysqli_query($conn, $sql);

    if (mysqli_num_rows($retorno) > 0) {
        $_SESSION['erro'] = "Já existe o email cadastrado!";
        header("Location:  cadastro.php");
        exit();
    }

    $senha_criptografada = password_hash($senha, PASSWORD_DEFAULT);
    $sql = "INSERT INTO usuários (nome, email, senha)
            VALUES ('$nome', '$email', '$senha_criptografada')";

    if (mysqli_query($conn, $sql)) {
        $_SESSION['sucesso'] = "Novo cadastro realizado com sucesso!";
        header("Location: login.php");
        exit();    
    } else {
        $_SESSION['erro'] = "Erro ao realizar o cadastro!";
        header("Location:  cadastro.php");
        exit();
    }
}
