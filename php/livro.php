<?php

function __autoload($classe) {
    require_once '../classes/' . $classe . '.class.php';
}

$mysql = new Mysql('localhost', 'root', '', 'livro_visita');
$postar = new postarMensagem($mysql);
$pag = filter_input(INPUT_POST, 'pag');
$postar->listarMensagem($pag);


