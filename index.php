

<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="https://cdn3.iconfinder.com/data/icons/happily-colored-snlogo/128/medium.png">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    
    <link href="//cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/css/materialize.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/js/materialize.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

    <title>Login - SysOdonto</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
    <!-- CSS -->
    <link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/style_geral.css">
  </head>

  <body>

    <nav class="teal darken-4">
    <div class="sistema">SysOdonto</div>
    
      
  	</nav>

	<div class="had-container">

	     <div class="parallax-container logueo">
      	<div class="parallax"><img src="img/dente_tec.jpg"></div>
      	<div class="row"><br>
      		<div class="col m8 s8 offset-m2 offset-s2 center">
      			<h4 class="truncate ">
      				<img src="img/odonto_tec.jpg" alt="" height="150" class="circle responsive-img">
					  <div class="row login">
					  	<h4>Faça seu Login</h4>
					    <form action="login.php" method="POST"class=" m6">
					      <div class="row">
					         <div class="input-field col m12 s12">
					          <i class="material-icons iconis prefix">account_box</i>
					          <input id="icon_prefix" type="text" name="usuario" class="validate">
					          <label for="icon_prefix">Usuário: </label>
					        </div>
					      </div>
					      <div class="row">
					        <div class="input-field col m12 s12">
					          <i class="material-icons iconis prefix">https</i>
					          <input id="password" type="password" name="senha" class="validate">
					          <label for="password">Senha: </label>
					        </div>
					      </div>
					      <div class="row">
					      	<button class="btn waves-effect teal darken-4" type="submit">Acessar</button>
					      </div>
					    </form>
					  </div>
      			</h4>
		   	  </div>
	    	</div>
	    </div>
    </div>
    

    </div> <!-- fin del .container -->

<!-- Rodapé da página de login -->
<footer class="page-footer grey darken-4">
    <div class="footer-copyright">
        <div class="container center">
        	Copyright © Thiago-FEMA - 2021
        </div>
    </div>
</footer>

    <!-- jQuery first, then Bootstrap JS. -->
    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
    <script src="mySpxript.js"></script>
  </body>
</html>

<script type="text/javascript">
	$(document).ready(function(){
    		$('.button-collapse').sideNav({
		      menuWidth: 300, // Default is 300
		      edge: 'left', // Choose the horizontal origin
		      closeOnClick: true, // Closes side-nav on <a> clicks, useful for Angular/Meteor
		      draggable: true, // Choose whether you can drag to open on touch screens,
		      onOpen: function(el) { /* Do Stuff*/ }, // A function to be called when sideNav is opened
		      onClose: function(el) { /* Do Stuff*/ }, // A function to be called when sideNav is closed
		    }
		  );
      		$('.parallax').parallax();
    	});
</script>