<?php
	
	$fileF;	
	if(isset($_POST['btnSub'])){
		
		 $ipServer = $_POST['server'];
		 $userL = $_POST['user'];
		 $login = $_POST['login'];

		$status= conectFTP($ipServer,$userL,$login);

		if($status == true){
			session_start();
			$_SESSION['IPsession']="$ipServer";
			$_SESSION['Usession']="$userL";
			$_SESSION['Lsession']="$login";

			echo "<script>window.location='indexT.php';</script>";
		}	
	}

	if(isset($_POST['btnCerrar'])){

		session_start();
		session_destroy();
		echo '<script> window.location="index.php";</script>';

	}

	function conectFTP($ipServer,$userL,$login){
		if($ftp_conn = ftp_connect($ipServer, 21, 5) or die("<script> alert('Could not connect to server') <script>")){
			return true;
		}else{
			return false;
		}

		$login = ftp_login($ftp_conn, $userL, $login);
	}
		
	// connect and login to FTP server
	function tablaFTP($ip,$usu,$pass){
		/*conectFTP();*/
		$ftp_conn = ftp_connect($ip, 21, 5) or die("<script> alert('Could not connect to server') <script>");
		
		$login = ftp_login($ftp_conn,$usu,$pass);

		$file_list = ftp_nlist($ftp_conn, "");

		return ($file_list);

		ftp_close($ftp_conn);
	}

	function descargarFile($file,$servidor,$userneim,$password){
		$ftp_conn = ftp_connect($servidor, 21, 5) or die("<script> alert('Could not connect to server') <script>");

		$login = ftp_login($ftp_conn, $userneim, $password);


		$local_file = $file;
		$server_file = $file;

		// Descargar archivo
		if (ftp_get($ftp_conn, $local_file, $server_file, FTP_ASCII))
		  {
		  /*echo "Se ha descargado el archivo $local_file.";*/
		  }
		else
		  {
		  echo "Error downloading $server_file.";
		  }

		// Cerrar Conexion
		ftp_close($ftp_conn);

	}
?>


