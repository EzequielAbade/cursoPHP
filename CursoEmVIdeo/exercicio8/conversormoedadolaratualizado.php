<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado da conversão</title>
</head>
<body>
    <h1> Conversão Real para Dolar version 2.0</h1>
    <?php
        $inicio = date("m-d-Y", strtotime("-7 days"));
        $fim = date("m-d-Y");
        $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\''.$inicio.'\'&@dataFinalCotacao=\''.$fim.'\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao'; 
        
        $dados = json_decode(file_get_contents($url), true);
        $cotacao = $dados["value"][0]["cotacaoCompra"];
        $valor = $_GET["valor"];
        $resultado = $valor / $cotacao;
        $formatado = number_format($resultado, 2);
        $dataHora = $dados["value"][0]["dataHoraCotacao"];
        

        echo "O valor que tem é: <strong> $valor </strong>";
        echo "<br> cotação do dia $dataHora é: $cotacao";
        echo "<br> O seu valor hoje em USD é: $formatado"
    ?>
    <p><a href="javascript:history.go(-1)">Voltar para a página anterior</a></p>
    
</body>
</html>