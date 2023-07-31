<?php
    ini_set('display_errors',1);
    ini_set('display_startup_erros',1);
    error_reporting(E_ALL);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversão Dolar</title>
    <link rel="stylesheet" href="style.css">
    
</head>
<body>
    <h1>Conversão de moedas</h1>
    <?php
        $moeda = $_POST["moeda"];
        $inicio = date("m-d-Y", strtotime("-7 days"));
        $fim = date("m-d-Y");
        $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoMoedaPeriodo(moeda=@moeda,dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@moeda=\''.$moeda.'\'&@dataInicial=\''.$inicio.'\'&@dataFinalCotacao=\''.$fim.'\'&$top=1&$orderby=cotacaoCompra%20asc&$format=json&$select=cotacaoCompra,dataHoraCotacao';
        $dados = json_decode(file_get_contents ($url), true);
        $valor = $_POST["valor"];
            
    ?>
    <main>
        <form action="<?php echo $_SERVER["PHP_SELF"]?>" method="post">
            <label for="moeda">Selecione a sua moeda</label>
            <select name="moeda" id="idmoeda" value="<?php echo $moeda?>">
                <option value="DKK">coroa dinamarquesa</option>
                <option value="NOK">coroa norueguesa</option>
                <option value="SEK">coroa sueca</option>
                <option value="USD">dólar americano</option>
                <option value="AUD">dólar australiano</option>
                <option value="CAD">dólar canadense</option>
                <option value="EUR">euro</option>
                <option value="CHF">franco suíço</option>
                <option value="JPY">iene</option>
                <option value="GBP">libra esterlina</option>
            </select>
            <label for="valor">Digite o seu valor (R$)</label>
            <input type="number" name="valor" id="idvalor" min="1"  value="<?php echo $valor?>">
            <input type="submit" value="Calcular">
        </form>
    </main>
    <section>
        <?php
            if (isset($_POST)){
                $data = $dados["value"][0]["dataHoraCotacao"];
                $cotacao = $dados["value"][0]["cotacaoCompra"];
                $calculo = $valor / $cotacao;
                $calculoFormatado = number_format($calculo, 2, ",",".");
                switch ($moeda) {
                    case 'DKK':
                        echo "<ul>";
                        echo "<li> A Dinamarca não tem um salário mínimo definido. </li>";
                        echo "<li> O valor convertido em Coroa Dinamarquesa é: $calculoFormatado.";
                        echo "</ul>";
                        break;
                     case 'NOK':
                        echo "<ul>";
                        echo "<li> Não há salário mínimo nacional estabelecido legalmente na Noruega";
                        echo "<li> O valor convertido em Coroa Norueguesa é: $calculoFormatado.";
                        echo "</ul>";
                        break;
                     case 'SEK':
                        echo "<ul>";
                        echo "<li> Não há salário mínimo nacional estabelecido legalmente na Suécia";
                        echo "<li> O valor convertido em Coroa Sueca é: $calculoFormatado.";
                        echo "</ul>";
                        break;
                     case 'USD':
                        echo "<ul>";
                        echo "<li> Pela lei federal é 7,25 por hora, oito horas trabalhada 1.798";
                        echo "<li> O valor convertido em Dólar Americano é: $calculoFormatado.";
                        echo "</ul>";
                        break;
                     case 'AUD':
                        echo "<ul>";
                        echo "<li> Pela lei federal é 7,25 por hora, oito horas trabalhada 1.798";
                        echo "<li> O valor convertido em Dólar Australiano é: $calculoFormatado.";
                        echo "</ul>";
                        break;
                    case 'CAD':
                        echo "<ul>";
                        echo "<li> O valor convertido em Dolar Canadense é: $calculoFormatado.";
                        echo "</ul>";
                        break;
                    case 'DKK':
                        echo "<ul>";
                        echo "<li> O valor convertido em Coroa Dinamarquesa é: $calculoFormatado.";
                        echo "</ul>";
                        break;
                    case 'DKK':
                        echo "<ul>";
                        echo "<li> O valor convertido em Coroa Dinamarquesa é: $calculoFormatado.";
                        echo "</ul>";
                        break;
                    case 'DKK':  
                        echo "<ul>";
                        echo "<li> O valor convertido em Coroa Dinamarquesa é: $calculoFormatado.";
                        echo "</ul>";
                        break;
                    case 'DKK':
                        echo "<ul>";
                        echo "<li> O valor convertido em Coroa Dinamarquesa é: $calculoFormatado.";
                        echo "</ul>";
                        break;    
                }
            }
            
            
        ?>
    </section>
    
</body>
</html>