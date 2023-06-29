<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calc Salário</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Informe seu salário</h1>
    <?php 
       $salariominimo = 1_320;
       $salario = $_POST["salario"] ?? 0;
    ?>
    <main>
        <form action="<?php echo $_SERVER["PHP_SELF"]?>" method="post">
            <label for="">Salário (R$)</label>
            <input type="number" name="salario" id="idsalario" step="0.01">
            <p>Considerando o salário mínimo de R$<strong> <?php echo number_format($salariominimo, 2, ",",".")?></strong> </p>
            <input type="submit" value="Calcular">
        </form>
    
    </main>
    <section>
    <h1>Resultado Final</h1>
    <?php 
        $salarioformatado = str_replace(",",".", $salario);
        $divisao = intdiv($salarioformatado, $salariominimo);
        $resto = $salarioformatado % $salariominimo;
        echo "Quem recebe um salário de R$ $salario ganha <strong> $divisao salários mínimos </strong> + R$ $resto "
    ?>
    </section>
</body>
</html>