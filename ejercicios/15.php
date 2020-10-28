<!DOCTYPE html>
<html><head>
        <meta charset="UTF-8">
        <title>ejemplo</title>
</head><body>
    <h2>Formulario</h2>
    <form method="post" action="">
    <input type="text" name="Nombres[]" id="nombre1" value=""><br>
	<input type="text" name="Nombres[]" id="nombre2" value=""><br>
	<input type="text" name="Nombres[]" id="nombre3" value=""><br>
	<input type="submit"  value="ENVIAR">
    </form>
    
    <?php
echo '<pre>';
print_r($_POST);
    ?>
</body></html>