<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2</title>
</head>
<body>
    <h2>
    Vamos a crear un formulario que nos permita ejecutar el cálculo de varios algoritmos
matemáticos.
Crea una función sumatorio que reciba un número positivo y devuelva el resultado
de sumar todos los números desde el 0 hasta dicho número.
Crea una función factorial que reciba un número igual o mayor a 1 y devuelva el
resultado de sumar todos los números desde 1 hasta dicho número.
Por último, crea un formulario con un campo de texto o numérico y un select.
Mediante el select se elegirá si usaremos la función sumatorio o la función factorial,
y en el campo de texto introduciremos el número deseado. Así, si por ejemplo
introducimos “3” y seleccionamos “factorial”, el formulario mostrará el resultado “6”.
Además, en caso de introducir un valor numérico no permitido, se mostrará un
mensaje de error por ejemplo, al introducir “-3” y seleccionar “factorial”.
    </h2>
    <?php
    
    function Sumatorio(int $num) : int{
        $sumatorio=0;
        for($i=0;$i<=$num;$i++){
            $sumatorio+=$i;
        }
        return $sumatorio;
    }
    function Factorial(int $num) : int{
        $factorialo=1;
        for($i=1;$i<=$num;$i++){
            $sumatorio*=$i;
        }
        return $factorial;
    }


    ?>
    
</body>
</html>