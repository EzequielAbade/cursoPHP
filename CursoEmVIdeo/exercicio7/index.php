<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Calculos e funções aritméticas </h1>
    <?php 
        $resultado1 = 5 + 2 / 2;
        $resultado2 = 50 / 2 + 3 ** 2;
        echo "o resultado de 5 + 2 / 2 é: $resultado1";
        echo "<p> o resultado de 50 / 2 + 3 ** 2 é: $resultado2 ";
        echo "<p> pois é usado a base matematica, onde <strong>**</strong>é o primeiro, <strong>* / %</strong> são o segundo na ordem e por fim <strong>+ -</strong> são os ultimos. ";
        echo "<p> lembrando que caso tenha () parenteses, será feito primeiro o que esta dentro do parenteses, além de que é lido da esquerda para a direita";

        echo "<p> algumas funções aritméticas:";
        $resultado3 = abs(-2000);
        echo "<p> A função abs() dá o valor absoluto, abs(-2000) é: $resultado3";
        $resultado4 = base_convert(254, 10, 8);
        echo "<p> A função base_convert() faz conversões em binário, base_convert(254, 10, 8) é: $resultado4 (neste caso está convertendo da base 10 para a base 8)";
        $resultado5 = intdiv(5 , 2);
        echo "<p> A função intdiv faz a divisão inteira e não real, intdiv(5,2) é: $resultado5"; 
        $resultado6 = min(5,2); 
        $resultado7 = max(5,2);
        echo "<p> as funções min e max servem para demonstra o minimo e maximo de uma operação, min(5,2) max(5,2) é respectivamente: min: $resultado6, max: $resultado7"



    ?>
</body>
</html>