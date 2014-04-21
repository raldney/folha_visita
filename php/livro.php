<?php

function __autoload($classe) {
    require_once '../classes/' . $classe . '.class.php';
}

$mysql = new Mysql('localhost', 'root', '', 'livro_visita');
$postar = new postarMensagem($mysql);
$pg = filter_input(INPUT_POST,'pag');
      echo $pg;
if (!$pg) {
    
    $pc = "0";
} else {
    $pc = $pg;
}

$postar->listarMensagem(3);
$anterior = " - 1";
$proximo = " 1";


