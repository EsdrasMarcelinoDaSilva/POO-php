<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Combate de Emoji</title>
</head>
<body>
    <?php
        require_once "classe.php";
        require_once "class.php";
        $L = array();
    
        $L[0] = new Lutador("Pretty Boy", "França", 31, 1.75, 68.9, 11, 3, 1);
    
        $L[1] = new Lutador("Putscript", "Brasil", 29, 1.68,
        57.8, 14, 2, 3);
        
        $L[2] = new Lutador("Snapshadow", "EUA", 35, 1.65, 80.9, 12, 2, 1);
        
        $L[3] = new Lutador("Deadcode", "Austrália", 28, 1.93, 81.6, 13, 0, 2);
       
        $L[4] = new Lutador("Ufocobol", "Brasil", 37, 1.70, 119.3, 5, 4, 3);
        
        $L[5] = new Lutador("Nerdaard", "EUA", 30, 1.81, 105.7, 12, 2, 4);
        
        $UEC01 = new Luta();
        $UEC01->marcarLuta($L[4],$L[5]);
        $UEC01->lutar();

        //$L[3]->perderLuta();
        //$L[0]->status();
        //$L[1]->status();
        //$L[3]->apresentar();
    ?>
</body>
</html>