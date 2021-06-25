<?php //frmEdtCirurgia.php
    //include 'menu.php'; 
    include 'conexao.php'; 

    //recuperar o id pelo método GET
    $id =$_GET['id']; 

    //recuperar os dados no banco de dados
     $pdo = Conexao::conectar(); 
     $pdo->setAttribute(PDO:: ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
     $sql = "SELECT * FROM cirurgia WHERE id=?;"; 
     $query = $pdo->prepare($sql);
     $query->execute(array($id));

     $dados = $query->fetch(PDO::FETCH_ASSOC);

     //atribui dados em variáveis
     $nome = $dados['nome_paciente'];
     $localizacao = $dados['localizacao_cirurgia'];
     $dentista = $dados['dentista_cirurgia'];
     $data = $dados['data_cirurgia'];
    Conexao::desconectar(); 
?>
<?php include 'nav.php';?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>

    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="stylesheet" href="css/style_geral.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <title>Editar Cirurgia</title>
</head>
<body style="background-image: url('img/tec.jpg');">
    <div class="container light-green lighten-4 col s12">
        <div class="card-panel teal darken-4 white-text text-dark-3">
            <h3>Alterar Dados da Cirurgia</h3>
        </div>
     <div class="row">
        <form action="edtCirurgia.php" method="POST" id="frmEdtCirurgia" class="col s12">
            
            <div class="input-field col s8">
              <h3>
                <label for="lblID">
                         <b>ID: </b> <?php echo $id;?>
                </label> 
                <input type="hidden" id="id" name="id" value="<?php echo $id;?>">
              </h3>
            </div>
           
            <br>
            <div class="input-field col s8">
                <label for="lblNome">Informe o Nome Completo do Paciente: </label>
                <input type="text" class="form-control" id="txtNome" name="txtNome"
                value="<?php echo $nome?>">
            </div>
            <div class="input-field col s5">
                <label for="lblCpf">Informe o ID da Sala: </label>
                <input type="number" class="form-control" id="txtSala" name="txtSala"
                value="<?php echo $localizacao?>">
            </div>
            <div class="input-field col s5">
                <label for="lblRG">Informe o ID do Dentista: </label>
                <input type="text" class="form-control" id="txtDentista" name="txtDentista"
                value="<?php echo $dentista?>">
            </div>      
            <div class="input-field col s5">
                <label for="lblIdade">Informe a Data da Cirurgia: </label>
                <input type="text"  class="form-control" id="txtData" name="txtData"
                value="<?php echo $data?>">
            </div>


            <br>
            <div class="input-field col s8">
               <button class="btn waves-effect waves-light green" type="submit" name="btnSalvar">
               Salvar <i class="material-icons left">save</i> 
               </button>
                </button>
               <button class="btn waves-effect waves-light orange" type="reset" name="btnLimpar">
               Limpar <i class="material-icons left">palette</i> 
               </button>

               <button class="btn waves-effect waves-light indigo" type="button" name="btnVoltar"
                onclick="JavaScript:location.href='listarCirurgia.php'">
               Voltar <i class="material-icons left">subdirectory_arrow_left</i> 
               </button>
            </div>

        </form>   
     </div>
    </div>
</body>
</html>

<script>
  document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.sidenav');
    var instances = M.Sidenav.init(elems, options);
  });

  // Initialize collapsible (uncomment the lines below if you use the dropdown variation)
  // var collapsibleElem = document.querySelector('.collapsible');
  // var collapsibleInstance = M.Collapsible.init(collapsibleElem, options);

  // Or with jQuery

  $(document).ready(function(){
    $('.sidenav').sidenav();
  });
</script>