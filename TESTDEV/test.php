<html>

	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    	<meta charset="UTF-8">
	</head>

	<body>

		<form method="POST" action="test.php">

			<p>Entrez un nombre entre 0 et 5 :</p><input type="text" name="nombre">
			<input type="submit" name="valider" value="go !">

		</form>

	</body>


</html>

<?php

	$notation = $_POST['nombre'];

	if (isset($_POST['valider']) && !empty($_POST['nombre'])) {
		
		if ($notation == 5 ) {
			
			echo "+++++";

		}

		if ($notation == 4 ) {
			
			echo "++++0";

		}

		if ($notation == 3 ) {
			
			echo "+++00";

		}

		if ($notation == 2 ) {
			
			echo "++000";

		}

		if ($notation == 1 ) {
			
			echo "+0000";

		}

		if ($notation == 0 ) {
			
			echo "00000";

		}
	}




?>