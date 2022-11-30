<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula03-poo</title>
</head>
<body>
    <pre>
        <?php
            require_once "caneta.php";
            $c1 = new Caneta;
            $c1->modelo = "Bic cristal";
            $c1->cor = "Azul";
            //$c1->ponta = 0.5;
            //$c1->carga = 80;
            //$c1->tampada = false;
            $c1->tampar();
            print_r($c1);
            echo "<br>";
            var_dump($c1);
            $c1->rabiscar();
            echo "<br>";
            
        ?>
    </pre>
</body>
</html>