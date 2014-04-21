<?php

function __autoload($classe) {
    require_once 'classes/' . $classe . '.class.php';
}

$mysql = new Mysql('localhost', 'root', '', 'livro_visita');

$proteger = new Seguranca($mysql);
$proteger->protegePagina();


$nome = $_SESSION['usuarioNome'];
$email = $_SESSION['usuarioEmail'];
require_once "smarty.php";
$smarty->assign("titulo", "Livro de Visitas");
$smarty->assign("nome", "$nome");
$smarty->assign("email", "$email");
$smarty->assign("conteudo", "../template/escrever.tpl");
$smarty->assign("mensagens","Smarty/template/livro.tpl");
$smarty->display("Smarty/template/layout.tpl");
