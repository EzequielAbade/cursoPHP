<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IF ELSE ELSEIF</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <?php 
            $ano = $_POST["idade"] ?? 1;
        ?>
        <h1>Digite o dia</h1>
        <form action="<?php echo $_SERVER["PHP_SELF"] ?>" method="post">
            <label for="ano">Digite seu dia</label>
            <input type="number" name="idade" id="ano" min="1"value="<?php echo $ano?>">
            <input type="submit" value="Verificar">
        </form>
    </main>
    <section>
        <?php 
            
            while($ano <= 7)  {
                echo "contador do While: $ano <br>";
                $ano++;
                
            }
             
        ?>
    </section>