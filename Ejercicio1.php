<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1</title>
</head>
<body>
    <h2>
    Vamos a crear un formulario que permita convertir entre diferentes tipos de divisas.
Crea una función llamada cambiarDivisa que reciba como parámetros una cantidad
de dinero, un string que represente la divisa en la que está, y otro string que
represente la divisa en la que queramos convertir el dinero. La función devolverá el
equivalente en la segunda divisa del dinero especificado en la primera divisa. Así, la
función cambiarDivisa(10, “€”, “$”) devolverá 10.59 dólares,tomando como base el
tipo de cambio a fecha 10/10/2023.
La función permitirá cambiar entre euros, dólares y yenes. A continuación tienes los
tipos de cambio entre estas divisas: Crea un formulario HTML que, mediante un campo numérico o de texto y dos
campos con RadioButton, permita cambiar entre las distintas divisas empleando la
función anteriormente creada
    </h2>
    <?php
     function cambiarDivisa(float $dinero, string $tipoDivisa, string $divisaCambio) : float{
        $res="";
        if($tipoDivisa=="Euros" && $divisaCambio=="Dolares"){
            $res=$dinero*1.06;
        }else if($tipoDivisa=="Euros" && $divisaCambio=="Yenes"){
            $res=$dinero*157.56;
        }else if($tipoDivisa=="Dolares" && $divisaCambio=="Euros"){
            $res=$dinero*0.94;
        }else if($tipoDivisa=="Dolares" && $divisaCambio=="Yenes"){
            $res=$dinero*148.73;
        }else if($tipoDivisa=="Yenes" && $divisaCambio=="Euros"){
            $res=$dinero*0.0063;
        }else if($tipoDivisa=="Yenes" && $divisaCambio=="Dolares"){
            $res=$dinero*0.0067;
        }
        return $res;
    }
    ?>
 



</body>
</html>