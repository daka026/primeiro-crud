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
    <link rel="shortcut icon" href="imagens/DD - icon.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

    <style>
        body {
            margin: 0;
            background-image: url(imagens/fundo.jpg);
            background-repeat: no-repeat;
            background-size: 100%;
        }

        p {
            background-color: white;
            border-radius: 20px;
            padding: 15px;
            margin: 0;
        }
        section {
            padding: 40px;
        }
    </style>
</head>

<body>
    <?php include "menu.php" ?>

    <section>
    <p>
            Nosso site tem como objetivo organizar em uma base de dados todos seus personagens para campanhas de RPG (estilo D&D 5e), seja para você mestre
            ou player que esteja com dificuladades em organizar seu personagens. <br><br>

            <b>OPÇÕES DE RAÇA: </b> Anões, Elfos, Humanos e Orcs. <br><br>

            <b>Anões</b> <br>

            Audazes e resistentes, os anões são conhecidos como hábeis guerreiros, mineradores e trabalhadores
            em pedra e metal. Embora tenham menos de 1,50 metro de altura, os anões são tão largos e compactos que
            podem pesar tanto quanto um humano 60 centímetros mais alto. <br><br>

            <b>Elfos</b> <br>
            Elfos são um povo mágico de graça sobrenatural, vivendo no mundo sem pertencer
            inteiramente à ele. Eles vivem em lugares de beleza etérea, no meio de antigas florestas
            ou em torres prateadas brilhando com luz feérica, onde uma música suave ecoa através do ar e
            fragrâncias suaves flutuam na brisa. <br><br>

            <b>Humanos</b> <br>
            Os humanos são os mais adaptáveis, flexíveis e ambiciosos entre todas as raças comuns.
            Eles têm amplos e distintos gostos, moralidades e hábitos nas muitas diferentes regiões onde eles se instalaram. <br><br>

            <b>Orcs</b> <br>
            Orcs são incursores selvagens e saqueadores com posturas encurvadas,
            testas baixas e faces de porco com caninos inferiores proeminentes que se assemelham a presas de um javali. <br><br>

            <b>Para acessar as classes criáveis do d&d 5e, acesse este link:</b> <br>
            <a href="https://jogaod20.com/2020/08/29/todas-classes-arquetipos-racas-dnd5e/">Classes D&D 5e</a> <br><br>

            <b>OBS: Para acessar a área de criação de personagens é necessário já ter login no nosso site.</b>
        </p>
    </section>
</body>

</html>