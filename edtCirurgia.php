<?php  //edtCirurgia.php
   //abrir a conexão 
   include 'conexao.php';  

   $id = trim($_POST['id']); 
   $nome = trim($_POST['txtNome']);
   $sala = trim($_POST['txtSala']);
   $dentista = trim($_POST['txtDentista']);
   $data = trim($_POST['txtData']);

   if (!empty($nome) && !empty($data)){
       $pdo = Conexao::conectar(); 
       $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
       $sql = "UPDATE cirurgia SET nome_paciente=?, localizacao_cirurgia=?, dentista_cirurgia=?, data_cirurgia=? WHERE id=?";
       $query = $pdo->prepare($sql);
       $query->execute(array($nome, $sala, $dentista, $data, $id));
       Conexao::desconectar(); 
   }
   else echo "Existem campos em vazios..."; 
   header("location: listarCirurgia.php")
?>