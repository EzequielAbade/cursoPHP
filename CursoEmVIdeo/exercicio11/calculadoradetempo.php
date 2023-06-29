<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de tempo</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <?php 
            $valor = $_POST["segundos"];
            $semanas = 604800;
            $dias = 86400;
            $horas = 3600;
            $minutos = 60;
            $segundos = 1;

            $semanas1 = intdiv($valor, $semanas);
            $dias1 = $valor % $semanas;
            $dias2 = intdiv($dias1, $dias);
            $horas1 = $valor % $dias;
            $horas2 = intdiv($horas1, $horas);
            $minutos1 = $valor % $horas;
            $minutos2 = intdiv($minutos1, $minutos);
            $segundos1 = $valor % $minutos;
            $segundos2 = intdiv($segundos1, $segundos)
            
            
        ?>
        <h1> Calculadora de tempo</h1>
        <form action="<?php echo $_SERVER["PHP_SELF"]?>" method="post">
            <label for="segundos">Qual é o total de segundos?</label>
            <input type="number" name="segundos" id="idsegundos">
            <input type="submit" value="Calcular">
    
        </form>
    </main>
    <section>
        <h1>Totalizando Tudo</h1>
        <?php 
            echo "Analisando o valor que você digitou, <strong>$valor</strong> segundos equivalem a um total de: ";
            echo "<ul>";
            echo "<li>$segundos2 Segundos</li>";
            echo "<li>$minutos2 Minutos</li>";
            echo "<li>$horas2 Horas</li>";
            echo "<li>$dias2 Dias</li>";
            echo "<li>$semanas1 Semanas</li>";
            echo "</ul>"
        ?>
    </section>
</body>
</html>