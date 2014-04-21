<?php
require_once "smarty.php";
$smarty->assign("titulo","Livro de Visitas - Cadastro");
$smarty->assign("mensagem",'Para cadastrar basta preencher seus dados e clicar no botão "Enviar"');
$smarty->assign("conteudo","Smarty/template/cadastrar.tpl");
$smarty->assign("mensagens","livro.tpl");
$smarty->display("Smarty/template/layout.tpl");

