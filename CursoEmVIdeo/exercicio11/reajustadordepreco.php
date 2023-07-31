<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reajustador de Preço</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <?php 
            $preco = $_POST["preco"];
            $percentual = $_POST["percentual"];
            $precoformatado = number_format($preco, 2, ",", ".")
        ?>
        <h1>Reajustador de Preços</h1>
        <form action="<?php echo $_SERVER["PHP_SELF"] ?>" method="post">
            <label for="preco">Preço do produto(R$)</label>
            <input type="number" name="preco" id="idpreco">
            <label for="reaj">Qual será o percentual de reajuste ?
                (<strong><span id ="p">?</span>%</strong>)
            </label>
            <input type="range" name="reaj" id="reaj" min="0" max="100" step="1" oninput="mudaValor()">
            <input type="submit" value="Reajustar">
        </form>
    </main>
    <section>
        <h1>Resultado do Reajuste</h1>
        <?php 
            $aumento = ($percentual/100) + 1;
            $reajuste = $preco * $aumento;
            $reajusteformatado = number_format($reajuste, 2, ",", ".");
            echo "O produto que custava $precoformatado, com <strong> $percentual de aumento </strong> vai passar a custa <strong> R$ $reajusteformatado </strong> a partir de agora."
        ?>
    </section>
    <script>
        // Declarações Automáticas
        mudarValor()
        function mudarValor(){
            p.innerText = reaj.value;
        }
    </script>
    
</body>
</html>