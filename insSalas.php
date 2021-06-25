

<?php 
   //abrir a conexão 
   include 'conexao.php';  

   // recupar campos do formulário usando método post
   $nome = trim($_POST['txtNome']);
   if (!empty($nome)){
       $pdo = Conexao::conectar(); 
       $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
       $sql = "INSERT INTO localizacao (nome) VALUES (?);";
       $query = $pdo->prepare($sql);
       $query->execute(array($nome));
       Conexao::desconectar(); 
   }
   else echo "O campo está vazio..."; 
  
   header("location: listarSalas.php")
?>