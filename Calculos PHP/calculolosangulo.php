<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        
        $al=$_POST["numl"];
        $ll=$_POST["numl1"];
        
        $calculolosangulo = $al * $ll / 2;
            
        echo"O valor da area do quadrado é: ".$calculolosangulo;      
        
        ?>
    </body>
</html>

