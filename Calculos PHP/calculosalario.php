<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        
        $sm=$_POST["nums"];
        echo"Valor do sálario: ".sm;
        
        $pam=$_POST["nums1"];
        echo"Valor do porcentual de aumento: ".pam;
        
        $total=$sm*$pam / 100;
        $total_liquido=$sm+$total;
        echo"Calculo Aumento: ".$total;    
        echo"Novo Salario: ".$total_liquido;  
        
        ?>
    </body>
</html>
