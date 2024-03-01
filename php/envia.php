<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>php</title>
</head>
<body>
    <?php
        $nome = $_GET["nome"];
        $sobrenome = $_GET["sobrenome"];
        $idade = $_GET["idade"];
        $peso = $_GET["peso"];
        $altura = $_GET["altura"];

        echo "Meu nome é $nome ". $sobrenome . ",<br> tenho $idade anos". ",<br> peso $peso kg, <br>". "e tenho $altura m de altura". "\u{1F999}";

    ?>
</body>
</html>