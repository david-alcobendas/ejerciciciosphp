<!DOCTYPE html>
<html><head>
        <meta charset="UTF-8">
        <title>ejemplo</title>
</head><body>
    <h2>Formulario</h2>
    <form method="post" action="">
        <<select name="operador">
				<option value="suma">Suma</option>
				<option value="resta">Resta</option>
				<option value="multiplicacion">Multiplicacion</option>
				<option value="division">Division</option>
			</select><br />
			Ingresa tu primer numero:<br />
			<input type="text" name="valor1"><br />
			Ingresa tu segundo numero:<br />
			<input type="text" name="valor2"><br>
			<input type="reset" value="Borrar">
			<input type="submit" value="Enviar">
    </form>
    
    <h2>Datos enviados</h2>
    <?php
    if ($_POST ["valor1"] !="" and $_POST ["valor2"]!=""){
		if ($_POST["operador"] == "suma") {
			print ($resultado = $_POST ["valor1"] + $_POST ["valor2"]);
			print ('<br /><a href="calculadora.php">Volver</a>');
		} elseif ($_POST["operador"] == "resta") {
			print ($resultado = $_POST ["valor1"] - $_POST ["valor2"]);
			print ('<br /><a href="calculadora.php">Volver</a>');
		} elseif ($_POST["operador"] == "multiplicacion") {
			print ($resultado = $_POST ["valor1"] * $_POST ["valor2"]);
			print ('<br /><a href="calculadora.php">Volver</a>');
		} elseif ($_POST["operador"] == "division") {
			print ($resultado = $_POST ["valor1"] / $_POST ["valor2"]);
			print ('<br /><a href="calculadora.php">Volver</a>');
		}
	} else {
		print("Ingresa algun valor");
		print ('<br /><a href="calculadora.php">Volver</a>');
	}
    ?>
</body></html>