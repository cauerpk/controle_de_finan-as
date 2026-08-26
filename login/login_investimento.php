<?php 

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $salario = $_POST['salario'];
    $gasto = $_POST['gasto'];
    $guardar = $_POST['guardar'];

    if($salario <= 2000){
            
    }
    if($salario > 2000 && $salario <= 4000){

    }
    if($salario > 4000 && $salario <= 7000){

    }
    if($salario > 7000 && $salario <= 12000){

    }
    if($salario > 12000 && $salario <= 20000){

    }
    if($salario >20000){
    
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
    <form action="" method="post">
        <div>
            <label for="guardar">Quanto da sua renda você gostaria de guardar</label><span>*</span><br>
            <div class="radio">
                <input type="radio" name="guardar" value="dez" >
                <label for="">10% <?php //echo "R$ ", $_POST['salario'] * 0.10, ",00"; //?></label>
            </div>

            <div class="radio">
                <input type="radio" name="guardar" value="vinte" >
                <label for="">20% <?php //echo "R$ ", $_POST['salario'] * 0.20, ",00"; //?></label>
            </div>

            <div class="radio">
                <input type="radio" name="guardar" value="trinta" >
                <label for="">30% <?php //echo "R$ ", $_POST['salario'] * 0.30, ",00"; //?></label>
            </div>

            <div class="radio">
                <input type="radio" name="guardar" value="outro">
            <label for="">Outro</label>
            </div>
        </div>

        <div>
            <button type="submit">Salvar</button>
        </div>
    </form>

    <div>
        <button onclick="window.location.href='./'">Salvar</button>
    </div>
</body>
</html>