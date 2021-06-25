<?php 
   //abrir a conexão 
   include 'conexao.php';  


   $nome = trim($_POST['txtNome']);
   $sala = trim($_POST['txtSala']);
   $dentista = trim($_POST['txtDentista']);
   $data = trim($_POST['txtData']);

   if (!empty($nome) && !empty($data)){
       $pdo = Conexao::conectar(); 
       $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
       $sql = "INSERT INTO cirurgia(nome_paciente, localizacao_cirurgia, dentista_cirurgia, data_cirurgia) VALUES (?,?,?,?)";
       
       $query = $pdo->prepare($sql);
       $query->execute(array($nome, $sala, $dentista, $data));
       Conexao::desconectar(); 
   }
   else echo "Existem campos em vazio...";
  
   header("location: listarCirurgia.php")
?>