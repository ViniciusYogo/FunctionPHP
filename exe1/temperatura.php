<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Temperatura</title>
    <link rel="stylesheet" href="./style.css">
</head>

<body>
    <form action="temperatura.php" method="post">
        <h1>Conversão de Temp</h1>
        <br>
        <label>Coloque a temperatura</label>
        <input type="number" name="temp">
        <br>
        <button type="submit" name="conversao">Converter</button>
    </form>

    <div>

        <?php

        if (isset($_POST['conversao'])) {
            converter();
        };


        function converter()
        {
            $temperatura = $_POST["temp"];
            $temp = round((($temperatura - 32) * 5) / 9);
            echo ("<h1>A temperatura $temperatura em Celcius é: $temp</h1>");
        };


        ?>
    </div>


</body>

</html>