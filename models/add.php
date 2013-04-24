<?php
include('models/consulta.php');
//recivimos valores del formulario 

$nombre = $_POST[lastName] 
	
if(insupdDB("INSERT INTO maestros (campos) VALUES (valores '$nombre','$_POST[numTrab]')"))
	header('Location: usuario.php?opt=index');
else
	echo "error: ". mysql_error();
?>