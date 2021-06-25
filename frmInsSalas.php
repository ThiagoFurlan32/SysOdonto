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

    <title>Inserir Salas</title>
</head>
<body style="background-image: url('img/tec.jpg');">
    <div class="container light-green lighten-4 col s12">
        <div class="card-panel teal darken-4 white-text text-dark-3 col s12">
            <h3>Criar Nova Sala</h3>
        </div>
     <div class="row">
        <form id="formSalas" action="insSalas.php" method="POST" id="frmInsSalas" class="col s12">

            <div class="input-field col s10">
                <label for="lblNome">Informe a Sala</label>
                <input type="text" class="form-control" id="txtNome" name="txtNome" required minlength="3">
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
                onclick="JavaScript:location.href='listarSalas.php'">
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