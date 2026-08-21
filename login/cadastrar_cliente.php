<?php 
$erro = false;
if(count($_POST) > 0){
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $nascimento = $_POST['nascimento'];

    if(empty($nome) || strlen($nome) < 3 || strlen($nome) > 100){
        echo "O campo nome deve ser preenchido corretamente";
    }
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        echo "O campo E-mail deve ser preenchido corretamente";
    }if($erro){
        echo "<p><b>$erro</b></p>";
    }if(!empty($telefone)&&strlen($telefone) != 11){
        echo "Preencha o campo telefone corretamente no padrão (48) 99999-9999";
    }if(!empty($nascimento) && $nascimento != null){
        echo "Preencha a data de nascimento corretamnete no padrão dd/mm/aaaa";
    }
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../style/style.css">
</head>
<body>
    <nav>
        <a href="clientes.php">Voltar para a lista</a>
    </nav><br> 
     <h1>Preencha os dados do login</h1><br>
    <form action="" method="post">
        <div>
            <label for="">Nome:</label><span class="error">*</span>
            <input required name="nome" type="text"><br>
        </div>
        <div>
            <label for="">E-mail:</label><span class="error">*</span>
            <input required name="email" type="text"><br>
        </div>
        <div>
            <label for="">Telefone:</label>
            <input name="telefone" type="tel" placeholder="(47) 99999-9999"><br>
        </div>
        <div>
            <label for="">Data de nascimento:</label>
            <input name="nascimento" type="date"><br>
        </div>
        <button type="submit" type="button" onclick="window.location.href='./login_financas.php'">salvar</button>
    </form>
</body>
</html>
