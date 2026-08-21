<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $salario = $_POST['salario'];
    $gasto = $_POST['gasto'];
    $guardar = $_POST['guardar'];

    if($salario <= 2000){
        echo "";
    }
    if($salario > 2000 && $salario <= 4000){
        echo "";
    }
    if($salario > 4000 && $salario <= 7000){
        echo "";
    }
    if($salario > 7000 && $salario <= 12000){
        echo "";
    }
    if($salario > 12000 && $salario <= 20000){
        echo "";
    }
    if($salario >20000){
        echo "";
    }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../style/style.css">
</head>
<body>
    <h1>Controle de finanças</h1>
    <form action="" method="post">
        <div>
            <label for="salario">Quanto você Recebe por mês:</label><span class="error">*</span><br>
            <input required type="number" name="salario" id="salario" placeholder="Ex: 2500.00" step="500.00" min="0">
        </div>

        <div>
            <label for="gasto">Quanto você Gasta por mês:</label><span class="error">*</span><br>
            <input required type="number" name="gasto" id="gasto" placeholder="Ex: 1500.00" step="500.00" min="0">
        </div>  
            <div>
                <button name="guardar" type="submit">Salvar</button>
            </div>
    </form> 
    
    <div>
        <button type="button" onclick="window.location.href='./login_investimento.php'">Proximo</button>
    </div>
</body>
</html>