
<!DOCTYPE html>
<html><head>
        <meta charset="UTF-8">
        <title>ejemplo</title>
</head><body>
    <h2>Formulario</h2>
    <form method="post" action="">
	<ul>
	
   <li> <input type="text" name="primer"  value=""></li><br>
   <li> <input type="text" name="segun"  value=""></li><br>
   <li> <input type="text" name="tercer"  value=""></li><br>
   <li> <input type="text" name="cuarto"  value=""></li><br>
   <li> <input type="text" name="quinto"  value=""></li><br>
   <li> <input type="text" name="sexto"  value=""></li><br>
  
	</ul>
	<input type="submit"  value="ENVIAR">
    </form>
    
    <?php
echo '<pre>';

$primer=$_POST['primer'];
$segun=$_POST['segun'];
$tercer=$_POST['tercer'];
$cuarto=$_POST['cuarto'];
$quinto=$_POST['quinto'];
$sexto=$_POST['sexto'];
echo "<h1>LISTA</h1>";
echo "<ul>";
echo"<li>$primer</li>";
echo"<li>$segun</li>";
echo"<li>$tercer</li>";
echo"<li>$cuarto</li>";
echo"<li>$quinto</li>";
echo"<li>$sexto </li>";
echo "</ul>";



    ?>
</body></html>