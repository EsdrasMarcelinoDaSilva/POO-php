<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Primeiro projeto POO</title>
</head>
<body>
<!--utilizar os metodos GETTERS E SETTERS é melhor e bastante recomendado-->
    <pre>
        <?php
           require_once "caneta.php";
           $c1 = new Caneta("BIC ", "Azul ",0.5);
           $c2 = new Caneta("kkk ", "Verde ", 5.10);
           print_r($c1);
           echo "<br>";
           print_r($c2);
        ?>
    </pre>
</body>
</html>