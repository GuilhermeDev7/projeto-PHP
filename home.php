<?php

if(!isset($_SESSION))
        session_start();

if(!isset($_SESSION['usuario']))
        die("Você não esta logado <a href='login.php'>Clique aqui</a>")

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
        <link rel="stylesheet" href="home.css">
        <title>Home || Pagina</title>
</head>
<body>
        <div>
                <div class='nav'>
                        <?php include("components/cabecalho.php");?>
                </div>
                <h2 class="empresa-titulo">Empresa Port</h2>
                <img class="empresa" src="img/empresa.jpg" alt="empresa">
                <p class="empresa-descricao">A nossa empresa responsavel por gerar e criar diversas
                        oportunidade para todos os tipos de pessoa, a nossa
                        empresa que é voltada para aréa da T.I, tem como o seu maior
                        objetivo formar e capasitar os melhores profissionais.<br/>
                        Tá bom você já entendeu um pouquinho, mais agora o que a 
                        nossa empresa realmente faz? bom a nossa empresa e voltada 
                        para desenvolvimentos de softwares, atualmente são por volta de 
                        85 mil clientes espalhados pelo o Brasil, e o que nós buscamos é daqui 2 anos
                        expandir nosso negocios para o exterior.

                </p>
                <h2 class="empresa-titulo">Alguns cursos disponibilizados</h2>
<div class="container-card">
        <div class="e">
                <div class="card">
                        <img  class="empresa" src="img/front.jpg" alt="Front-end">
                        <br><h4>Front-end</h4><br>
                        <p>Desenvolvimento web front-end é o desenvolvimento da interface gráfica do usuário de um site, através do uso de HTML, CSS e JavaScript, para que os usuários possam visualizar e interagir com esse site</p>
                </div>
                <div class="card">
                        <img class="empresa" src="img/back.webp" alt=""><br>
                        <h4>Back-end</h4><br>
                        <p>Describackend lidam com os bastidores das funcionalidades das aplicações web. É o código que conecta a internet com o banco de dados, gerencia as conexões dos usuários e alimenta a aplicação web. O backend trabalha em conjunto com o frontend para entregar o produto para o usuário final.çao</p>
                </div>
                <div class="card">
                        <img class="empresa" src="img/full.png" alt="Full-Stack">
                        <br><h4>Full-Stack</h4><br>
                        <p>Um desenvolvedor full stack é aquele que desenvolve aplicações e softwares completos, desde o back-end até o front-end. Isto quer dizer que ele domina tanto as linguagens de programação quanto as tecnologias web, criando aplicações do zero e também integrando-as com outras ferramentas existentes.</p>
                </div>
                <div class="card">
                        <img class="empresa" src="img/mobile.jpeg" alt="Mobile">
                        <br><h4>Mobile</h4><br>
                        <p>Desenvolvimento de aplicações e sistemas para dispositivos móveis, por vezes utilizado apenas como desenvolvimento mobile é toda atividade e processos acerca do desenvolvimento de softwar</p>
                </div>
                <div class="card">
                        <img class="empresa" src="img/data.jpg" alt="Data Scinenci">
                        <br><h4>Data Scienci</h4><br>
                        <p>Cientista de dados, ou data scientist, é um profissional analítico capacitado para reunir, interpretar, resolver problemas e comunicar toda informação relevante extraída de dados analisados das empresas armazenam informações sobre o comportamento das pessoas, sejam elas seus clientes, prospects, funcionários etc.</p>
                </div>
                </div>

                
        </div>
        <footer>
                        <div class="footer">
                                <p>instagran</p>
                                <p>Github</p>
                                <p>Facebook</p>
                                <p>Tiktok</p>
                        </div>
                        <div class="footer">
                                <p>instagran</p>
                                <p>Github</p>
                                <p>Facebook</p>
                                <p>Tiktok</p>
                        </div>
                        
                     
                </footer>
        
</body>
</html>