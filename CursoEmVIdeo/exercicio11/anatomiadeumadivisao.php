<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anatomia de uma divisão</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
    <?php 
        $dividendo = $_POST['dividendo'] ?? 0;
        $divisor = $_POST["divisor"] ?? 1;
    ?>
        <h1>Anatomia de uma Divisão</h1>
            <form action="<?php echo $_SERVER["PHP_SELF"]?>" method="post">
                <label for="dividendo">Dividendo</label>
                <input type="number" name="dividendo" id="iddividendo" min="0" value="<?php echo "$dividendo" ?>">
                <label for="divisor">Divisor</label>
                <input type="number" name="divisor" id="iddivisor" min="1" value="<?php echo "$divisor" ?>">
                <input type="submit" value="Analisar">
            </form>
    
    <h1>Estrutura da divisão</h1>
    <?php 
        $divisao = intdiv($dividendo, $divisor); 
        $resto = $dividendo % $divisor;
    ?>
    <table class="divisao">
        <tr>
            <td>
                <?php echo "$dividendo" ?>
            </td>
            <td>
                <?php echo "$divisor" ?>
            </td>
        </tr>
        <tr>
            <td>
                <?php echo "$resto" ?>
            </td>
            <td>
                <?php echo "$divisao" ?>
            </td>
        </tr>
    </table>
    
    </main>
    
</body>
</html>