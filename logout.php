<?php

function __autoload($classe) {
    require_once 'classes/' . $classe . '.class.php';
}
$mysql = new Mysql('localhost', 'root', '', 'livro_visita');
$sair = new Seguranca($mysql);
$sair->expulsaVisitante();
