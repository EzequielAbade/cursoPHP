<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Média Aritmética</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <?php 
            $valor1 = $_POST["valor1"];
            $valor2 = $_POST["valor2"];
            $peso1 = $_POST["peso1"];
            $peso2 = $_POST["peso2"];
        ?>
        <h1>Média Aritmética</h1>
        <form action="<?php echo $_SERVER["PHP_SELF"]?>" method="post">
            <label for="valor1">1° Valor</label>
            <input type="number" name="valor1" id="idvalor1" value="<?php echo $valor1?>">
            <label for="peso1">1° Peso</label>
            <input type="number" name="peso1" id="idpeso1" value="<?php echo $peso1?>">
            <label for="valor2">2° Valor</label>
            <input type="number" name="valor2" id="idvalor2" value="<?php echo $valor2?>">
            <label for="peso2">2° Peso</label>
            <input type="number" name="peso2" id="idpeso2" value="<?php echo $peso2?>">
            <input type="submit" value="Calcular Médias">
        </form>
    </main>
    <section>
        <?php
            $soma = $peso1 + $peso2; 
            $mediasimples = ($valor1 + $valor2) / 2;
            $somavalor1 = $peso1 * $valor1;
            $somavalor2 = $peso2 * $valor2;
            $mediaponderada = ($somavalor1 + $somavalor2)  / $soma;
            $mediaponderadaformatada = number_format($mediaponderada, 2, ",", ".");
            $mediasimplesformatada = number_format($mediasimples, 2, ",", ".");
            echo "A Média Simples entre os valores $valor1 e $valor2 é igual a : $mediasimplesformatada <br>";
            echo "A Média Ponderada com pesos $peso1 e $peso2 é igual a: $mediaponderadaformatada"
    
        ?>
    </section>
    
</body>
</html>