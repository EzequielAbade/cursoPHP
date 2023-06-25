<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $num = 300;
        echo "O valor da variavel é $num |";
        
        $num1 = 0x1A;   
        echo nl2br(" O valor da variavel é $num1 |" );

        $v = 400;
        echo " a variavel1 '$v' " . var_dump($v) . "|";
        $v1 = "tu";
        echo " a variavel2 '$v1' " . var_dump($v1) . "|";
        $v2 = 40.50;
        echo " a variavel3 '$v2' " . var_dump($v2) . "|";
        $v3 = true;
        echo " a variavel4 '$v3' " . var_dump($v3) . "|";
        ?>
</body>
</html>