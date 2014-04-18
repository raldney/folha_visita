<?php /* Smarty version Smarty-3.1.11, created on 2014-04-18 07:08:19
         compiled from "C:\xampp\htdocs\livro_visita\Smarty\template\livro.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20020534c93265c63a5-26338283%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7325f7795b7fbcf1daadef876bafbaf54f906e72' => 
    array (
      0 => 'C:\\xampp\\htdocs\\livro_visita\\Smarty\\template\\livro.tpl',
      1 => 1397797695,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20020534c93265c63a5-26338283',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_534c93265fb846_69360377',
  'variables' => 
  array (
    'titulo' => 0,
    'nome' => 0,
    'email' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_534c93265fb846_69360377')) {function content_534c93265fb846_69360377($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <link rel="stylesheet" type="text/css" href="Smarty/template/estilo.css" />
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</title>
    </head>
    <body>

        <table id="organizador" >
            <tr>
                <td>
                </td>
                <td >
                    <a href="index.php" class="buttons" style="margin-left: 200px;margin-top: 200px ">Logout!</a>
                </td>
            </tr>

            <form action="envia.php" method="post" id="form-login" >

                <tr>
                    <td>
                        <h1>Nome:</h1>
                    </td>
                    <td >
                        <h1><?php echo $_smarty_tpl->tpl_vars['nome']->value;?>
</h1>
                    </td>
                </tr>
                <tr>
                    <td >
                        <h2>E-Mail:</h2>
                    </td>
                    <td >
                        <h2><?php echo $_smarty_tpl->tpl_vars['email']->value;?>
</h2>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="mensagem">Mensagem:</label>  
                    </td>
                    <td>

                        <textarea rows="5" cols="3"  name="msg" id="msg" ></textarea><br />
                    </td>
                </tr>



                <tr>
                    <td>
                    </td>
                    <td>
                        <input type="submit" value="Enviar" name="enviar" id="enviar_contato" class="buttons"/>

                    </td>
                </tr>
            </form>
        </table>




    </body>
</html>
<?php }} ?>