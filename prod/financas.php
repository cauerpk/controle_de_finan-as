<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $salario = $_POST['salario'];
    $gasto = $_POST['gasto'];
    $guardar = $_POST['guardar'];


}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <h1>Controle de finanças</h1>
    <form action="" method="post">
        <div>
            <label for="salario">Quanto você Recebe por mês:</label><span class="error">*</span><br>
            <input type="number" name="salario" id="salario" placeholder="Ex: 2500.00" step="500.00" min="0">
        </div>

        <div>
            <label for="gasto">Quanto você Gasta por mês:</label><span class="error">*</span><br>
            <input type="number" name="gasto" id="gasto" placeholder="Ex: 1500.00" step="500.00" min="0">
        </div>

        <div>
            <label for="guardar">Quanto da sua renda você gostaria de guardar</label><span>*</span><br>
            <div class="radio">
                <input type="radio" name="guardar" value="dez">
                <label for="">10%</label>
            </div>
            <div class="radio">
                <input type="radio" name="guardar" value="vinte">
                <label for="">20%</label>
            </div>
            <div class="radio">
                <input type="radio" name="guardar" value="trinta">
                <label for="">30%</label>
            </div>
            <div class="radio">
                <input type="radio" name="guardar" value="outro">
            <label for="">Outro</label>
            </div>
        </div>    

        <div>
            <button type="submit">Próximo</button>
        </div>
    </form>   
</body>
</html>