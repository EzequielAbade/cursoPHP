<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <pre>
            <?php 
                setcookie("dia-da-semana", "SEGUNDA", time() + 3600);

                session_start();
                $_SESSION["teste"] = "Funcionou!";

                echo "<h1> Superglobal GET </1> <br>";
                var_dump($_GET);

                echo "<h1> Superglobal POST </1> <br>";
                var_dump($_POST);

                echo "<h1> Superglobal REQUEST </1> <br>";
                var_dump($_REQUEST);

                echo "<h1> Superglobal COOKIE </1> <br>";
                var_dump($_COOKIE);

                echo "<h1> Superglobal SESSION </1> <br>";
                var_dump($_SESSION);

                echo "<h1> Superglobal ENV </1> <br>";
                var_dump($_ENV);

                echo "<h1> Superglobal SERVER </1> <br>";
                var_dump($_SERVER);

                echo "<h1> Superglobal GLOBALS </1> <br>";
                var_dump($_GLOBALS)

    
            ?>
        </pre>
    </main>
</body>
</html>