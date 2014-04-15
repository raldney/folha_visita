<?php

require_once "conecta.php";
require_once "classes/seguranca.php";
require_once "smarty.php";

$proteger = new Seguranca();
$proteger->protegePagina();

$smarty->assign("titulo", "Livro de Visitas");
$smarty->assign("conteudo", "../template/livro.tpl");
$smarty->display("Smarty/template/layout.tpl");
