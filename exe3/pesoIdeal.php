<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./style.css">
</head>

<body>
    <form action="pesoIdeal.php" method="post">
        <h1>Peso ideal</h1>
        <br>
        <select name="opcao" required>
            <option disabled selected>Escolha uma opção</option>
            <option value="masculino">Masculino</option>
            <option value="feminino">Feminino</option>
        </select>
        <label>Sua altura</label>
        <input required type="num" name="inputAltura" step="0.01" min=0 placeholder="Digite sua altura">
        <br>
        <button name="descobrir" type="submit">Encontrar Peso</button>
    </form>

    <div>
        <?php

        $opcao = isset($_POST["opcao"]) ? $_POST["opcao"] : '';
        $altura = isset($_POST["inputAltura"]) ? $_POST["inputAltura"] : 0;


        if (isset($_POST['descobrir'])) {
            descobrir($opcao, $altura);
        };


        function descobrir($opcao, $altura)
        {
            if ($opcao == "masculino") {
                $pesoideal = round(($altura * 72.2) - 58);
                echo ("<h1>Seu genero é $opcao e sua altura é $altura m, logo seu peso ideal é: $pesoideal Kg</h1>");
            } else {
                $pesoideal = round(($altura * 62.1) - 44.7);
                echo ("<h1>Seu genero é $opcao e sua altura é $altura m, logo seu peso ideal é: $pesoideal Kg</h1>");
            }
        }


        ?>
    </div>
</body>

</html>