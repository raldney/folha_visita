<?php /* Smarty version Smarty-3.1.11, created on 2014-04-15 00:01:13
         compiled from "C:\xampp\htdocs\livro_visita\Smarty\template\mensagem.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7787534c5aa9ab83a1-45503768%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '833ac7284817d85976a8fb6597f88311cf4fbfe3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\livro_visita\\Smarty\\template\\mensagem.tpl',
      1 => 1397435512,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7787534c5aa9ab83a1-45503768',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_534c5aa9b009f6_77504770',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_534c5aa9b009f6_77504770')) {function content_534c5aa9b009f6_77504770($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<form action="envia.php" method="post" id="form-contato" align= "center">
        
        <fieldset>
        <label for="nome">Nome:</label>
       
        
        <label for="email">E-mail:</label>
        
        
        <label for="mensagem">Mensagem:</label>
        <textarea rows="5" cols="3" class="width230" name="msg" id="msg"></textarea><br />
        
        <input type="submit" value="Enviar" name="enviar" id="enviar_contato" />
        </fieldset>
        
        </form>
<body>
</body>
</html>
<?php }} ?>