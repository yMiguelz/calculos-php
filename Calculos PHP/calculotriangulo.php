<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        
        $at=$_POST["numt"];
        $lt=$_POST["numt1"];
        
        $calculotriangulo = $at * $lt / 2;
            
        echo"O valor da area do quadrado é: ".$calculotriangulo;      
        
        ?>
    </body>
</html>
