<?php
require_once "smarty.php";

$smarty->assign("titulo","Livro de Visitas");
$smarty->assign("mensagem",'Olá, Seja bem vindo ao meu livro de visitas por favor faça o login para usa-lo, caso não possua um basta criar no botão "Cadastrar Usuario"');
$smarty->assign("conteudo","Smarty/template/login.tpl");
$smarty->display("Smarty/template/layout.tpl");


