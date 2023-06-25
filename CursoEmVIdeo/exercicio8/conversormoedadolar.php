<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversão</title>
</head>
<body>
    <header>
        <h1>Conversão de real para dolar</h1>
    </header>
    <?php 
    // forma tradicional de fazer
     $valor = $_GET["valor"];
     $cotaçaodolar = 4.82;
     $conversao = $valor / $cotaçaodolar;
    // $formatado = number_format($conversao, 2);
    // echo "Você tem US$formatado em Dolar";

    // forma mais profissional de está fazendo a formatação
    $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);
    echo "Sua cotação: $cotaçaodolar";
    echo "<br> Seus " . numfmt_format_currency($padrao, $valor, "BRL") . " equivalem a " . numfmt_format_currency($padrao, $conversao, "USD");

    ?>
    <p><a href="javascript:history.go(-1)">Votar para a página anterior</a></p>
    
</body>
</html>