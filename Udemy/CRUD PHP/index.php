<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <?php
            include_once "conexao.php";
            try {
                // Executa a instrução SQL
                $consulta = $conectar->query("SELECT * FROM login");
                
                
            } catch (PDOException $erro) {
                $erro->getMessage();
            }
        ?>
        <a href="formCadastro.php">Novo Cadastro</a>
        <br>
        
        <p>Listagem de Usuários</p>
        <table border="2"> 
            
            <tr>
                <td>Nome</td>
                <td>Senha</td>
                <td>Ações</td>
                <tr>
                <?php 
                    while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)){
                        $nome = $linha["nome"];
                        $senha = $linha["senha"];
                        $id = $linha["id"];
                        echo "<tr><td>$nome</td><td>$senha</td><td><a href='formEditar.php?id=$id'>Editar</a>-<a href='excluir.PHP?id=$id'>Excluir</td></tr>";

                    }
                ?>
                </tr>
            </tr>
            
        </table>
        <?php echo "A quantidade de registros são:" . $consulta->rowCount()?>
    </main>
    <section>
        <?php
            
        ?>
            
    </section>
</body>
</html>

