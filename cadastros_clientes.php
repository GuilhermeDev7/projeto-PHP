<?php



if(!isset($_SESSION))
        session_start();

if(!isset($_SESSION['usuario']))
        die("Você não esta logado <a href='login.php'>Clique aqui</a>");



include("conexao.php");

$erro = "";

if(count($_POST) > 1) {

        $nome  = $_POST['nome'];
        $telefone  = $_POST['telefone'];
        $email  = $_POST['email'];
        $endereco  = $_POST['endereco'];
        $bairro  = $_POST['bairro'];
        $cidade  = $_POST['cidade'];
        $estado  = $_POST['estado'];
        $cep  = $_POST['cep'];
        $cpf  = $_POST['cpf'];
      
        if(!empty($email) && !filter_var($email, FILTER_VALIDATE_EMAIL)) {
                echo  "Email invalido, tente novamente :)";
        };

        if($erro) {
                echo "Houve algum erro na conexao entre o banco de dados e
                o seu cadastro, tente novamente mais tarde!";
        } else {
                $sql_code = "INSERT INTO cadastro(nome, telefone, email, endereco, bairro, cidade, estado, cep, cpf) VALUES (
                        '$nome', '$telefone','$email','$endereco','$bairro', '$cidade', '$estado', '$cep', '$cpf')";
                $mysqli->query($sql_code) or die($mysqli->error);
          
                
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
        <link rel="stylesheet" href="home.css">
        <title>Cadastro de clientes</title>
</head>
<body>
        
<div class='nav'>
                        <?php include("components/cabecalho.php");?>
                </div>

        <div class="container">
               
                <form class="formulario" method="POST">

                        <h2 class="cadastrar">Cadastrar novo cliente</h2>
                        <label>Nome</label><br>
                        <input type="text" name="nome"><br>

                        <label>Telefone</label><br>
                        <input type="text" name="telefone"><br>

                        <label>Email</label><br>
                        <input type="tex" name="email"><br>
                        
                        <label>Endereço</label><br>
                        <input type="text" name="endereco"><br>

                        <label>Bairro</label><br>
                        <input type="text" name="bairro"><br>

                        <label>Cidade</label><br>
                        <input type="text" name="cidade"><br>
                        
                        <label>Estado</label><br>
                        <input type="text" name="estado"><br>

                        <label>CEP</label><br>
                        <input type="text" name="cep"><br>

                        <label>CPF</label><br>
                        <input type="text" name="cpf"><br><br><br><br>

                        <button class="submit" type="submit">Cadastrar</button>
                        
                </form>
                
        </div>
</body>
</html>