<?php /* Smarty version Smarty-3.1.11, created on 2014-04-21 03:00:45
         compiled from "C:\xampp\htdocs\livro_visita\Smarty\template\escrever.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1058453541646323401-43686923%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e3e35224adcba6df45da1b300eb3e4c6dbc29937' => 
    array (
      0 => 'C:\\xampp\\htdocs\\livro_visita\\Smarty\\template\\escrever.tpl',
      1 => 1398042043,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1058453541646323401-43686923',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_5354164636bcf0_75438515',
  'variables' => 
  array (
    'titulo' => 0,
    'nome' => 0,
    'email' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5354164636bcf0_75438515')) {function content_5354164636bcf0_75438515($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_image')) include 'C:\\xampp\\htdocs\\livro_visita\\Smarty\\libs\\plugins\\function.html_image.php';
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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
            <p class="loading"><?php echo smarty_function_html_image(array('file'=>"Smarty/template/img/loading.gif"),$_smarty_tpl);?>
&nbsp;<strong>Enviando...</strong></p>
            <div id="resposta"></div>
            <table id="organizador" >
                <tr>
                    <td>
                    </td>
                    <td >
                        <a href="logout.php" class="buttons" style="margin-left: 200px;">Logout!</a>
                    </td>
                </tr>
                <form action="postarLivro.php" method="post" id="postar" name="form_postar" >
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
                            <p id="max" align="right">140</p><button type="button"  name="escrever" id="escrever" class="buttons">Escrever</button>
                        </td>
                    </tr>
                    <tr>
                        <td>
                        </td>
                        <td>
                            
                        </td>
                    </tr>
                </form>
            </table>
        </fieldset>
    </body>
</html>
<?php }} ?>