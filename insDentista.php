<?php 
   //abrir a conexão 
   include 'conexao.php';  

   // recupar campos do formulário usando método post
   $nome = trim($_POST['txtNome']);
   $cpf = trim($_POST['txtCpf']);
   $rg = trim($_POST['txtRg']);
   $cro = trim($_POST['txtCro']);

   if (!empty($nome) && !empty($cro)){
       $pdo = Conexao::conectar(); 
       $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
       $sql = "INSERT INTO dentista (nome, cpf, rg, cro) VALUES (?, ?, ?, ?);";
       $query = $pdo->prepare($sql);
       $query->execute(array($nome, $cpf, $rg, $cro));
       Conexao::desconectar(); 
   }
   else echo "Existem campos em vazio..."; 
  
   header("location: listarDentista.php")
?>