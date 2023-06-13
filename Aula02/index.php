<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Aula02 - POO</title>
    </head>
    <body>
        <pre>
        <?php
        require_once 'Caneta.php';
        $c1 = new Caneta;
        $c1->setModelo("Bic Cristal");
        
        $c1->setCarga(10);
        $c1->setCor("azul");
         echo"<br>";
        $c1->setPonta(20);
        echo"<br>";
        
       
        print_r($c1);
        $c1->Rabiscar();
        
      
        
        ?>
        </pre>
    </body>
</html>
