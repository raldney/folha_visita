<?php /* Smarty version Smarty-3.1.11, created on 2014-04-19 22:34:42
         compiled from "Smarty\template\livro.tpl" */ ?>
<?php /*%%SmartyHeaderCode:311275352b93d7bf9f1-41935233%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '51193709f6a639d9f061ffd46dd8fd5a9e333e16' => 
    array (
      0 => 'Smarty\\template\\livro.tpl',
      1 => 1397939673,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '311275352b93d7bf9f1-41935233',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_5352b93d7cf3c1_32565237',
  'variables' => 
  array (
    'titulo' => 0,
    'nome' => 0,
    'email' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5352b93d7cf3c1_32565237')) {function content_5352b93d7cf3c1_32565237($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <link rel="stylesheet" type="text/css" href="Smarty/template/estilo/estilo.css" />
        <script type="text/javascript" src="jquery-1.4.2.js"></script>
        <script type="text/javascript" src="postaLivro.js"></script>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</title>
    </head>
    <body>
    <br />
        <fieldset class="height290"> 
            <table id="organizador" >
                <tr>
                    <td>
                    </td>
                    <td >
                        <a href="logout.php" class="buttons" style="margin-left: 200px;">Logout!</a>
                    </td>
                </tr>

                <form action="postarLivro.php" method="post" id="form-login" >

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
                            <textarea rows="5" cols="3"  name="mensagem" id="mensagem" ></textarea><br />
                        </td>
                    </tr>
                    <tr>
                        <td>
                        </td>
                        <td>

                            <button type="button"  name="enviar" id="enviar" class="buttons">Enviar</button>
                        </td>
                    </tr>
                    <tr>
                        <td>
                        </td>
                        <td>

                            <div id="resposta"></div>

                        </td>
                    </tr>

                </form>

            </table>
        </fieldset>

    </body>
</html>
<?php }} ?>