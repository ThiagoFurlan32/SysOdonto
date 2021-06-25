<?php  //edtDentista.php
   //abrir a conexão 
   include 'conexao.php';  

   // recupar campos do formulário usando método post
   $id = trim($_POST['id']); 
   $nome = trim($_POST['txtNome']);
   $cpf = trim($_POST['txtCpf']);
   $rg = trim($_POST['txtRg']);
   $cro = trim($_POST['txtCro']);

   if (!empty($nome) && !empty($cro)){
       $pdo = Conexao::conectar(); 
       $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
       $sql = "UPDATE dentista SET nome=?, cpf=?, rg=?, cro=? WHERE id=?";
       $query = $pdo->prepare($sql);
       $query->execute(array($nome, $cpf, $rg, $cro, $id));
       Conexao::desconectar(); 
   }
   else echo "Existem campos em vazios..."; 
   header("location: listarDentista.php")
?>