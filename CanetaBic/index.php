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
        <pre>
        <?php
        require_once 'Caneta.php';
        $c1 = new Caneta;
        $c1->Cor = "Azul";
        $c1->Modelo = "Bic Cristal";
        $c1->Ponta = 4.9;
        $c1->Tampada = true;
       
        print_r($c1);
        $c1->Destampar();
        print_r($c1);
        
        // put your code here
        ?>
        </pre>
    </body>
</html>
