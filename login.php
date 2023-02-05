<?php

include("conexao.php");

if(isset($_POST['email'])) {
       
        
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        $sql_code = "SELECT * FROM clientes WHERE email = '$email' LIMIT 1";
        $sql_exec = $mysqli->query($sql_code) or die($mysqli->error);

        $usuario = $sql_exec->fetch_assoc();
        if(password_verify($senha, $usuario['senha'])) {
                if(!isset($_SESSION))
                        session_start();
                $_SESSION['usuario'] = $usuario['id'];
                header('Location: home.php');
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
        <title>Login</title>
</head>
<body>
        <div class="container">
               
                <form class="formulario" method="POST">

                        <h2 class="cadastrar">Login</h2>

                        <label>Email</label><br>
                        <input type="text" name="email"><br>

                        <label>Senha</label><br>
                        <input type="password" name="senha"><br><br>

                        <button class="submit" type="submit">Entrar</button>
                        <button class="submit"><a class="link" href="index.php">Cadastra-se</a></button>
                </form>
                
        </div>
        
</body>
</html>