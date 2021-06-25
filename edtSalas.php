<?php  //edtSalas.php
   //abrir a conexão 
   include 'conexao.php';  

   $id = trim($_POST['id']); 
   $nome = trim($_POST['txtNome']);

   if (!empty($nome)){
       $pdo = Conexao::conectar(); 
       $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
       $sql = "UPDATE localizacao SET nome=? WHERE id=?";
       $query = $pdo->prepare($sql);
       $query->execute(array($nome,$id));
       Conexao::desconectar(); 
   }
   else echo "O campo está vazio..."; 
   header("location: listarSalas.php")
?>