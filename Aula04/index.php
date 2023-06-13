<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Project/PHP/PHPProject.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
    
        <?php
        
        require_once 'Caneta.php';
        // put your code here
        $c1 = new Caneta("Bic Cristal","Azul",0.9);
        $c2 = new Caneta("Zonald","Amarela",0.8);
      
       print_r($c1);
      print_r($c2)
        ?>
        </pre>
      
    </body>
</html>
