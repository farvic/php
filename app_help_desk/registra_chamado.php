<?php

session_start();

$titulo = str_replace('#', '-', $_POST['titulo']);
$categoria = str_replace('#', '-', $_POST['categoria']);
$descricao = str_replace('#', '-', $_POST['descricao']);

// poderia ter feito isso usando o implode

$arquivo = fopen('../../app_help_desk/arquivo.hd', 'a');;

$texto = $_SESSION['id'] . '#' . $titulo . '#' . $categoria . '#' . $descricao . PHP_EOL;

fwrite($arquivo, $texto);

fclose($arquivo);

header('Location: consultar_chamado.php');
