<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./style.css">
</head>

<body>
    <form action="conversao.php" method="post">

        <h1>Conversão de valor</h1>
        <br>
        <label>Digite o valor que deseja converter</label>
        <br>
        <input type="number" step="0.01" name="dollar" min=0 placeholder="Digite o valor">
        <button type="submit" name="converter">Converter</button>
    </form>

    <div>

        <?php

        if (isset($_POST['converter'])) {
            dollarReal();
        };




        function dollarReal()
        {
            $dollar = $_POST["dollar"];
            $real = $dollar * 1.81;

            echo ("<h1>O valor de $dollar em real é: $real</h1>");
        }

        ?>

    </div>
</body>

</html>