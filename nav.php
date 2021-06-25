<?php 
  session_start();
  if (!isset($_SESSION['usuario']))
      Header("location:index.php"); 
?>
<nav class="teal darken-4">
    <div class="nav-wrapper">
      <a href="#" onclick="JavaScript:location.href='menu.php'" class="brand-logo center"><img src="img/Dental-Hygienist.png" width="70"></a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="logout.php">Sair do Sistema</a></li>
      </ul>
      <h7 right>Usuário: <?php echo $_SESSION['usuario'];?><h7>
    </div>
  </nav>

<ul id="slide-out" class="sidenav text-lighten-3 ">
    <li>
    <div class="user-view">
      <div class="background">
        <img src="img/color.png">
      </div>

      <a href="#user"><img class="circle" src="img/dentista-desenho.png"></a>
      <a href="#name"><span class="white-text name">Thiago Furlan</span></a>
      <a href="#email"><span class="white-text email">thiagoferraz10@hotmail.com</span></a>
    </div>
    </li>

    <li><a href="frmInsDentista.php"><i class="material-icons">person</i>Cadastrar Dentistas</a></li>
    <li><a href="frmInsSala.php"><i class="material-icons">airline_seat_recline_extra</i>Cadastrar Sala</a></li>
    <li><a href="frmInsCirurgia.php"><i class="material-icons">library_books</i>Agendar Cirurgia</a></li>
    <li><div class="divider"></div></li>

    <li><a class="subheader"></a></li>
    <li><a class="subheader"></a></li>
    <li><a class="subheader"></a></li>
    <li><a class="subheader"></a></li>
    <li><a class="subheader"></a></li>
    <li><a class="subheader"></a></li>
    <li><a class="subheader"></a></li>
    <li><a href="logout.php">Sair do Sistema<i class="material-icons center">subdirectory_arrow_left</i> </a></li>
    
  </ul>
  <a href="#" data-target="slide-out" class="sidenav-trigger"><i class="material-icons black-text">menu</i></a>    