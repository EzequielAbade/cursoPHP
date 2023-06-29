<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculando Idade</title>
    <link rel="stylesheet" href="style.css">

</head>
<body>
    <main>
        <?php 
            $nasceu = $_POST["nasceu"];
            $ano = $_POST["ano"];
        ?>
        <h1>Calculando a sua idade</h1>
        <form action="<?php echo $_SERVER["PHP_SELF"]?> " method="post">
            <label for="nasceu">Em que ano você nasceu?</label>
            <input type="number" name="nasceu" id="idnasceu">
            <label for="ano">Quer saber sua idade em que ano?</label>
            <input type="number" name="ano" id="idano">
            <input type="submit" value="Qual será minha idade?">
        </form>
    </main>
    <section>
        <h1>Resultado</h1>
        <?php 
            $idade = $ano - $nasceu;
            echo "Quem nasceu  em $nasceu vai ter <strong> $idade anos </strong> em $ano!"
        ?>
    </section>
    
</body>
</html>