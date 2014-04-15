<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    require_once "classes/usuario.php";

    $usuario = new Usuario();
    $usuario->setNome(addslashes(trim($_POST["usuario"])));
    $usuario->setSenha(addslashes(trim($_POST["senha"])));
    $usuario->setEmail(addslashes(trim($_POST["email"])));
    $usuario->cadastrarUsuario();

    header("Location: index.php");
}
require_once "smarty.php";
$smarty->assign("titulo", "Livro de Visitas - Cadastrar Usuario");
$smarty->assign("conteudo", "../template/cadastrar.tpl");
$smarty->display("Smarty/template/layout.tpl");



