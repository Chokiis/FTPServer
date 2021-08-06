<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>DESCARGAR</title>
	<link rel="stylesheet" href="CSS/style_sheet.css">
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

	<?php 
  
    session_start();

    $ipSession=$_SESSION['IPsession'];
    $uSession=$_SESSION['Usession'];
    $lSession=$_SESSION['Lsession'];
  
  ?>
</head>
<body>
	<div style="color: white;">	
		<?php 
			require 'funcionesFTP.php';

				descargarFile($_GET['file'],$ipSession, $uSession,$lSession);
				echo"<script>swal({
				  title: 'Archivo descargado.',
				  text: 'Se ha descargado el archivo con éxito.',
				  icon: 'success',
				}).then(function(){
					window.location= 'indexT.php'
				  });</script>";	
			 	
		?>
	</div>
</body>
</html>