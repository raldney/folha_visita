<?php
$usuario = $_POST(usuario);
$senha = $_POST(senha);

require_once "../../smarty.php";
require_once "../../conecta.php";
$smarty->assign("titulo","Livro de Visitas - Login ");
$smarty->assign("conteudo","../template/mensagem.tpl");
$smarty->display("../template/layout.tpl");
