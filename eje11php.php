<?php
$var1 = 1;
$var2 = 1;
$resultado1=($var1+$var2);
$resultado2=($var1-$var2);
$resultado3 = ($var1 * $var2);
$resultado4 = ($var1 / $var2); 
?>
<!DOCTYPE html>
<html>
<head>
    <title>formulario php</title>
    <h1>Formulario procesado php</h1>
</head>
<body>
<div>
    <form name="formulario" method="post" action="eje10php.php">
    <label>Ingrese numero 1:</label>
    <input value="<?php echo $var1;?>"></input>
    <label>Ingrese numero 2:</label>   
    <input value="<?php echo $var2;?>"></input>   
    <button type="sudmit">calcular</button>
    </form>
</div>
</body>
</html>



