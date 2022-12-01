<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pessoas</title>
</head>
<body>
    <pre>
        <?php
            require_once "aluno.php";
            require_once "professor.php";
            require_once "funcionario.php";
            $p1 = new Aluno();
            $p2 = new Professor();
            $p3 = new Funcionario();
            $p1->setNome("Esdras");
            $p2->setNome("Gilmara");
            $p3->setNome("Maria");
            print_r($p1);
            print_r($p2);
            print_r($p3);
        ?>
    </pre>
</body>
</html>