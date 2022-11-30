<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Capsula</title>
</head>
<body>
    <h1>Projeto Controle Remoto</h1>
    <pre>
        <?php
           require_once "Classe.php";
           $C = new ControleRemoto();
           $C->ligar();
           $C->menosVolume();
           $C->play();
           $C->abrirMenu();
           
        ?>
    </pre>
</body>
</html>