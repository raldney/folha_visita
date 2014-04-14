<?php /* Smarty version Smarty-3.1.11, created on 2014-04-14 05:10:56
         compiled from "Smarty\template\login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:27177534b51c0c9b847-22296586%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4cfb9d39eec93a1d5404371070a0666500b98f71' => 
    array (
      0 => 'Smarty\\template\\login.tpl',
      1 => 1397443857,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '27177534b51c0c9b847-22296586',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'titulo' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_534b51c0c9f5a4_91883216',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_534b51c0c9f5a4_91883216')) {function content_534b51c0c9f5a4_91883216($_smarty_tpl) {?><html >
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</title>
</head>
<body>
<center>
<form action="../Smarty/classes/login.php" method="post" id="form-contato"  width="800" >
        
        
        <label for="Usuario">Usuario:</label>
        <input type="text" class="width230" name="usuario" id="usuario"  />
        
        <label for="senha">Senha:</label>
        <input type="password" class="width230" name="senha" id="senha" />       
        
        <input type="submit" value="Enviar" name="enviar" id="enviar_contato" />
       
        
        </form>
      <center>  
</body>
</html><?php }} ?>