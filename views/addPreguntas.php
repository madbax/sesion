<?php SESSION_START(); ?>
<form action="models/add.php" method="post">
pregunta:<input type="text" name="username" size="20" maxlength="20" />
<br />
Mandatory:<input type="radio" name="mandatory" />
<br />
condiciona a: <input type="text" name="concicion" size="20" maxlength="20" />
<br />
Numero de pregunta: <input type="text" name="numero_pregunta" size="20" maxlength="3" />
<input type="submit" value="Ingresar" />
</form>