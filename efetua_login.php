<?php
session_start();

include 'conecta_banco/conexao.php';

if (isset($_POST['email'])) {
    $email = mysqli_real_escape_string($conn, trim($_POST['email']));
    $senha = mysqli_real_escape_string($conn, trim($_POST['senha']));


    $sql = "SELECT senha, nome from usuários where email = '{$email}'";

    $retorno = mysqli_query($conn, $sql);
    $dados = mysqli_fetch_assoc($retorno);
    
    if (mysqli_num_rows($retorno) == 1) {
        if (password_verify($senha, $dados['senha'])) {
            $_SESSION['usuario']= $dados['nome'];
            $_SESSION['sucesso'] = "Login realizado com sucesso!";
            header("Location: pag_inicial.php");
            exit();
        } else {
            $_SESSION['erro'] = "Senha não confere com o cadastro!";
            header("Location:  login.php");
            exit();
        }
    } else {
        $_SESSION['erro'] = "Não foi encontrado o email digitado!";
        header("Location:  login.php");
        exit();
    }
}
