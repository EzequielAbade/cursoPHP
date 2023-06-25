<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversões de String</title>
</head>
<body>
    <h1>Algumas conversões de Strings</h1>
    <?php 
     $nome = "guanabara";
     $sobrenome = "Gustavo";
     echo "Estou usando double quoted = $nome $sobrenome || ";

     $nome1 = "Ezequiel";
     $sobrenome1 = "Abade";
     echo 'Estou usando single quoted $nome $sobrenome';

     $nome2 = "Ezequiel";
     $sobrenome2 = "Abade";
     echo " || estou usando sequencia de escape no nickname da steam: $nome2 \"Abadezinho\" $sobrenome2"
    ?>
   
</body>
</html>