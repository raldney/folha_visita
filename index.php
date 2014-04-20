<?php
/*function __autoload($classe){
    require_once 'classes/'.$classe.'.class.php';
}
 $mysql = new Mysql('localhost','root','','livro_visita');*/
require_once "smarty.php";

$smarty->assign("titulo","Livro de Visitas");
$smarty->assign("mensagem",'Olá, Seja bem vindo ao meu livro de visitas por favor faça o login para usa-lo, caso não possua um, basta criar no botão "Cadastrar Usuario"');
$smarty->assign("conteudo","Smarty/template/login.tpl");
$smarty->assign("mensagens","Smarty/template/livro.tpl");
$smarty->display("Smarty/template/layout.tpl");


