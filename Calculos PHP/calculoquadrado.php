<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        
        $aq=$_POST["numq"];
        $lq=$_POST["numq1"];
        
        $calculoquadrado= $aq * $lq;
            
        echo"O valor da area do quadrado é: ".$calculoquadrado;      
        
        ?>
    </body>
</html>
