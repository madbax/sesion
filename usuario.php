<?php
	//session_start();
	//if(!$_SESSION){
		//echo "<script languaje=javascript>
			//alert('usuario no autenticado')
			//self.location = 'index.php'
			//</script>";
	//}
	if(isset($_GET['opt'])){
		switch($_GET['opt']){
			case "preguntas":
				include('models/consultas.php');
				$id =$_GET['id'];
				$preguntas = consultarPreguntas("SELECT * FROM preguntas WHERE id_encuesta='$id'");
				if($preguntas[0]==null){
					echo 'no hay preguntas desea <a href="usuario.php?opt=addPreguntas&id='.$id.'">agregar</a>';
				}else{
					echo "<table>
					<tr><td>numero</td><td>pregunta</td><td>condicion</td><td>mandatory</td><td>Opciones</td></tr>";
					foreach($preguntas as $pregunta){
						echo "<tr><td>".$pregunta['numero_pregunta'].".- </td><td>".$pregunta['pregunta']."</td><td>".$pregunta['condicion']."</td><td>".$pregunta['mandatory']."</td><td><input type='submit' value='editar'></td></tr>";
					}
					echo "</table>";
				}
			break;
			case "addPreguntas":
				include('views/addPreguntas.php');
				$id =$_GET['id'];
				echo $id;
			break;
		}							
	}
	else{
		include('models/consultas.php');
		$encuestas = consultarEncuestas();
		echo "<ul>";
			foreach($encuestas as $encuesta){
				echo '<li><a href="usuario.php?opt=preguntas&id='.$encuesta['id_encuesta'].'">'.$encuesta['encuesta'].'</a></li>';
			}
		echo "</ul>";
	}
?>