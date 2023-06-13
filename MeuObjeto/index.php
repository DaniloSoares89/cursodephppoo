<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Meu Carro</title>
    </head>
    <pre>
    <body>
        <?php
        require_once 'Carro.php';
        $c1 = new Carro;
        $c1->setCor("Amarelo");
        $c1->setModelo("versa");
        $c1->setAno(1989);
        $c1->setTanque(60);
        $c1->setTanque($c1->getTanque() + 400);
        $c1->setAno($c1->getAno() + 33);
        $c1->Estacionar();
        print_r($c1);
        // put your code here
        ?>
    </pre>
    </body>
</html>
