<?php 
   include_once "conexao.php";
   
   try {

        $id = filter_var($_POST['id'], FILTER_SANITIZE_NUMBER_INT);
        $nome = $_POST["nome"];
        $senha = $_POST["senha"];

        $update = $conectar->prepare("UPDATE login SET nome = :nome, senha = :senha  WHERE id = :id");
        $update->bindParam(':id', $id);
        $update->bindParam(':nome', $nome);
        $update->bindParam(':senha', $senha);
        $update->execute();
   
        header("location: index.php");
   
   } catch (PDOException $erro) {
       echo $erro->getMessage();
}

?>