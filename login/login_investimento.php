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
                <input type="radio" name="guardar" value="dez" <?php echo "R$ ", $_POST['salario'] * 0.10, ",00"; ?>>
                <label for="">10%</label>
            </div>

            <div class="radio">
                <input type="radio" name="guardar" value="vinte" <?php echo "R$ ", $_POST['salario'] * 0.20, ",00"; ?>>
                <label for="">20%</label>
            </div>

            <div class="radio">
                <input type="radio" name="guardar" value="trinta" <?php echo "R$ ", $_POST['salario'] * 0.30, ",00"; ?>>
                <label for="">30%</label>
            </div>

            <div class="radio">
                <input type="radio" name="guardar" value="outro">
            <label for="">Outro</label>
            </div>
        </div>
    </form>
</body>
</html>