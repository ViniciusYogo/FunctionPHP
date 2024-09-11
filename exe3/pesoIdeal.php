<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="pesoIdeal.php" method="post">
    <h1>Peso ideal</h1>
    <br>
    <select name="opcao" require>
        <option disabled selected>Escolha uma opção</option>
        <option value="marculino"></option>
        <option value="feminino"></option>
    </select>     
    <label>Sua altura</label>
    <input require type="num" name="inputAltura" step="0.01" min=0 placeholder="Digite sua altura">
    <br>
    <button name="descobrir" type="submit">Encontrar Peso</button>
    </form>

    <div>
        <?php 
        
        $opcao = isset($_POST["opcao"]) ? $_POST["opcao"] : '';
        $altura = $_POST["inputAltura"];


        function descobrir($opcao , $altura){
            if()
        }


        ?>
    </div>
</body>
</html>