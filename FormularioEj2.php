<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario ejercicio 2</title>
    <?php require 'Ejercicio2.php'; ?>
</head>
<body>

<form action= "" method="post">
        <label for="numerin">Indique un número con el que trabajar</label>
        <br>
        <input type="text" name="numero" step="0.1">
        <br><br>
        <select name="tipoFuncion">
            <option value="Sumatorio">Sumatorio</option>
            <option value="Factorial">Factorial</option>
        </select>
        <br><br>
        <input type="hidden" name="action" value="tipoFuncion">
        <input type="submit" value="Haz cositas"><br>
</form>
<?php
if ($_SERVER ["REQUEST_METHOD"]== "POST"){
    if($_POST["tipoFuncion"]=="Sumatorio"){
        $numerin=(int) $_POST["numero"];
        echo Sumatorio($numerin); 
    }
    if($_POST["tipoFuncion"]=="Factorial"){
        $numerin=(int) $_POST["numero"];
        echo Factorial($numerin); 
    }
}
?>


    
</body>
</html>