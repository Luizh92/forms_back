<?php

include('config.php');
Mysql::instagram();

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="form_cd">
        <!-- <img src="/img/5552120.jpg" alt="Logo"> -->
        <h2>Cadastro de Usuário</h2>
        <form method="post">
            <div><input type="text" name="nome" placeholder="Nome"></div>
            <div><input type="text" name="email" placeholder="E-mail"></div>
            <div><input type="text" name="senha" placeholder="Senha"></div>
            <div><input type="submit" name="acao" value="Cadastrar"></div>
            <div><input type="hidden" name="form" value="f_form"></div>

        </form>
    </div>

</body>

</html>