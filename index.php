<?php

include('config.php');
Mysql::conectar();

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

    <?php
        if(isset($_POST['acao']) && $_POST['form'] == 'f_form'){
            $nome = $_POST['nome'];
            $email = $_POST['email'];
            $senha = $_POST['senha'];

            if($nome == ''){
                Form::alert('erro','Preencha o campo Nome!');
            }else if($email == ''){
                Form::alert('erro','Preencha o campo E-mail!');
            }else if($senha == ''){
                Form::alert('erro','Preencha o campo Senha!');
            }else{
                Form::cadastrar($nome,$email,$senha);
                Form::alert('sucesso','Usuário '.$nome. 'cadastrado');
            
            }
        }
    
    ?>


        <img src="/img/5552120.jpg" alt="Logo">
        <!-- <img src=« img/5552120.jpg » /> -->
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