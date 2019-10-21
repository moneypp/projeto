<!DOCTYPE html>
<html>
<head>
	<title>inserir dados</title>
</head>
<body>
	<?php
		session_start();
	?>
	<form action="teste_verif.php" method="post">
		digite o valor inicial:<input type="text" name="inicial"><br>

		digite sua divida:<input type="text" name="divida"><br>

		<input type="submit" name="sim">
	</form>

</body>
</html>