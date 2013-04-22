<?php
	if(isset($_GET['opt'])){
		switch($_GET['opt']){
			case "index":
				echo "<h1>oso</h1>";
			break;
		}							
	}
	else{
		include('views/login.php');
	}
		
?>