<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sueldo</title>
</head>
<body>
<form action="index.php" method="post">

 
    <input type="number" name="sueldo" placeholder="ingrese su sueldo">
<input type="submit" value="calcular">

</form>
<?php

if ($_POST) {  
    $sueldo = $_POST['sueldo'];

    if ($sueldo >= 320000 && $sueldo <= 500000) {
        $interes = $sueldo * 0.05;
        echo "su sueldo es " . ($sueldo + $interes) . ";";
    } else if ($sueldo < 320000 && $sueldo > 0) {
        $interes = $sueldo * 0.08;
        echo "su sueldo es " . ($sueldo + $interes) . ";";
    }
}





?>


</body>
</html>