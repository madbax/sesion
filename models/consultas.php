<?php
	function consultarPreguntas($query){
		require('models/dbConfig.php');
		$conexion =  mysql_connect($serverAddress, $user, $passwd);
		mysql_select_db($dbName);
		$resultado= mysql_query($query, $conexion);
		$i=0;
		while ($reg2=mysql_fetch_array($resultado)){
			$arreglo[$i]=$reg2;
			$i++;
		}
		mysql_close($conexion);
		if($i==0){
			return $reg2;
		}
		else{
			return $arreglo;
		}
	}	
	function consultarEncuestas(){
		require('models/dbConfig.php');
		$conexion =  mysql_connect($serverAddress, $user, $passwd);
		mysql_select_db($dbName);
		$resultado= mysql_query("SELECT * FROM `encuesta`", $conexion);
		$i=0;
		while ($reg2=mysql_fetch_array($resultado)){
			$arreglo[$i]=$reg2;
			$i++;
		}
		mysql_close($conexion);
		if($i==0){
			return $reg2;
		}
		else{
			return $arreglo;
		}
	}
	function add($nonequery){
		require('models/dbConfig.php');
		$conexion =  mysql_connect($serverAddress, $user, $passwd);
		mysql_select_db($dbName);
		$regresar= mysql_query($nonequery,$conexion);
		mysql_close($conexion);
		return $regresar;
	}
?>