<?php
 header("Content-type: application/vnd.ms-excel");
 header("Content-type: application/force-download");
 header("Content-Disposition: attachment; filename=relatorio_de_cadastrados.xls");
 header("Pragma: no-cache");

 include ( 'conexao.php' );

// $sql = "SELECT clientes.id as id_cliente, cadastro.nome, cadastro.telefone, cadastro.email, cadastro.endereco, cadastro.bairro, cadastro.cidade, cadastro.estado, cadastro.cep, cadastro.cpf, clientes.nome as nome_criador, cadastro.data_criacao FROM cadastro, clientes WHERE cadastro.id and  clientes.id;";
$sql = "SELECT * FROM `cadastro`" ;
$query_clientes = $mysqli->query($sql) or die($mysqli->error);
 $num_clientes = $query_clientes->num_rows;

?>



<meta charset='utf-8'>
<table>
    <tr>
        <td>ID</td>
        <td>NOME</td>
        <td>TELEFONE</td>
        <td>EMAIL</td>
        <td>ENDEREÇO</td>
        <td>BAIRRO</td>
        <td>CIDADE</td>
        <td>ESTADO</td>
        <TD>CEP</TD>
        <TD>DATA_DE_CRIAÇÃO</TD>
    </tr>
    <?php
                        if($num_clientes == 0) {?>
                        <tr>
                                <td colspan="7">Nenhum cliente cadastrado</td>
                                <?php } else {
                                        while($cliente = $query_clientes->fetch_assoc()){
                                                
                                                ?>
                        </tr>
                        <tr>
                                <td><?php echo $cliente['id']?></td>
                                <td><?php echo $cliente['nome']?></td>
                                <td><?php echo $cliente['telefone']?></td>
                                <td><?php echo $cliente['email']?></td>
                                <td><?php echo $cliente['endereco']?></td>
                                <td><?php echo $cliente['bairro']?></td>
                                <td><?php echo $cliente['cidade']?></td>
                                <td><?php echo $cliente['estado']?></td>
                                <td><?php echo $cliente['cep']?></td>
                                <td><?php echo $cliente['data_criacao']?></td>
                                
                               
                               
                        </tr>
                        <?php };
                        }?>
                </tbody>
</table>