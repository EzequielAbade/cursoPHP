<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $valor1 = $_GET['valor1']??0;
        $valor2 = $_GET['valor2']??0;
    ?>
    <main>
        <h1>Somador de Valores</h1>
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="valor1"> Valor1</label>
            <input type="number" name="valor1" id="idvalor1" value="<?=$valor1?>">
            <label for="valor2"> Valor2</label>
            <input type="number" name="valor2" id="idvalor2" value="<?=$valor2?>">
            <input type="submit" value="Somar">

        </form>
    </main>

    <section id="resultado">
        <h2>Resultado da Soma</h2>
        <?php 
            $soma = $valor1 + $valor2;
            echo "<p> A soma entre o $valor1 e o $valor2 é: $soma"
        ?>
    </section>
</body>
</html>