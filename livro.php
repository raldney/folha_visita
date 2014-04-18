<?php

require_once "conecta.php";
require_once "classes/seguranca.php";
require_once "smarty.php";
require_once "classes/usuario.php";
$proteger = new Seguranca();
$proteger->protegePagina();
$usuario = new Usuario();
$nome = $_SESSION['usuarioNome'];
$email = $_SESSION['usuarioEmail'];

$smarty->assign("titulo", "Livro de Visitas");
$smarty->assign("nome", "$nome");
$smarty->assign("email", "$email");
$smarty->assign("conteudo", "../template/livro.tpl");
$smarty->display("Smarty/template/layout.tpl");
