<?php

require_once "classes/conecta.php";
$usuario = trim($_POST["usuario"]);
$senha = trim($_POST["senha"]);

echo $usuario;
$logar = mysql_query("SELECT * FROM usuario WHERE nome_usuario='$usuario' AND senha_usuario='$senha'") or die("erro ao selecionar");
/*aqui depois de verificado redirecionamos a pagina secreta(caso nome e senha estarem corretos) ou senha
e apelido não conferem caso tais estiverem errados. Repare que há uma rotina para o valor inserido em senha não seja nulo.
obs: Aonde esta escrito paginasecreta.php é aonde vc deve colocar a página para onde o script ira redirecionar*/
echo $senha;
if (mysql_num_rows($logar)>0 ){
require_once "smarty.php";
$smarty->assign("titulo","Livro de Visitas - Login ");
$smarty->assign("conteudo","../template/mensagem.tpl");
$smarty->display("Smarty/template/layout.tpl");
} else {
echo '<p align="center">Senha ou apelido não conferem<BR><a href="javascript:history.back(1);">tente denovo</a></p>';
}

