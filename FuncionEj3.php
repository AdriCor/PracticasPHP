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
        if($num==0){
            return "<p>Extintos, nos los comimos.<p>";
        } else if($num>0 &&$num<=500){
            return "<p>En peligro crítico.<p>";
        }else if($num>500 &&$num<=2000){
            return "<p>En peligro (namas).<p>";
        }else if($num>2000){
            return "<p>En amenaza.<p>";
        }
         
    
        
    }
    ?>
    
</body>
</html>