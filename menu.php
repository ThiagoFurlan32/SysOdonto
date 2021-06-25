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
    <link rel="stylesheet" href="css/style_menu.css">
    <link rel="stylesheet" href="css/style_geral.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    

    <title>Sysodonto</title>
</head>

<body style="background-image: url('img/tec.jpg');">
   <!-- menu suspenso -->
  

  <div class="container light-green lighten-4">
   <div class="row">
        <div class="col s12">
        <h3 class="card-panel teal darken-4 white-text text-dark-3 center" class="text-orange">
          Menu
        </h3>

        <div background ="black" class="row">
            <div class="input-field">
                <form action="listarDentista.php" method="GET" id="frmBuscaDentista" class="col s12" >
                    <div class="input-field col s12">
                    <div class="dentista" type="button" onclick="JavaScript:location.href='listarDentista.php'"><img class="img_icon" src="img/dentista.png" height="100px" width="100px"> Ver Dentistas</div>
                    <div class="salas" type="button" onclick="JavaScript:location.href='listarSalas.php'"><img class="img_icon" src="img/cadeira-de-dentista.png" height="100px" width="100px"> Ver Salas</div>
                    <div class="cirurgias" type="button" onclick="JavaScript:location.href='listarCirurgia.php'"><img class="img_icon" src="img/sala-de-cirurgia.png" height="100px" width="100px"> Ver Cirurgias</div>
                    </div>
                </form>
            </div>
        </div>
        <br>
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