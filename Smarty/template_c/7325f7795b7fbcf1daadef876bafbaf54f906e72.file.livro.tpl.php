<?php /* Smarty version Smarty-3.1.11, created on 2014-04-15 04:02:14
         compiled from "C:\xampp\htdocs\livro_visita\Smarty\template\livro.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20020534c93265c63a5-26338283%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7325f7795b7fbcf1daadef876bafbaf54f906e72' => 
    array (
      0 => 'C:\\xampp\\htdocs\\livro_visita\\Smarty\\template\\livro.tpl',
      1 => 1397518774,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20020534c93265c63a5-26338283',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_534c93265fb846_69360377',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_534c93265fb846_69360377')) {function content_534c93265fb846_69360377($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Untitled Document</title>
    </head>
    <form action="envia.php" method="post" id="form-contato" align= "center">


        <label for="nome">Nome:</label>


        <label for="email">E-mail:</label>


        <label for="mensagem">Mensagem:</label>
        <textarea rows="5" cols="3" class="width230" name="msg" id="msg"></textarea><br />

        <input type="submit" value="Enviar" name="enviar" id="enviar_contato" />


    </form>
    <body>
    </body>
</html>
<?php }} ?>