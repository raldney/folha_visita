<?php
require_once "classes/smarty.php";
$smarty->assign("titulo","Livro de Visitas");
$smarty->assign("conteudo","Smarty/template/login.tpl");
$smarty->display("Smarty/template/layout.tpl");


