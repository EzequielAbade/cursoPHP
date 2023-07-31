<?php 
    try {
        // Faz conexão com o banco de dados
       $conectar = new PDO("mysql:host=localhost;port=3306;dbname=pdo", "root", "");
       

    } catch (PDOException $erro) {
       // Caso ocorra algum erro na conexão com o banco, exibe a mensagem
       echo "Falhar ao conectar com o banco de dados" . $erro->getMessage();
    }
?>