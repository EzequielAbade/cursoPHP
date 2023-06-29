<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Caixa Eletrônico</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <?php
            $valor = $_POST["valor"]; 
            $real100 = 100;
            $real50 = 50;
            $real10 = 10;
            $real5 = 5;
        ?>
        <h1>Caixa Eletrônico</h1>
        <form action="<?php echo $_SERVER["PHP_SELF"]?>" method="post">
            <label for="valor">Qual valor você deseja sacar? (R$)</label>
            <input type="number" name="valor" id="idvalor" value="<?php echo $valor?>">
            <input type="submit" value="Sacar">   
        </form>
        <p>* Notas disponíveis: R$100, R$50, R$10 e R$5</p>
    </main>
    <section>
        <?php 
            
            $resultado100 = intdiv($valor, $real100);
            $diferenca50 = $valor % $real100;  
            $resultado50 = intdiv($diferenca50, $real50);
            $diferenca10 = $diferenca50 % $real50;
            $resultado10 = intdiv($diferenca10, $real10);
            $diferenca5 = $diferenca10 % $real10;
            $resultado5 = intdiv($diferenca5, $real5);
            echo "<ul>";
            echo "<li> 100: $resultado100 </li>";
            echo "<li> 50: $resultado50 </li>";
            echo "<li> 10: $resultado10 </li>";
            echo "<li> 5: $resultado5 </li>";
            echo "</ul>";
        ?>
    </section>
    
</body>
</html>