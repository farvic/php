<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variaveis - Curso PHP</title>
</head>

<body>
    <?php
    $nome = 'Victor';
    $idade = 27;
    $peso = 84.3;
    $empregado = true;


    ?>
    <h1>Ficha cadastral</h1>
    <br />
    <p>Nome: <?= $nome ?></p>
    <p>Idade: <?= $idade ?></p>
    <p>Peso: <?= $peso ?></p>
    <p>Empregado: <?= $empregado ?></p>

    <?php
    echo 'Oi,' . $nome . ', tudo bem?';
    echo '<br/>';

    // Com aspas duplas

    echo "Olá, $nome";

    ?>
</body>

</html>