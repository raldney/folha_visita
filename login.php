<?php

require_once "conecta.php";
$usuario = addslashes(trim($_POST["usuario"]));
$senha = addslashes(trim($_POST["senha"]));


$logar = mysql_query("SELECT * FROM usuario WHERE nome_usuario='$usuario' AND senha_usuario='$senha'") or die("erro ao selecionar");

if (mysql_num_rows($logar) > 0) {
    require_once "smarty.php";
    $smarty->assign("titulo", "Livro de Visitas - Login");
    $smarty->assign("conteudo", "../template/mensagem.tpl");
    $smarty->display("Smarty/template/layout.tpl");
} else {
    echo '';
}

