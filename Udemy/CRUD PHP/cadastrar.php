<?php
    include_once "conexao.php";
   
    try {

        
        $nome = $_POST["nome"];
        $senha = $_POST["senha"];    
        $insert = $conectar->prepare("INSERT INTO login (nome, senha) VALUES (:nome, :senha)");
        $insert->bindParam(':nome', $nome);
        $insert->bindParam(':senha', $senha);
        $insert->execute();
    
        header("location: index.php");
    
    } catch (PDOException $erro) {
        echo $erro->getMessage();
}
    
?>