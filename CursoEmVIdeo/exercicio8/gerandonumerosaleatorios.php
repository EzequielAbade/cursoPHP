<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerador de numeros</title>
</head>
<body>
    <header>
        <h1> Gerando numeros Aleatórios</h1>
    </header>
    <?php
        $aleatorio = mt_rand(0, 100);
        echo "Gerando numeros aleatório de 0 a 100
        Numero gerado é: $aleatorio";    
      
    ?>
    <script>
        function refreshPage() {
            location.reload();
        }
    </script>
    <br>
    <button onclick="refreshPage()">Gerar outro número</button>
    <p><a href="javascript:history.go(-1)">Votar para a página anterior</a></p>
  
</body>
</html>