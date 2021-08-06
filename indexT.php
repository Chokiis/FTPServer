<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Servidor FTP</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
	<link rel="stylesheet" href="CSS/style_sheet.css">
  <?php 
  
  session_start();

  $ipSession= $_SESSION['IPsession'];
  $uSession= $_SESSION['Usession'];
  $lSession= $_SESSION['Lsession'];

  ?>
</head>
<body class="bg">
<nav class="navbar navbar-expand-lg navbar-dark bg-black " >
<a class="navbar-brand" id="title" href="#"></a>

<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
  <span class="navbar-toggler-icon"></span>
</button>

<div class="collapse navbar-collapse" id="navbarSupportedContent">
  <ul class="navbar-nav mr-auto">
        <!--Contenido Menu Usuarios -->
  </ul>

  <form class="form-inline my-2 my-lg-0" method="POST" action="funcionesFTP.php">
    <div>
      <label class="text-white mr-5 font-weight-bolder h4"> USUARIO: <?php echo $_SESSION['Usession'] ?></label>
    </div>
    <button class="btn btn-outline-primary my-2 my-sm-0" type="submit" name="btnCerrar"> Cerrar Sesión </button>
  </form>
</div>
</nav>
	<header>
		<h1 class="mt-3">Servidor FTP SGLP</h1>	
	</header>
	<table class="mt-5">
    <thead class="tf">
    <tr">  
      <th scope="col" class="br-tr"><span>Files</span></th>
      <th class="br-tr"><span>Descargar</span></th>
    </tr>
    </thead>
    <tbody>
      <?php
			  require 'funcionesFTP.php';
        $list = tablaFTP($ipSession,$uSession,$lSession); 
        do{
          $arrFile = current($list);
            echo "	
              <tr>
                <td><span>" .$arrFile. "</span></td>
                <td> <a href= 'descargar.php? file=".$arrFile."'><img src= Imagenes/salvar.png> </a></td>
              </tr>
            ";
        }while(next($list));
		  ?>
    </tbody>   
  </table>
</body>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
</html>