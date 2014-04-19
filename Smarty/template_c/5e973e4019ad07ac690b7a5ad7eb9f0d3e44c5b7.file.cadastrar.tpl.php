<?php /* Smarty version Smarty-3.1.11, created on 2014-04-19 06:17:17
         compiled from "Smarty\template\cadastrar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:306265351f0548b92f2-23950320%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5e973e4019ad07ac690b7a5ad7eb9f0d3e44c5b7' => 
    array (
      0 => 'Smarty\\template\\cadastrar.tpl',
      1 => 1397880910,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '306265351f0548b92f2-23950320',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_5351f0548ec071_94561198',
  'variables' => 
  array (
    'titulo' => 0,
    'mensagem' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5351f0548ec071_94561198')) {function content_5351f0548ec071_94561198($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <link rel="stylesheet" type="text/css" href="Smarty/template/estilo.css" />
        <script type="text/javascript" src="js/jquery-1.4.2.js"></script>
        <script type="text/javascript" src="js/cadastrarUsuario.js"></script>
        <title><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</title>
    </head>
    <body>
        <table id="organizador">
            <tr>
                <td  id="texto">
                    <h1><?php echo $_smarty_tpl->tpl_vars['mensagem']->value;?>
</h1>
                </td>
            </tr>
            <tr>
                <td>
                    <form action="php/cadastrar.php" method="post" id="form-cadastrar"  width="800" align="center" >


                        <label for="Usuario">Usuario:</label>
                        <input type="text"  name="usuario" id="usuario"  />

                        <label for="Email">E-Mail:</label>
                        <input type="text"  name="email" id="email"  />

                        <label for="WebSite">WebSite:</label>
                        <input type="text"  name="site" id="site"  />

                        <label for="senha">Senha:</label>
                        <input type="password"  name="senha" id="senha" />       
                        <div id="resposta"></div>
                        <p><button type="button" id="cadastrarButton" class="buttons" name="enviar" >Enviar</button> </p>


                    </form>
                </td>
            </tr>
        </table>

    </body>
</html>
<?php }} ?>