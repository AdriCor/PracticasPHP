<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DFormulario del Ejercicio 1</title>
    <?php require 'Ejercicio1.php'; ?>
</head>
<body>
<h2>Formulario para cambio de divisas</h2>
<form action= "" method="post">
        <label for="cambio">Indique la cantidad de dinero a cambiar</label>
        <br><br>
        <input type="text" name="dinero" step="0.1">
        <br><br>
        <select name="tipoDivInicio">
            <option value="Euros">Euros</option>
            <option value="Dolares">Dolares</option>
            <option value="Yenes">Yenes</option>
        </select>
        <select name="tipoDivCambio">
            <option value="Euros">Euros</option>
            <option value="Dolares">Dolares</option>
            <option value="Yenes">Yenes</option>
        </select>
        <br><br>
        <input type="hidden" name="action" value="tipoIVA">
        <input type="submit" value="Cambiar Divisa"><br>
</form>
<?php
if ($_SERVER ["REQUEST_METHOD"]== "POST"){
    echo "<h3> El cambio sería: </h3>";
    $dinero = (float)$_POST["dinero"]; 
    $tipoDivisa= (string)$_POST["tipoDivInicio"];
    $divisaCambio= (string)$_POST["tipoDivCambio"];
    echo cambiarDivisa($dinero, $tipoDivisa, $divisaCambio );
}
?>
    
</body>
</html>