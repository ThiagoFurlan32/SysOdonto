<?php  //remSalas.php

   $id = trim($_POST['id']); 

   if (!empty($id)){
       include 'conexao.php';  
       $pdo = Conexao::conectar(); 
       $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
       $sql = "DELETE from localizacao WHERE id=?";
       $query = $pdo->prepare($sql);
       $query->execute(array($id));
       Conexao::desconectar(); 
   }
   else echo "O campo ID está vazio..."; 
   header("location: listarSalas.php")
?>