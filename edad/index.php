<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>mayoria_de_edad</title>
</head>
<body>
<fieldset>
<legend>control de ingreso a la montaña rusa</legend>
<form action=index.php method="post">
    <input type="number" name= "edad"  placeholder="ingresa tu edad">
    <input type="number" name="estatura" placeholder="ingresa tu estatura">
    <input type="submit" value="verificar"> 

</form>

</fieldset>
</body>
</html>

<?php 
if ($_POST) {
    $edad = $_POST['edad'];
    $estatura = $_POST['estatura']; 
    if ($edad >= 18 && $estatura >= 1.80) {
        echo"si cumplis con lo que se pide, si podes entrar";
    }elseif ($edad < 18 && $estatura < 1.80) {
    echo "no cumplis con lo que se pide,  no podes entar"; 
    }

}

?>