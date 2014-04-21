<?php /* Smarty version Smarty-3.1.11, created on 2014-04-20 18:03:39
         compiled from "escrever.php" */ ?>
<?php /*%%SmartyHeaderCode:307615353efdb4b0fd8-64540123%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e98cd62ae35933b5df8be8108f5119b6cfa76722' => 
    array (
      0 => 'escrever.php',
      1 => 1397939610,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '307615353efdb4b0fd8-64540123',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_5353efdb4b3599_81417855',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5353efdb4b3599_81417855')) {function content_5353efdb4b3599_81417855($_smarty_tpl) {?><<?php ?>?php

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
$smarty->assign("conteudo", "../template/livro.tpl");
$smarty->assign("mensagens","Smarty/template/livro.tpl");
$smarty->display("Smarty/template/layout.tpl");
<?php }} ?>