<?php /* Smarty version Smarty-3.1.11, created on 2014-04-20 19:04:37
         compiled from "Smarty\template\login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2922534c69299e5130-86598933%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4cfb9d39eec93a1d5404371070a0666500b98f71' => 
    array (
      0 => 'Smarty\\template\\login.tpl',
      1 => 1398013301,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2922534c69299e5130-86598933',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_534c69299e8e45_83850542',
  'variables' => 
  array (
    'titulo' => 0,
    'mensagem' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_534c69299e8e45_83850542')) {function content_534c69299e8e45_83850542($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_image')) include 'C:\\xampp\\htdocs\\livro_visita\\Smarty\\libs\\plugins\\function.html_image.php';
?><html >
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

        <title><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</title>
        <link rel="stylesheet" type="text/css" href="Smarty/template/estilo/estilo.css" />
        
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
                    <form action="login.php" method="post" id="form-login" align="center" >
                        <fieldset>
                            <p class="loading"><?php echo smarty_function_html_image(array('file'=>"Smarty/template/img/loading.gif"),$_smarty_tpl);?>
&nbsp;<strong>Autenticando...</strong></p>
                            <div id="resposta"></div>
                            <label for="Usuario">Usuario:</label>
                            <input type="text"  name="usuario" id="usuario"  />

                            <label for="senha">Senha:</label>
                            <input type="password"  name="senha" id="senha" /> <br>
                            <button id="loginButton" type="button" name="loginButton" class="buttons">Enviar</button> 
                        </fieldset>
                    </form>
                </td>
            </tr>
            <tr>
                <td>
                    <a href="cadastrar.php" class="buttons" style="margin-left: 600px">Cadastrar Usuario</a>
                </td>
            </tr>
        </table>  



    </body>
</html><?php }} ?>