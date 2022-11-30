<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Objeto Pessoa</title>
</head>
<body>
    <pre>
        <?php
        require_once "pessoa.php";
        require_once "livro.php";
            $P[0] = new Pessoa("Lira", 14, "F");
            $P[1] = new Pessoa("Alice", 12, "F");

        
            $L[0] = new Livro("Php básico ", "Esdras", 400, $P[0]);  
            $L[1] = new Livro("POO em Php", "Tarciso", 367, $P[1]);
            
            $L[0]->detalhes();
            $P[0]->fazerAniversario();
        ?>
    </pre>
</body>
</html>