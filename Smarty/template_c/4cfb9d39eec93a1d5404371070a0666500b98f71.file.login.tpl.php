<?php /* Smarty version Smarty-3.1.11, created on 2014-04-15 01:03:05
         compiled from "Smarty\template\login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2922534c69299e5130-86598933%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4cfb9d39eec93a1d5404371070a0666500b98f71' => 
    array (
      0 => 'Smarty\\template\\login.tpl',
      1 => 1397515725,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2922534c69299e5130-86598933',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'titulo' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_534c69299e8e45_83850542',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_534c69299e8e45_83850542')) {function content_534c69299e8e45_83850542($_smarty_tpl) {?><html >
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</title>
    </head>
    <body>

        <form action="login.php" method="post" id="form-contato"  width="800" align="center" >


            <label for="Usuario">Usuario:</label>
            <input type="text" class="width230" name="usuario" id="usuario"  />

            <label for="senha">Senha:</label>
            <input type="password" class="width230" name="senha" id="senha" />       

            <input type="submit" value="Enviar" name="enviar" id="enviar_contato" />


        </form>
        <p align="center"><a href="#">Cadastrar Usuario</a> | <a href="#">Esqueci a Senha</a> </p>
    </body>
</html><?php }} ?>