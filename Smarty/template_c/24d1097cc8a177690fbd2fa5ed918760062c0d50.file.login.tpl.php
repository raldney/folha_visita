<?php /* Smarty version Smarty-3.1.11, created on 2014-04-15 02:46:08
         compiled from "C:\xampp\htdocs\livro_visita\Smarty\template\login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:127534c8150080d04-61968520%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '24d1097cc8a177690fbd2fa5ed918760062c0d50' => 
    array (
      0 => 'C:\\xampp\\htdocs\\livro_visita\\Smarty\\template\\login.tpl',
      1 => 1397517422,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '127534c8150080d04-61968520',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'titulo' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_534c81500ca123_48058423',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_534c81500ca123_48058423')) {function content_534c81500ca123_48058423($_smarty_tpl) {?><html >
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
        <p align="center"><a href="cadastrar.php">Cadastrar Usuario</a> | <a href="#">Esqueci a Senha</a> </p>
    </body>
</html><?php }} ?>