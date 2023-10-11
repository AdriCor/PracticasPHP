<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3</title>
    <?php require 'FuncionEj3.php'; ?>
</head>
<body>
    <h2>
    Usando el array bidimensional de animales que se proporciona a continuación (que
muestra el nombre de la especie, su clase y el número de ejemplares en españa),
muestra en una tabla HTML5 la información de dichos animales.
Una vez hecho esto, crea una función comprobarEstado, que reciba el número de
ejemplares y devuelva los siguientes valores:
● Si el número de ejemplares es 0, “Extinto”
● Si el número de ejemplares es mayor que 0 y menor o igual que 500, “En
peligro crítico”
● Si el número de ejemplares es mayor a 500 y menor o igual a 2000, “En
peligro”
● Si el número de ejemplares es mayor a 2000, “Amenazado”
Modifica la tabla para que se muestre una cuarta columna en la que aparezca el
resultado de la función comprobarEstado aplicada a cada animal.
Por último, crea un formulario que reciba un campo de texto y cuente con un botón
“Comprobar”. Al pulsar en el botón, si el animal escrito en el campo de texto está en
el array, se mostrará el estado en que se encuentra. Por ejemplo, si introducimos
“Lobo ibérico” se mostrará el mensaje “El Lobo ibérico está Amenazado”.
Para hacer esto basta con, en la respuesta al formulario, recorrer el array con un
bucle foreach, usar la función list y realizar varias comprobaciones.
    </h2>

    <?php
    $animales = [
        ["Lobo ibérico", "Mamífero", 2500],
        ["Lince ibérico", "Mamífero", 1668],
        ["Quebrantahuesos", "Ave", 2000],
        ["Oso pardo", "Mamífero", 500]
        ]
   ?>
   <h2>PRODUCTOS</h2>

    <table>
        <thead>
        <tr>
            <th>Especie</th>
            <th>Clase</th>
            <th>Ejemplares</th>
        </tr>
        </thead>
        <tbody>
    <?php
        foreach($animales as $animal){
        list($especie_, $clase_, $ejemplares_)=$animal;
        echo "<tr>";
        echo "<td>$especie_</td> <td>$clase_</td> <td>$ejemplares_</td>";
        echo "</tr>";
        }

     ?>
     </tbody>

 </table>
    
</body>
</html>