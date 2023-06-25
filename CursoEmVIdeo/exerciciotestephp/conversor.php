<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado Conversão</title>
</head>
<body>
    <h1>O valor da sua conversão é: </h1>
    <?php 
        $inicio = date('m-d-Y', strtotime('-7 days'));
        $fim = date('m-d-Y');
        $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\''.$inicio.'\'&@dataFinalCotacao=\''.$fim.'\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';

        $dados = Json_decode(file_get_contents($url), true);
        $cotacao = $dados["value"][0]["cotacaoCompra"];
        $valor = $_GET["valor"];
        $conversao = $valor / $cotacao;
        $formatado = number_format($conversao, 2);
        $dataHora = $dados["value"] [0] ["dataHoraCotacao"];
        echo "A sua conversão na data (modelo: m-d-Y) $dataHora é: ";
        echo "<strong> $formatado </strong>";

    ?>
</body>
</html>