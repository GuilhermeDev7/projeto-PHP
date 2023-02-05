<?php

include("conexao.php");

$erro = "";

if(count($_POST) > 1) {

        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $senha = password_hash($_POST['senha'], PASSWORD_DEFAULT);

        if(empty($nome)) {
                echo  "Campo nome é obrigatorio";
        }

        if(!empty($email) && !filter_var($email, FILTER_VALIDATE_EMAIL)) {
                echo  "Email invalido, tente novamente :)";
        };

        if(empty($senha)) {
                echo  "É necessario preencher o campo senha";
        }

        if($erro) {
                echo "Houve algum erro na conexao entre o banco de dados e
                o seu cadastro, tente novamente mais tarde!";
        } else {
                $sql_code = "INSERT INTO clientes(nome, email, senha) VALUES (
                        '$nome', '$email','$senha')";
                $mysqli->query($sql_code) or die($mysqli->error);
                header("Location: login.php");
                
        }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;700&family=Open+Sans:wght@400;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="index.css">
        <title>Cadastro</title>
</head>
<body>
        <div class="container">
               
                <form class="formulario" method="POST">

                        <h2 class="cadastrar">Cadastrada-se aqui</h2>
                        <label>Nome</label><br>
                        <input type="text" name="nome"><br>

                        <label>Email</label><br>
                        <input type="text" name="email"><br>

                        <label>Senha</label><br>
                        <input type="password" name="senha"><br><br>

                        <button class="submit" type="submit">Cadastrar</button>
                        
                        <button class="submit"><a class="link" href="login.php">Login</a></button>
                </form>
                
        </div>
</body>
</html>