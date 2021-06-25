<?php //listarCirurgias.php
    //include 'menu.php'; 

    if (isset($_GET['busca']))
       $busca = $_GET['busca'];
       else $busca = ''; 

    include 'conexao.php'; 
     $pdo = Conexao::conectar(); 
     $pdo->setAttribute(PDO:: ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
     if ($busca!='')
           $sql = "Select c.id, c.nome_paciente, l.nome sala, d.nome, c.data_cirurgia
           from cirurgia c, dentista d, localizacao l
           where c.dentista_cirurgia = d.id
           and c.localizacao_cirurgia = l.id
           and c.nome_paciente LIKE '%" . $busca . "%'
           order by c.nome_paciente"; 
           
       else $sql = "Select c.id, c.nome_paciente, l.nome sala, d.nome, c.data_cirurgia
       from cirurgia c, dentista d, localizacao l
       where c.dentista_cirurgia = d.id
       and c.localizacao_cirurgia = l.id
       order by c.nome_paciente"; 
     $listaCirurgia = $pdo->query($sql); 
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

    <title>Cirurgias</title>
</head> 
<body style="background-image: url('img/tec.jpg');">
    
   <div class="container light-green lighten-4">
   <div class="row">
        <div class="col s12">
        <h3 class="card-panel teal darken-4 white-text text-dark-3" class="text-orange">
          Listar as Cirurgias
        </h3>

        <div class="row">
            <div class="input-field">
                <form action="listarCirurgia.php" method="GET" id="frmBuscaCirurgia" class="col s12" >
                    <div class="input-field col s12">
                        <label for="lblNome" class="red-text text-red   darken-4 ">Informe o Nome do Paciente: </label>

                        <input type="text" class="text-dark-3 form-control col s6" id="txtBusca" name="busca">
                        <button class="btn waves-effect teal darken-3 col m0 " type="submit" name="action">

                        <i class="material-icons center">search</i></button>
                        <div class="input-field col m1"></div>
                          <button class="btn waves-effect teal darken-3 col m4" type="button" onclick="JavaScript:location.href='frmInsCirurgia.php'">Inserir Novo Registro</button>


                    </div>
                </form>
            </div>
        </div>
             
        <table class="striped highlight  green lighten-3 responsive-table">
            <tr class="green darken-3  grey-text text-lighten-3">    
                <th>ID</th>
                <th>NOME</th>
                <th>LOCALIZACAO</th>
                <th>DENTISTA</th>
                <th>DATA</th>

            </tr>
            <?php 
                foreach ($listaCirurgia as $Cirurgia){
            ?>
                <tr>
                    <td><?php echo $Cirurgia['id'];?></td>
                    <td><?php echo $Cirurgia['nome_paciente'];?></td>
                    <td><?php echo $Cirurgia['sala'];?></td>
                    <td><?php echo $Cirurgia['nome'];?></td>
                    <td><?php echo $Cirurgia['data_cirurgia'];?></td>
                    <td> <a class="btn-floating btn-small waves-effect orange darken-3"
                          onclick="JavaScript:location.href='frmEdtCirurgia.php?id=' +
                          <?php echo $Cirurgia['id'];?>" >
                           <i class="material-icons">edit</i>
                    </td>
                    <td> <a class="btn-floating btn-small waves-effect red accent-4"
                          onclick="JavaScript:location.href='frmRmvCirurgia.php?id=' +
                          <?php echo $Cirurgia['id'];?>" >
                           <i class="material-icons">delete_sweep</i>
                    </td>
                </tr>
            <?php
                }
            ?>
        </table>
        <div class="row">
        <div class="input-field col s8">
        <button class="btn teal darken-3" type="button" name="btnVoltar" onclick="JavaScript:location.href='menu.php'">Voltar<i class="material-icons left">subdirectory_arrow_left</i>
        </button>
        </div>
        </div>
      </div>
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