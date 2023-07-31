<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar</title>
</head>
<body>
    <main>
        <?php
            include_once "conexao.php";
            
            $id = filter_var($_GET['id'], FILTER_SANITIZE_NUMBER_INT);
            $consulta = $conectar->query("SELECT * FROM login WHERE id = '$id'");
            $linha = $consulta->fetch(PDO::FETCH_ASSOC);
            $nome = $linha["nome"];
            $senha = $linha["senha"];

        ?>
        <h1>Alterar cadastro</h1>
        <form action="editar.php" method="post">
            <label for="nome">Nome</label>
            <input type="text" name="nome" id="nome" value="<?php echo $nome?>">
            <label for="senha">Senha</label>
            <input type="text" name="senha" id="senha" value="<?php echo $senha?>">
            <input type="hidden" name="id" value="<?php echo $id ?>">
            <input type="submit" value="Editar">
        </form>
    </main>
</body>
</html>