<?php /* Smarty version Smarty-3.1.11, created on 2014-04-14 05:10:56
         compiled from "Smarty\template\layout.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11184534b51c0c0fce8-17621694%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '11065919120a55ec6c85c47c1545b8815fe2134f' => 
    array (
      0 => 'Smarty\\template\\layout.tpl',
      1 => 1397441073,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11184534b51c0c0fce8-17621694',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'titulo' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_534b51c0c60134_44096517',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_534b51c0c60134_44096517')) {function content_534b51c0c60134_44096517($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_image')) include 'C:\\xampp\\htdocs\\livro_visita\\Smarty\\libs\\plugins\\function.html_image.php';
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</title>
</head>
<body bgcolor="#8b795e">
<center>

<table bgcolor="#cdc0b0" width="800" style="border-radius:10px">
<tr>
<td>
<?php echo smarty_function_html_image(array('file'=>"Smarty/template/banner.gif"),$_smarty_tpl);?>

</td>
</tr>
<tr>
<td>
<div id="container">
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['conteudo']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</div>
</td>
</tr>
</table>
<center>
</body>
</html><?php }} ?>