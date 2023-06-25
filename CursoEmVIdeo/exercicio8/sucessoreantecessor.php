<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
</head>
<body>

    <?php 
        $numeros = $_GET["numero"] ?? "Numero incorreto";
        $sucessor = $numeros + 1;
        $antecessor = $numeros - 1;
        echo "O numero escolhido foi:  <strong> $numeros </strong> ";
        
        echo "<br> O Sucessor é: $sucessor <br> Antecessor é: $antecessor"
    ?>
    <p><a href="javascript:history.go(-1)">Votar para a página anterior</a></p>
</body>
</html>