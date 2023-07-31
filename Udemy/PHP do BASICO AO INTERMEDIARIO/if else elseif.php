<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IF ELSE ELSEIF</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <?php 
            $idade = $_POST["idade"] ?? 1;
        ?>
        <h1>Digite a sua idade</h1>
        <form action="<?php echo $_SERVER["PHP_SELF"] ?>" method="post">
            <label for="idade">Digite sua idade</label>
            <input type="number" name="idade" id="idade" min="1"value="<?php echo $idade?>">
            <input type="submit" value="Verificar">
        </form>
    </main>
    <section>
        <?php 
            
            if ($idade >= 60){
                echo "Vein";
            } elseif ($idade > 30 & $idade < 60){
                echo "Aduto";
            } elseif ($idade > 18 & $idade < 30){
                echo "jovi";
            } elseif ($idade >= 0 & $idade < 18) {
                echo "bebe fedido ou adolescente fedido ou criança fedida";
            } else {
                echo "digite uma idade correta fi da peste";
            }
        ?>
    </section>
    

</body>
</html>