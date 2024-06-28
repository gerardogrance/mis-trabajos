<html> 
<form method="post">
    <label for="nombre">Nombre: </label>
    <input type="text" name="nombre" required><br><br>
    
    <label for="salario">Salario: </label>
    <input type="number" name="salario" required><br><br>
    
    <label for="años_trabajados">Años trabajando en la empresa: </label>
    <input type="number" name="años_trabajados" required><br><br>
    
    <input type="submit" value="Enviar">
</form> </html> 
    
    
    
    
    
    <?php



if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $salario = $_POST["salario"];
    $añosTrabajados = $_POST["años_trabajados"];
    
    echo "El Señor $nombre, Cuenta con un salario de: $salario; y lleva trabajando para nosotros $añosTrabajados Años";
    $nombre = "Juan";
    $salario = 300000;
    $años_trabajados = 10;
    
    if ($años_trabajados >= 10 && $años_trabajados <= 15 && $salario <= 350000) {
        echo "El Señor " . $nombre . ", Cuenta con un salario de: " . $salario . " y lleva trabajando para nosotros " . $años_trabajados . " Años, Le corresponde 'Vacaciones pagas'.";
    } else {
        echo "El Señor " . $nombre . ", Cuenta con un salario de: " . $salario . " y lleva trabajando para nosotros " . $años_trabajados . " Años, No tendrá vacaciones pagas.";
    }
}
    ?>







