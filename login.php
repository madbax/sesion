<?php
	include('models/dbConfig.php');
	if(!isset($_SESSION)){
		session_start();
	}
	$username=$_POST['username'];
	$password=$_POST['password'];

	//coneccion a la base de datos
	$coneccion= mysql_connect($serverAddress, $user, $passwd);
	mysql_select_db($dbName) or die ('No se puede conectar a la base de Datos');
	
	$query=mysql_query("SELECT * FROM usuarios WHERE nombre='$username' AND password='$password'",$coneccion);
	$data=mysql_fetch_array($query);
	
	if(!$data[0]){
		echo "<script language = javascript>
		alert('los datos son incorrectos')
		self.location='index.php'
		</script>";
	}else{
		$_SESSION['id_usuario']=$data['id_usuario'];
		$_SESSION['nombre']=$data['nombre'];
		header("Location: usuario.php");
	}
	
?>
