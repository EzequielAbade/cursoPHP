<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Resultado</title>
</head>
<body>
    <header>
        <h1>Resultado do Processamento</h1>
    </header>
    <main>
        <?php 
            //var_dump($_GET); // No caso estou usando o GET pois meu formulário está em GEt, caso esteja em post tenho que usar o $_POST
                             // Além desses dois há também o $_REQUESTE, que irá buscar o GET, POST e o COOKIES ($_COOKIES)
            
            $nome = $_GET["nome"] ?? "volte ";
            $sobrenome = $_GET["sobrenome"] ?? "por favor e forneça um nome.";
            echo "<p> É um prazer te conhecer, <strong>$nome $sobrenome!</strong> Este é o meu site.";
        ?>
        <p><a href="javascript:history.go(-1)">Votar para a página anterior</a></p>
    </main>
</body>
</html>