<?php 
include('../conexao/conexao.php');; 

$sql_clientes = "SELECT * FROM clientes";
$query_clientes = $mysqli->query($sql_clientes) or die($mysqli->error);
$num_clientes = $query_clientes->num_rows;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Clientes</title>
</head>
<body>
    <h1>Lista de Clientes</h1>
    <p>Estes são os clientes cadastrados no sisitema</p>
    <table border="1" cellpadding="10">
        <thead>
            <th>ID</th>
            <th>NOME</th>
            <th>E-MAIL</th>
            <th>TELEFONE</th>
            <th>DATA DE NASCIMENTO</th>
            <th>DATA DE CADASTRO</th>
            <th>AÇÕES</th>
        </thead>

        <tbody>
            <?php 
            if($num_clientes == 0){?>
                <tr>
                    <td colspan="7">NENHUM CLIENTE CADASTRADO!!!</td>
                </tr>
            <?php } else{ 
                        while ($cliente = $query_clientes->fetch_assoc()){
                            
                        $telefone = "Não iformado";
                        if(!empty($cliente['telefone'])){
                            $ddd = substr($cliente['telefone'], 0, 2);
                            $pt1 = substr($cliente['telefone'], 2, 5);
                            $pt2 = substr($cliente['telefone'], 7);
                            $telefone = "($ddd) $pt1-$pt2";
                        }
                        $nascimento = "Não informada";
                        if(!empty($cliente['nascimento'])){
                            $tmp = explode('-', $cliente['nascimento']);
                        }?>
                <tr>
                    <td><?php echo $cliente['id']; ?></td>
                    <td><?php echo $cliente['nome']; ?></td>
                    <td><?php echo $cliente['email']; ?></td>
                    <td><?php echo $telefone; ?></td>
                    <td><?php echo $cliente['nascimento']; ?></td>
                    <td><?php echo $cliente['cadastro']; ?></td>
                    <td>
                        <a href="editar_clientes.php">Editar &#9999;</a>
                        <a href="deletar_clientes.php">Deletar &#128465;</a>
                    </td>
                </tr>
            <?php } 
            } ?>
        </tbody>
    </table>
</body>
</html>