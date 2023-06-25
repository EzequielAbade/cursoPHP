<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
</head>
<body>
    <h1> Resultado da analise do Numero Real</h1>
    <?php 
        $valor = $_GET["valor"] ?? 0;
        $valorformatado = str_replace(',', '.', $valor);
        $partes = explode('.', $valorformatado);
        $parteInteira = $partes[0];
        $parteDecimal = $partes[1];
        echo "<p> O valor informado é:<strong> $valor </strong>";
        echo "<br> A parte Inteira é: $parteInteira";
        echo "<br> A parte Fracionária é: $parteDecimal";

    ?>
    <p><a href="javascript:history.go(-1)">Votar para a página anterior</a></p>
    
</body>
</html>