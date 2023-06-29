<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Raízes</title>
    <link rel="stylesheet" href="style.css">
   
</head>
<body>
    <?php 
        $numero = $_POST["valor"]
    ?>
    <main>
        <form action="<?php echo $_SERVER["PHP_SELF"]?>" method="post">
            <label for="valor">Número</label>
            <input type="number" name="valor" id="idvalor" value="<?php echo $numero ?>" >
            <input type="submit" value="Calcular">
        </form>
    </main>
    <section>
    <?php 
        $raizquadrada = sqrt($numero);
        $raizcubica = pow($numero,1.0/3.0);
        $quadradaformatada = number_format($raizquadrada, 2);
        $cubicaformatada = number_format($raizcubica, 2);
        echo "A raiz quadrada do numero $numero é: $quadradaformatada <br>";
        echo "A raiz cubica do numero $numero é: $cubicaformatada"
    ?>
    </section>
</body>
</html>
