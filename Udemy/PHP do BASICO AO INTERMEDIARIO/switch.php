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
        <h1>Digite o dia</h1>
        <form action="<?php echo $_SERVER["PHP_SELF"] ?>" method="post">
            <label for="idade">Digite seu dia</label>
            <input type="number" name="idade" id="idade" min="1"value="<?php echo $idade?>">
            <input type="submit" value="Verificar">
        </form>
    </main>
    <section>
        <?php 
            
            switch ($idade){
                case 1: echo "Domingo";
                break;
                case 2: echo "Segunda";
                break;
                case 3: echo "Terça";
                break;
                case 4: echo "Quarta";
                break;
                case 5: echo "Quinta";
                break;
                case 6: echo "Sexta";
                break;
                case 7: echo "Sabado";
                break;
                default:
                echo "Não foi encontrado";
            }
             
        ?>
    </section>