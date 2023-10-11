<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funcion ejercicio 3</title>
</head>
<body>
    <?php 
    function ComprobarEstado(int $num) : string{
        $string="";
        if($num==0){
             $string="Extintos, nos los comimos.";
        } else if($num>0 &&$num<=500){
            $string= "En peligro crítico.";
        }else if($num>500 &&$num<=2000){
            $string= "En peligro (namas).";
        }else if($num>2000 ){
            $string="En amenaza.";
        }
         
        return $string;
    }
    ?>
    
</body>
</html>